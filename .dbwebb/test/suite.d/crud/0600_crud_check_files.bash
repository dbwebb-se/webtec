#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

TARGET="crud"
TARGET_DIR="me/report"
CHECK_FILES="
db/user.sqlite
"

cd $TARGET_DIR || exit 1

all=0
fail=0
for file in $CHECK_FILES; do
    (( all++ ))
    if [[ ! -f "$file" ]]; then
        printf "Missing file '$file'.\n"
        (( fail++ ))
    fi
done

doLog $fail "$TARGET_DIR $TARGET: check files ("$(( all-fail ))"/$all)"
