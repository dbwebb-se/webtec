#!/usr/bin/env bash
#
# Execute all scripts in a subdirectory
#
# Arguments:
#  course_dir           Absolute path to the basedir of the course repo.
#  course               Nickname of the course.
#  acronym              Acronym of the user executing the script.
#  test_suite           Name of the testsuite to execute.
#  <optional args>      Optional arguments
#

# Usage
if (( $# < 4 )); then
    printf "Usage: %s <course_dir> <course> <acronym> <test_suite> <optional args...>\n" \
        "$( basename -- "$0" )"
    exit 1
fi

cd $1
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
export COURSE_REPO_BASE="$1"
export COURSE="$2"
export ACRONYM="$3"
export TESTSUITE="$4"

# Prepare the logdir and logfile
LOG_DIR="$COURSE_REPO_BASE/.log/test"
[[ -d $LOG_DIR ]] || install -d "$LOG_DIR"
export LOG="$( realpath "$COURSE_REPO_BASE/.log/test/$TESTSUITE" )"
(( $? == 0 )) || exit 2
> "$LOG"

# Check that the testsuite is an actual directory
TEST_TARGET="$DIR/suite.d/$TESTSUITE"
if [[ ! -d "$TEST_TARGET" ]]; then
    printf "No such directory '%s'\n" "$TEST_TARGET"
    exit 1
fi
WORK_TARGET="$DIR/suite.d/.work"

# Export to be used in test scripts
MSG_OK="\033[0;30;42mOK\033[0m"
MSG_DONE="\033[1;37;40mDONE\033[0m"
export MSG_WARNING="\033[43mWARNING\033[0m"
export MSG_FAILED="\033[0;37;41mFAILED\033[0m"



#
# Print a header
#
function header {
    printf "\033[32;01m>>> -------------- %-30s -------------------------\033[0m\n" "$1"
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
# printf "\n"
header "Start"
printf "%s/%s/%s %s\n" "$ACRONYM" "$COURSE" "$TESTSUITE" "$( date )"

summary=
if ! compgen -G "$WORK_TARGET/??*_*.bash" > /dev/null; then
    printf "\n$MSG_DONE No script to execute.\n"
    exit 0
fi

file="$DIR/pre.bash"
[[ -f "$file" ]] && . "$file"

for file in "$WORK_TARGET/"??*_*.bash; do
    output=
    target=$( basename "$file" )
    echo && header "$target"

    bash "$file"
    status=$?
    if (( $status == 2 )); then
        output="$MSG_WARNING $target\n"
    elif (( $status )); then
        output="$MSG_FAILED  $target\n"
    else
        output="$MSG_OK      $target\n"
    fi
    printf "$output"
    summary="$summary$output"
done

printf "\n"
header "Summary"
printf "$summary"
