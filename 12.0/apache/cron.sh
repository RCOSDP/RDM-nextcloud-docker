#!/bin/sh
set -eu

busybox crond -l 0 -L /dev/stdout

exec apache2-foreground
