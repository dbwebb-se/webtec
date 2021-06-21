#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

req="$NUM_TAGS"

cd $TARGET_DIR || exit 1
[[ ! -d .git ]] && echo "Missing .git directory." && exit 1

num=$( git tag | wc -l )
echo "[$ACRONYM] tags=$num"
git tag

(( $num >= $req ))
doLog $? "Number of tags = $num (>=$req)"
