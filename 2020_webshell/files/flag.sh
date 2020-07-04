#!/bin/bash

# echo "<?php \$flag=\"$FLAG\";?>" >> /var/www/html/config.php
# echo "<!-- 这次 flag 不在这里了 -->" >> /var/www/html/index.php

echo "\"$FLAG\"" >> /tmp/flag.txt
chown -R www-data:www-data /tmp/flag.txt

# echo "    echo \"$FLAG\";" >> /var/www/html/backend.php
# echo "  } else {" >> /var/www/html/backend.php
# echo "    echo \"不对..继续努力吧! (ง •̀_•́)ง\";" >> /var/www/html/backend.php
# echo "  }" >> /var/www/html/backend.php
# echo "} else {" >> /var/www/html/backend.php
# echo "  echo \"不对,不能为空,继续努力吧! (ง •̀_•́)ง\";" >> /var/www/html/backend.php
# echo "}" >> /var/www/html/backend.php
# echo "?>" >> /var/www/html/backend.php


export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
