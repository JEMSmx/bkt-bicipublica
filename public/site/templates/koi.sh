#!/bin/bash
set -e
cd "$(dirname "$0")"
PWD=$(echo `pwd`)

environment="development"
force_update=false

while getopts ":pfc" opt; do
  case $opt in
    p) environment="production" ;;
    f) force_update=true ;;
    c) cleanup=true ;;
  esac
done

if [[ "$cleanup" == true ]]; then
  rm -rfv static/455375-*
  exit
fi

if [[ "$environment" == "production" ]]; then
  STATIC_PATH="static/455375-$(date +%s)"
  [ -d static/455375-* ] && mv -v static/455375-* $STATIC_PATH
else
  STATIC_PATH="static/455375-147357"
  [ -d static/455375-* ] && [ ! -d static/455375-147357 ] && mv -v static/455375-* $STATIC_PATH
fi

if [[ "$force_update" == true ]]; then
  find $PWD -type f -name '*.php' | xargs sed -i~ "s|static/455375-[[:digit:]]*|$STATIC_PATH|g"
  find $PWD -type f -name '*.php~' -exec rm {} \;
  echo ${STATIC_PATH#*/} > static/.current-version
fi

mkdir -pv $STATIC_PATH/{images,scripts,styles}

rsync --archive --delete --force assets/images $STATIC_PATH/
uglifyjs assets/scripts/*.js --lint --output $STATIC_PATH/scripts/main.min.js
sass --update assets/styles:$STATIC_PATH/styles --style=compressed --sourcemap=none --no-cache
