#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

if [[ -z $SOURCE_DIR ]]; then
    printf "The SOURCE_DIR is empty.\n"
    exit 1
elif [[ ! -d $SOURCE_DIR ]]; then
    printf "The SOURCE_DIR '' is not a directory.\n"
    exit 1
fi

# Rsync the target dir/repo to a temp space
install -d gui-repo/ || exit 1
rm -rf gui-repo/{*,.??*} || exit 1
rsync -a --delete "./$SOURCE_DIR/" "./$TARGET_DIR/" || exit 1
