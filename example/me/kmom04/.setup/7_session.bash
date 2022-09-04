DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 7\n";

cp "$DIR/config/config.php" config
cp "$DIR/public/session.php" public
cp "$DIR/public/session_destroy.php" public
cp "$DIR/public/session_write.php" public
cp "$DIR/view/php/session_display.php" view/php
cp "$DIR/view/navbar2.php" view/navbar.php
