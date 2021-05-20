#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

cd $TARGET_DIR || exit 1

target="test"
make $target >& /dev/null

doLog $? "make test"
