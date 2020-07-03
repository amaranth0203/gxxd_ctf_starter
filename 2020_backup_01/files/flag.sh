#!/bin/bash

echo "<!-- flag 还是不在这里 -->" >> /var/www/html/index.php
echo "  <?php" >> /var/www/html/index.php.bak
echo "  \$flag = \"$FLAG\"" >> /var/www/html/index.php.bak
echo "  ?>" >> /var/www/html/index.php.bak
echo "</body>" >> /var/www/html/index.php.bak
echo "</html>" >> /var/www/html/index.php.bak

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
