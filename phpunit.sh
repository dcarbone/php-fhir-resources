#!/usr/bin/env sh
BIN_TARGET="`pwd`/vendor/phpunit/phpunit/phpunit"
"$BIN_TARGET" --configuration phpunit.xml
