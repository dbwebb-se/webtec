DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 2\n";

cp "$DIR/public/css/init.css" public/css
cp "$DIR/public/css/style1.css" public/css/style.css
