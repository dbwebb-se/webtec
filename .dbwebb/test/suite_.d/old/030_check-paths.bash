#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

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

if ! [[ -d htdocs || -d public || -d web ]]; then
    printf "Missing the public web dir (htdocs, public or web).\n"
    (( fail++ ))
fi

doLog $fail "check dirs ("$(( all-fail ))"/$all)"
