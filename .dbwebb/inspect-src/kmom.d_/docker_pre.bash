#!/usr/bin/env bash
case $KMOM in
    kmom01)
        export TARGET_DIR="me"
    ;;
    kmom03)
        export TARGET_DIR="me"
    ;;
    kmom05)
        export SOURCE_DIR="me"
    ;;
    kmom10)
        export SOURCE_DIR="me/proj"
    ;;
esac
