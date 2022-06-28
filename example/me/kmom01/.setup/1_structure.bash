printf "# Step 1\n";

# Remove files before setup
rm -rf public config view

# Skapa kataloger för den publika delen
mkdir public
mkdir public/img
mkdir public/css

# Skapa övriga kataloger
mkdir config
mkdir view

# Skapa tomma filer som är blivande webbsidor, sidkontroller
touch public/me.php
touch public/about.php
touch public/report.php

# Skapa en tom stylesheet
touch public/css/style.css

# Skapa en tm konfigurationsfil som sidkontrollers kan inkludera
touch config/config.php

# Skapa tomma vyer (byggstenar till webbsidan)
touch view/header.php
touch view/byline.php
touch view/footer.php

# Hämta hem bilder från nätet via en webblänk och spara lokalt
wget -O public/img/favicon.png https://dbwebb.se/img/bth-leaf.png
wget -O public/img/me.png https://dbwebb.se/img/prata-med-ankan.png
wget -O public/img/me_small.jpg https://dbwebb.se/img/mikael-roos/mos-tjaro-square.jpg
wget -O public/img/background.jpg https://dbwebb.se/img/mos-desktop-kaprifolen.jpg

# Show structure
tree
