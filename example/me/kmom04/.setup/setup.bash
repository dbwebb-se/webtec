#!/usr/bin/env bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Kmom04 start\n";

# Create the structure
. "$DIR/1_setup_kmom03.bash"

# The first code
. "$DIR/2_start.bash"

# # Variables
# . "$DIR/3_variable.bash"
# . "$DIR/3_variable1.bash"

# # If statements
# . "$DIR/4_if.bash"

# # Loop constructs
# . "$DIR/5_loop.bash"

# # Query string
# . "$DIR/6_querystring.bash"

# # HTML form GET
# . "$DIR/7_form.bash"

# # $_SERVER
# . "$DIR/8_server.bash"

# # Statistics
# . "$DIR/9_stats.bash"

# # navbar current
# . "$DIR/10_navbar.bash"

printf "# Kmom04 done\n";
