#!/bin/bash

echo "" >> /var/www/html/index.php
echo "setcookie(\"f1ag\", \"$FLAG\");" >> /var/www/html/index.php
echo "ob_end_flush();" >> /var/www/html/index.php
echo "?>" >> /var/www/html/index.php
echo "" >> /var/www/html/index.php
echo "<!-- flag 还是不在这里 -->" >>/var/www/html/index.php

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
