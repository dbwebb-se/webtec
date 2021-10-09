
#!/usr/bin/env bash
. ".dbwebb/inspect-src/kmom.d/functions.bash"

TARGET_DIR="me/php"
EXECUTE="php main.php"

cd $TARGET_DIR || exit 1

$EXECUTE
success=$?

echo "$res" | sed '$d'

doLog $success "$TARGET_DIR: executed script"
