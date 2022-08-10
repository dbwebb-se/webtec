DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 2\n";

cp "$DIR/public/play1.php" public/play.php
cp "$DIR/public/play_1.php" public/play1.php
cp "$DIR/public/play_1_error.php" public/play1_error.php
cp "$DIR/view/header1.php" view/header.php
install -d view/php 
cp "$DIR/view/php/hello.php" view/php
