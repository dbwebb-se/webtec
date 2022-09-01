#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

cd $TARGET_DIR || exit 1

target="coverage"
#make $target >& /dev/null

file="build/$target.clover"

if [[ -f $file ]]; then
    res=$( grep '    <metrics files=' $file )
    echo $res
    [[ -f $file ]]
    doLog $? "$target:"
else
    printf "Missing log file: '$file'\nWas the build successfully done and generated a logfile?\n"
    doLog 1 "$target: no log file detected"
fi
