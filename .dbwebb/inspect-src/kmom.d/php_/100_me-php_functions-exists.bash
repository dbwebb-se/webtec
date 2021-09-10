#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

TARGET_DIR="me/php"
EXECUTE_PHP="../../.dbwebb/test/suite.d/php_/.php/check_functions_exists.php"

cd $TARGET_DIR || exit 1

res=$( php $EXECUTE_PHP )
success=$?

echo "$res" | sed '$d'

doLog $success "$TARGET_DIR: functions exists $( echo "$res" | tail -n1 )"
