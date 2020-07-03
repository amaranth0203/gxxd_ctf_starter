rsync \
    -avz \
    --stats \
    --exclude 'uwsgi.log' \
    --exclude 'uwsgi.pid' \
    --exclude 'frontend/' \
    --exclude 'media/' \
    -e 'ssh -p82' \
    /Users/qiyunhu/Shadow/Develop/gxxd_ctf_starter/ \
    qiyunhu@wg.gxxd.net.cn:~/gxxd_ctf_starter/
