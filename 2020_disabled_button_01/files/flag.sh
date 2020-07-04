#!/bin/bash

echo "<!-- 这次 flag 不在这里了 -->" >> /var/www/html/index.php
echo "$FLAG" >> /var/www/html/I_guess_you_can_not_guess_my_file_name_flag.php



export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
