DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 3\n";

cp "$DIR/public/css/navbar.css" public/css
cp "$DIR/public/css/style2.css" public/css/style.css
cp "$DIR/view/header1.php" view/header.php
