#!/usr/bin/env bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

# Create the structure
. "$DIR/1_structure.bash"

# Create the first web page
. "$DIR/2_first_web_page.bash"

# With HTML validation
. "$DIR/3_validate_html.bash"

# Split header and footer
. "$DIR/4_split_into_header_footer.bash"

# Navbar
. "$DIR/6_add_navbar.bash"
. "$DIR/7_fix_me_with_include.bash"

# Manual links
. "$DIR/8_footer_with_manuals.bash"

# Title with variable
. "$DIR/9_add_title.bash"

# Favicon
. "$DIR/10_add_favicon.bash"

# Report
. "$DIR/11_report_internal_links.bash"

# PHP date of today
. "$DIR/5_php_date.bash"

# Style
. "$DIR/12_css.bash"

# Style as PHP
. "$DIR/13_css_php.bash"

# CSS validator
. "$DIR/14_css_validator.bash"

# Unicorn validator
. "$DIR/15_unicorn.bash"

# Linkchecker
. "$DIR/16_linkchecker.bash"

# Verktyg och tjänster
. "$DIR/17_tools.bash"
