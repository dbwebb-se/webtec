DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 6\n";

cp "$DIR/public/datastructure5.php" public/datastructure.php
cp "$DIR/public/form_process.php" public
cp "$DIR/view/php/form_post.php" view/php
cp "$DIR/public/css/style1.css" public/css/style.css
cp "$DIR/public/css/form.css" public/css

# Part 2 with updated processing page and with a result page
cp "$DIR/public/form_process1.php" public/form_process.php
cp "$DIR/public/form_result.php" public
