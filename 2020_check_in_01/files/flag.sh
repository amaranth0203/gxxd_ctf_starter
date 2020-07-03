#!/bin/bash

echo "<!--$FLAG-->" >> /var/www/html/index.php

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
