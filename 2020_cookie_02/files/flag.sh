#!/bin/bash

echo "" >> /var/www/html/index.php
echo "setcookie(\"see_this\", \"f1ag.php\");" >> /var/www/html/index.php
echo "ob_end_flush();" >> /var/www/html/index.php
echo "?>" >> /var/www/html/index.php
echo "" >> /var/www/html/index.php
echo "<!-- flag 还是不在这里 -->" >>/var/www/html/index.php

echo "$FLAG" >> /var/www/html/f1ag.php

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
