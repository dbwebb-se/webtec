#!/usr/bin/env bash

# Course specific settings
WEB_SERVER="http://www.student.bth.se"
COURSE="webtec"
WEB_SERVER_PATH="dbwebb-kurser/$COURSE/me"

# Messages
MSG_OK="\033[0;30;42mOK\033[0m"
MSG_DONE="\033[1;37;40mDONE\033[0m"
MSG_WARNING="\033[43mWARNING\033[0m"
MSG_FAILED="\033[0;37;41mFAILED\033[0m"



# ------------------------ Kmom specific stuff ----------------------
#
# Add a common header
#
grade-kmom-header()
{
    local kmom=$1
    local acronym=$2

    printf "\n\033[0;30;42m>>> ======= %-25s =======\033[0m\n" "$COURSE $kmom $acronym"
    date
}



#
# Add a common footer
#
grade-kmom-footer()
{
    local kmom=$1
    local acronym=$2

    feedbackToClipbboard $kmom
}



#
# Grade kmom01
#
grade-kmom01()
{
    local kmom=$1
    local acronym=$2

    grade-kmom-header $kmom $acronym

    local url="$WEB_SERVER/~$acronym/$WEB_SERVER_PATH"
    openUrl "$url/report"
    openUrl "$url/onepage"
    openUrl "$url/htmlcss"
    openUrl "https://validator.w3.org/unicorn/check?ucn_task=conformance&ucn_uri=$url/htmlcss"
    
    grade-kmom-footer $kmom $acronym
}



#
# Grade a kmom
#
grade-kmom03()
{
    local kmom=$1
    local acronym=$2
    local url=
    
    grade-kmom-header $kmom $acronym
    
    printf "Not yet implemented."
    
    grade-kmom-footer $kmom $acronym
}



#
# Grade a kmom
#
grade-kmom05()
{
    local kmom=$1
    local acronym=$2
    local url=
    
    grade-kmom-header $kmom $acronym

    printf "Not yet implemented."
    
    grade-kmom-footer $kmom $acronym
}



#
# Grade a kmom
#
grade-kmom10()
{
    local kmom=$1
    local acronym=$2
    local url=
    
    grade-kmom-header $kmom $acronym

    printf "Not yet implemented."
    
    grade-kmom-footer $kmom $acronym
}



# ------------------------ General functions and code ----------------------
#
# Press enter to continue
#
pressEnterToContinue()
{
    local void

    if [[ ! $YES ]]; then
        printf "\nPress enter to continue..."
        read void
    fi
}



#
# Open an url in the default browser
#
# @arg1 the url
#
function openUrl {
    local url="$1"

    printf "$url\n" 2>&1
    eval "$BROWSER" '$url' &
}



