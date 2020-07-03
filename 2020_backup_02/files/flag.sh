#!/bin/bash

echo "<!-- flag 还是不在这里 -->" >> /var/www/html/index.php
echo "  <?php" >> /var/www/html/index.php.old
echo "  \$flag = \"$FLAG\"" >> /var/www/html/index.php.old
echo "  ?>" >> /var/www/html/index.php.old
echo "</body>" >> /var/www/html/index.php.old
echo "</html>" >> /var/www/html/index.php.old

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
