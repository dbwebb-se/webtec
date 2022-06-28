#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

cd $TARGET_DIR || exit 1
[[ ! -d .git ]] && echo "Missing .git directory." && exit 1

gitUrl=$( git config --get remote.origin.url )
[[ $gitUrl ]]
doLog $? "remote = '$gitUrl'" 1
