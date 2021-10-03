#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

TARGET_DIR="me/pdoweb"
CHECK_DIRS="config db src public view vendor"

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

doLog $fail "$TARGET_DIR: check dirs ("$(( all-fail ))"/$all)"
