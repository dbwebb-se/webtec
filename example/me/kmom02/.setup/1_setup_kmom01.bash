# Run setup from kmom01
. "$DIR/../../kmom01/.setup/setup.bash"

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Step 1\n";

rm "public/css/style.css"
touch "public/css/style.css"
