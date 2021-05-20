#!/usr/bin/env bash
#
# This script is called by 'dbwebb test <target>' and can be used to prepare
# and execute additional scripts.
#
# Arguments:
#  course_dir           Absolute path to the basedir of the course repo.
#  course               Nickname of the course.
#  acronym              Acronym of the user executing the script.
#  <test_suite>         Name of the testsuite to execute.
#  <optional args>      Optional arguments
#

# Usage
if (( $# < 3 )); then
    printf "Usage: %s <course_dir> <course> <acronym> <test-suite> <optional args...>\n" \
        "$( basename -- "$0" )"
    exit 1
fi

# If you want to support a target "test all" where "all" is default.
# Otherwise you need to supply the fourth option "test_suite" to the runner.
if (( $# < 4 )); then
    printf "You are missing the name of the test suite to execute.\n"
    exit 1
fi

# Execute the actual runner
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
bash "$DIR/run.d.bash" "$@"
