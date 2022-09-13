#!/usr/bin/env bash
#
# Script run BEFORE kmom specific scripts.
# Put tests here that applies to all kmoms.
#
# Available (and usable) data:
#   $COURSE
#   $KMOM
#   $ACRONYM
#   $REDOVISA_HTTP_PREFIX
#   $REDOVISA_HTTP_POSTFIX
#   $LOG_DOCKER
#   eval "$BROWSER" "$url" &
#   openUrl "$url"
#   openSpecificUrl "$DIR" "me/redovisa" "build/coverage/index.html"
#
#printf ">>> -------------- Pre (all kmoms) ----------------------\n"

echo $DIR

# Open log
echo "[$ACRONYM/$COURSE/$KMOM]" > "$LOG_DOCKER"

# Do different things depending on kmom
#localRepoUrl="http://127.0.0.1:18080/gui-repo"

studentServerUrl="$REDOVISA_HTTP_PREFIX/~$ACRONYM/dbwebb-kurser/$COURSE/me"
w3cValidatorUnicorn="https://validator.w3.org/unicorn/check?ucn_task=conformance\&ucn_uri"

case $KMOM in
    kmom01)
    ;;
    kmom02)
    ;;
    kmom03)
        openUrl "$studentServerUrl/report/public/friday.php"
        openUrl "$studentServerUrl/report/public/friday.php?date=2022-08-26"
        openUrl "$studentServerUrl/report/public/month.php"
    ;;
    kmom04)
    ;;
    kmom05)
        #openUrl "$studentServerUrl/sqlite"
        #openUrl "$studentServerUrl/pdoweb/public"
    ;;
    kmom06)
        #openUrl "$studentServerUrl/sqlite"
        #openUrl "$studentServerUrl/pdoweb/public"
    ;;
    kmom10)
        #openUrl "$studentServerUrl/proj/public"
        #openUrl "$w3cValidatorUnicorn=$studentServerUrl/proj/public"
    ;;
esac

openUrl "$w3cValidatorUnicorn=$studentServerUrl/report/public/me.php"
openUrl "$studentServerUrl/report/public/me.php"
openUrl "$studentServerUrl/report/public/report.php#$KMOM"

# # Rsync the target dir/repo to a temp space
# install -d gui-repo/
# rm -rf gui-repo/{*,.??*}
# rsync -a --delete $REPO/ gui-repo/
