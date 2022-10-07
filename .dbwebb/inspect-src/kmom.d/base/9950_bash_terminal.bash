#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

cd $TARGET_DIR || exit 1
e() { exit; }; export -f e

echo "[$ACRONYM] Do manual stuff (e/exit to exit)"
ls -F
bash
