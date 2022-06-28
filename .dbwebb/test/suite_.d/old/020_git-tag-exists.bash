#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

lowtag="$LOW_TAG"
hightag="$HIGH_TAG"

cd $TARGET_DIR || exit 1
[[ ! -d .git ]] && echo "Missing .git directory." && exit 1

tag=$( hasGitTagBetween . $lowtag $hightag )
echo "[$ACRONYM] tag >= $lowtag and < $hightag ($tag)"

[[ ! -z $tag ]]
doLog $? "Has tag between $lowtag and $hightag ($tag)"
