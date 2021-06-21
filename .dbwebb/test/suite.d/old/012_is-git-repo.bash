#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

cd $TARGET_DIR || exit 1
[[ -d .git ]]
doLog $? "is Git repo" 1
