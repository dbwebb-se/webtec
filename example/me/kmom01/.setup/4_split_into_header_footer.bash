DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 4\n";

cp "$DIR/public/about3.php" public/about.php
cp "$DIR/public/me3.php" public/me.php
cp "$DIR/view/header3.php" view/header.php
cp "$DIR/view/footer3.php" view/footer.php
cp "$DIR/config/config3.php" config/config.php
