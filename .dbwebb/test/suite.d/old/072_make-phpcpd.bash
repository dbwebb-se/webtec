#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

cd $TARGET_DIR || exit 1

target="phpcpd"
#make $target >& /dev/null

file="build/$target"

if [[ -f $file ]]; then
    lines=$( wc -l $file )
    [[ $( grep "No clones found." $file ) ]]
    status=$?
    message="$target: clones ($lines)"
    (( $status )) && printf "%s\n" "$message"
    doLog $status "$message"
else
    printf "Missing log file: '$file'\nWas the build successfully done and generated a logfile?\n"
    doLog 1 "$target: no log file detected"
fi
