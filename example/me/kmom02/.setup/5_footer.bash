DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 5\n";

cp "$DIR/public/css/footer.css" public/css
cp "$DIR/public/css/style4.css" public/css/style.css
cp "$DIR/view/footer1.php" view/footer.php
