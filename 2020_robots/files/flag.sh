#!/bin/bash

echo "<!-- flag 还是在这 -->" >> /var/www/html/index.php
echo "$FLAG" >> /var/www/html/f1ag.php

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
