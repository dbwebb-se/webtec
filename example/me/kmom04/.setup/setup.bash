#!/usr/bin/env bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

printf "# Kmom04 start\n";

# Create the structure
. "$DIR/1_setup_kmom03.bash"

# The first code
. "$DIR/2_start.bash"

# Array with date
. "$DIR/3_array_date.bash"

# Foreach
. "$DIR/5_foreach.bash"

# Array gallery
. "$DIR/4_array_gallery.bash"

# HTML form POST
. "$DIR/6_form_post.bash"

# Session
. "$DIR/7_session.bash"

# Flash
. "$DIR/8_flash.bash"

# Functions
. "$DIR/9_functions.bash"

printf "# Kmom04 done\n";
