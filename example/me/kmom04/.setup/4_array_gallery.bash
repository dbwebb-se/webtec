DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 4\n";

cp "$DIR/public/datastructure3.php" public/datastructure.php
cp "$DIR/view/php/array_gallery.php" view/php
rsync -a "$DIR/public/img/" public/img/
cp "$DIR/public/css/style.css" public/css
cp "$DIR/public/css/gallery.css" public/css
