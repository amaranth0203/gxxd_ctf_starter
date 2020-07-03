#!/bin/bash

echo "<!-- 这次 flag 还是不在这里 -->" >> /var/www/html/index.php
echo "const fyi = \"$FLAG\";" >> /var/www/html/fyi.js

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
