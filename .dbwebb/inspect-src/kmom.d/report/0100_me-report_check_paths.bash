#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

TARGET="base"
TARGET_DIR="me/report"
CHECK_DIRS="config public public/css public/img view"

cd $TARGET_DIR || exit 1

all=0
fail=0
for dir in $CHECK_DIRS; do
    (( all++ ))
    if [[ ! -d "$dir" ]]; then
        printf "Missing '$dir' dir.\n"
        (( fail++ ))
    fi
done

doLog $fail "$TARGET_DIR $TARGET: check dirs ("$(( all-fail ))"/$all)"
