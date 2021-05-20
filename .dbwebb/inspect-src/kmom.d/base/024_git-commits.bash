#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

req="$NUM_COMMITS"

cd $TARGET_DIR || exit 1
[[ ! -d .git ]] && echo "Missing .git directory." && exit 1

num=$( git rev-list --all --count )
echo "[$ACRONYM] commits=$num"

log=$( git log --pretty=format:"%h - %an, %ar : %s" | head -5 )
echo addNewLine "$log"

(( $num >= $req ))
doLog $? "Number of commits = $num (>=$req)"
