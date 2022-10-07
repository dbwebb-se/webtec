#!/usr/bin/env bash
#
# Execute all scripts in a subdirectory
#

# Usage
if (( $# != 3 )); then
    printf "Usage: run.bash <kmom_number> <acronym> <log_docker>\n"
    exit 1
fi

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
export KMOM="$1"
export COURSE_REPO="$PWD"
export ACRONYM="$2"
export LOG="$( realpath $DIR/../../../$3 )"
(( $? == 0 )) || exit 2

TEST_TARGET="$DIR/$KMOM"
if [[ ! -d "$TEST_TARGET" ]]; then
    printf "No such directory '%s'\n" "$TEST_TARGET"
    exit 1
fi
WORK_TARGET="$DIR/.work"

MSG_OK="\033[0;30;42mOK\033[0m"
MSG_DONE="\033[1;37;40mDONE\033[0m"
#export MSG_WARNING="\033[43mWARNING\033[0m"
export MSG_WARNING="\033[0;30;43mWARNING\033[0m"
export MSG_FAILED="\033[0;37;41mFAILED\033[0m"



#
# Print a header
#
function header {
    local title=$( echo $1 | cut -d "_" -f2- )
    title=$( echo $title | cut -d "." -f1 )
    title=$( echo $title | sed 's/-/\//g' )
    title=$( echo $title | sed 's/_/ /g' )
    printf "\033[32;01m>>> -------------- %-40s -------------------------\033[0m\n" "$title"
}

#
# Print information text
#
function text {
    printf "$@"
}

#
# Log to summary
#
function doLog {
    local status=2

    [[ $3 ]] && status=1

    if (( $1 )); then
        echo "[-] $2" >> "$LOG"
        exit $status
    fi

    echo "[+] $2" >> "$LOG"
    exit 0
}

export -f doLog

# Gather all scripts into one dir
install -d "$WORK_TARGET"
rm -f "$WORK_TARGET/"*
SUITES_FILE="$TEST_TARGET/suites"
if [[ -f "$SUITES_FILE" ]]; then
    while read dir; do
        if [[ ! -d "$TEST_TARGET/../$dir" ]]; then
            printf "No such dir '$dir' to read testsuite from.\n %s\n" "$TEST_TARGET/../$dir"
            exit 1
        fi
        cp -f "$TEST_TARGET/../$dir/"??*_*.bash "$WORK_TARGET/" &> /dev/null
    done < <( grep -v "^#" < "$SUITES_FILE" )
fi
cp -f "$TEST_TARGET/"??*_*.bash "$WORK_TARGET/" &> /dev/null

# Run it
printf "\n"
header "Start"
printf "Running scripts in '%s'.\n" "$DIR/$KMOM"

summary=
if ! compgen -G "$WORK_TARGET/??*_*.bash" > /dev/null; then
    printf "\n$MSG_DONE No script to execute.\n"
    exit 0
fi

file="$DIR/docker_pre.bash"
[[ -f "$file" ]] && . "$file"

for file in $WORK_TARGET/??*_*.bash; do
    output=
    voutput=
    target=$( basename "$file" )
    echo && header "$target"

    bash "$file"
    status=$?
    if (( $status == 2 )); then
        output="$MSG_WARNING $target\n"
        voutput="$MSG_WARNING $target\n"
    elif (( $status )); then
        output="$MSG_FAILED  $target\n"
        voutput="$MSG_FAILED  $target\n"
    else
        output="$MSG_OK      $target\n"
        voutput="$MSG_OK\n"
    fi
    printf "$voutput"
    summary="$summary$output"
done

printf "\n$MSG_DONE All scripts were executed.\n"
header "Summary"
printf "$summary"
