#!/bin/bash

echo "<!-- 这次 flag 不在这里了 -->" >> /var/www/html/index.php
echo "echo \"$FLAG\";" >> /var/www/html/backend.php
echo "  }" >> /var/www/html/backend.php
echo "}" >> /var/www/html/backend.php
echo "?>" >> /var/www/html/backend.php


export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