#
# Copy feedback text to clipboard
#
feedbackToClipbboard()
{
    local kmom=$1
    local feedbackFile="$INSPECT_SOURCE_DIR/text/$kmom.txt"
    local output=

    output=$( eval echo "\"$( cat "$feedbackFile" )"\" )
    printf "%s" "$output" | eval $TO_CLIPBOARD
}



#
# Check if all tools are available
#
function checkTool() {
    if ! hash "$1" 2> /dev/null; then
        printf "$MSG_FAILED Missing '$1'.\n$2\n"
        exit -1
    fi
}



#
# Find the course repo file.
#
function findCourseRepoFile
{
    dir="$( pwd )/."
    while [ "$dir" != "/" ]; do
        dir=$( dirname "$dir" )
        found="$( find "$dir" -maxdepth 1 -name $DBW_COURSE_FILE_NAME )"
        if [ "$found" ]; then
            DBW_COURSE_DIR="$( dirname "$found" )"
            break
        fi
    done
}



#
#
#
gui-firstpage()
{
    local message

    read -r -d "" message << EOD
README ($BACKTITLE)
================================================
This is a small graphical gui to working with grading assignments.

//Mikael
EOD

    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --msgbox "$message" \
        24 80 \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
gui-read-kmom()
{
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --default-item "$1" \
        --menu "Select kmom" \
        24 80 \
        20 \
        "kmom01" "kmom01" \
        "kmom03" "kmom03" \
        "kmom05" "kmom05" \
        "kmom10" "kmom10" \
        3>&1 1>&2 2>&3 3>&-
}



#
#
#
gui-read-acronym()
{
    dialog \
        --backtitle "$BACKTITLE" \
        --title "$TITLE" \
        --inputbox "Select student acronym (ctrl-u to clear)" \
        24 80 \
        "$1" \
        3>&1 1>&2 2>&3 3>&-
}



# ---------------------------- Bootstrap ------------------
# Check needed utils is available and setup environment.
#
#
checkTool dialog "Install using your packet manager (apt-get|brew install dialog)."
checkTool realpath "Install using your packet manager (brew install coreutils)."
checkTool tree "Install using your packet manager (apt-cyg|apt-get|brew install tree)."

# What is the directory of the current course repo, find recursivly up the tree
DBW_COURSE_FILE_NAME=".dbwebb.course"
findCourseRepoFile
[[ $DBW_COURSE_DIR ]] || die "You must run this command within a valid course repo."
DIR="$DBW_COURSE_DIR"

# Source the user config file if it exists
DBWEBB_GUI_CONFIG_FILE="$HOME/.dbwebb/gui_config.bash"
# shellcheck source=$HOME/.dbwebb.gui_config.bash
[[ -f $DBWEBB_GUI_CONFIG_FILE ]] && source "$DBWEBB_GUI_CONFIG_FILE"

# Settings
BACKTITLE="dbwebb/$COURSE"
TITLE="Work with kmoms"

# OS specific default settings
BROWSER="firefox"
TO_CLIPBOARD="xclip -selection c"
OS_TERMINAL=""

if [[ "$OSTYPE" == "linux-gnu" ]]; then   # Linux, use defaults
    OS_TERMINAL="linux"
elif [[ "$OSTYPE" == "darwin"* ]]; then   # Mac OSX
    OS_TERMINAL="macOS"
    TO_CLIPBOARD="iconv -t macroman | pbcopy"
    #BROWSER="/Applications/Firefox.app/Contents/MacOS/firefox"
    BROWSER="open"
elif [[ "$OSTYPE" == "cygwin" ]]; then    # Cygwin
    OS_TERMINAL="cygwin"
    TO_CLIPBOARD="cat - > /dev/clipboard"
    #BROWSER="/cygdrive/c/Program\ Files\ \(x86\)/Google/Chrome/Application/chrome.exe"
    BROWSER="explorer"
elif [[ "$OSTYPE" == "msys" ]]; then
    :
    # Lightweight shell and GNU utilities compiled for Windows (part of MinGW)
fi

# Use defaults or overwrite from configuration/environment settings
BROWSER=${DBWEBB_BROWSER:-$BROWSER}
TO_CLIPBOARD=${DBWEBB_TO_CLIPBOARD:-$TO_CLIPBOARD}
TEACHER_SIGNATURE=${DBWEBB_TEACHER_SIGNATURE:-"// XXX"}

# Set source dir for scripts and feedback
INSPECT_SOURCE_DIR="$DIR/.dbwebb/inspect-src"
# INSPECT_SOURCE_DIR=${DBWEBB_INSPECT_SOURCE_DIR:-$INSPECT_SOURCE_DIR}
# INSPECT_SOURCE_CONFIG_FILE="$INSPECT_SOURCE_DIR/config.bash"

[[ -d  "$INSPECT_SOURCE_DIR" ]] || die "The path to inspect source files does not exists:\n INSPECT_SOURCE_DIR='$INSPECT_SOURCE_DIR'."

# 
# # shellcheck source=$DIR/.dbwebb/inspect-src/config.bash
# [[ -f $INSPECT_SOURCE_CONFIG_FILE ]] && source "$INSPECT_SOURCE_CONFIG_FILE"



# ---------------------------------------------------------------------------
#
# Main function
#
main()
{
    local acronym=
    local kmom=

    gui-firstpage
    while true; do
        acronym=$( gui-read-acronym $acronym )
        [[ -z $acronym ]] && continue

        kmom=$( gui-read-kmom $kmom )
        [[ -z $kmom ]] && continue

        grade-$kmom $kmom $acronym
        pressEnterToContinue
    done
}
main
