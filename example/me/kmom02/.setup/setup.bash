#!/usr/bin/env bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

# Create the structure
. "$DIR/1_setup_kmom01.bash"

# Init the style
. "$DIR/2_init_css.bash"

# Navbar
. "$DIR/3_navbar.bash"

# Header
. "$DIR/4_header.bash"

# Footer
. "$DIR/5_footer.bash"

# Me
. "$DIR/6_me.bash"

# Fix about
. "$DIR/7_about.bash"

# Two columns
. "$DIR/8_two_cols.bash"

# Responsive
. "$DIR/9_responsive.bash"
