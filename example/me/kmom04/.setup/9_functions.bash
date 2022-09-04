DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 9\n";

install -d src
cp "$DIR/config/config1.php" config/config.php
cp "$DIR/src/functions.php" src
cp "$DIR/public/session_destroy1.php" public/session_destroy.php
cp "$DIR/public/form_result1.php" public/form_result.php
