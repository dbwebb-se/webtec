<pre><?php

function printDate()
{
    $datetime = date('Y-m-d l', time());
    $datetime2 = strftime('%A %d %B', strtotime($datetime));
    return " $datetime\n $datetime2\n";
}

// Get incoming
$newLocale = $_GET["locale"] ?? 0;

// Get and use current locale
$locale = setlocale(LC_ALL, 0);
echo "\nCurrent (default) locale is:\n $locale";
echo "\nDate is:\n" . printDate();

// Set and use new locale
echo "\nSetting new locale as:\n " . htmlentities($newLocale);
$locale = setlocale(LC_TIME, $newLocale);
echo "\nNew locale is:\n $locale";
echo "\nDate is:\n" . printDate();

// Show all locales on the system
echo "\nThese locales are available on this server:\n----------\n";
system("locale -a");
