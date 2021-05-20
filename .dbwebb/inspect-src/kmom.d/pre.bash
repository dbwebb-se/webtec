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
localRepoUrl="http://127.0.0.1:18080/gui-repo"

case $KMOM in
    kmom01)
        REPO="me/game"
        studentServerUrl="$REDOVISA_HTTP_PREFIX/~$ACRONYM/dbwebb-kurser/$COURSE/$REPO/htdocs"
        openUrl "$localRepoUrl/htdocs"
    ;;
    kmom02)
        REPO="me/game"
        studentServerUrl="$REDOVISA_HTTP_PREFIX/~$ACRONYM/dbwebb-kurser/$COURSE/$REPO/htdocs"
        openUrl "$localRepoUrl/htdocs"
        openUrl "$localRepoUrl/doc/yatzy" # Pseudocode & flowchart
    ;;
    kmom03)
        REPO="me/game"
        studentServerUrl="$REDOVISA_HTTP_PREFIX/~$ACRONYM/dbwebb-kurser/$COURSE/$REPO/htdocs"
        openUrl "$localRepoUrl/htdocs"
        openUrl "$localRepoUrl/build/coverage/index.html" # Code coverage
    ;;
    kmom04)
        REPO="me/framework"
        studentServerUrl="$REDOVISA_HTTP_PREFIX/~$ACRONYM/dbwebb-kurser/$COURSE/$REPO"
        openUrl "$localRepoUrl/build/coverage/index.html" # Code coverage
    ;;
    kmom05)
        REPO="me/orm"
        studentServerUrl="$REDOVISA_HTTP_PREFIX/~$ACRONYM/dbwebb-kurser/$COURSE/$REPO"
        openUrl "$localRepoUrl/build/coverage/index.html" # Code coverage
    ;;
    kmom06)
        REPO="me/ci"
        studentServerUrl="$REDOVISA_HTTP_PREFIX/~$ACRONYM/dbwebb-kurser/$COURSE/$REPO"
        openUrl "$localRepoUrl/build/coverage/index.html" # Code coverage
    ;;
    kmom10)
        REPO="me/proj"
        studentServerUrl="$REDOVISA_HTTP_PREFIX/~$ACRONYM/dbwebb-kurser/$COURSE/$REPO"
        openUrl "$localRepoUrl/doc/design" # Pseudocode & flowchart
        openUrl "$localRepoUrl/build/coverage/index.html" # Code coverage
    ;;
esac

[[ -d "$DIR/$REPO" ]] || echo "MISSING TARGET DIR '$REPO'. Epic fail."
[[ -d "$DIR/$REPO/.git" ]] || echo "MISSING TARGET GIT DIR '$REPO/.git'. Epic fail."

openUrl "$studentServerUrl"

gitUrl=$( cd "$DIR/$REPO" && [[ -d .git ]] && git config --get remote.origin.url )
openGitUrl "$gitUrl"
[[ $gitUrl ]] || echo "MISSING GIT REMOTE. Epic fail."

# # Rsync the target dir/repo to a temp space
# install -d gui-repo/
# rm -rf gui-repo/{*,.??*}
# rsync -a --delete $REPO/ gui-repo/
