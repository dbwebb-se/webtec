DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 10\n";

cp "$DIR/view/header2.php" view/header.php
cp "$DIR/view/navbar1.php" view/navbar.php

cp "$DIR/public/css/style1.css" public/css/style.css
cp "$DIR/public/css/navbar_active.css" public/css
