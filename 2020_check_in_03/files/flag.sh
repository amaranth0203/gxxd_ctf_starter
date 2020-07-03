#!/bin/bash

echo "<!-- 这次 flag 不在这里了 -->" >> /var/www/html/index.php
echo "const fyi = \"$FLAG\";" >> /var/www/html/story.js
echo "tell_story(fyi);" >> /var/www/html/story.js

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
