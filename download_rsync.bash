rsync \
    -avz \
    --stats \
    --exclude 'uwsgi.log' \
    --exclude 'uwsgi.pid' \
    --exclude 'media/' \
    -e 'ssh -p82' \
    qiyunhu@wg.gxxd.net.cn:~/gxxd_ctf_starter/ \
    /Users/qiyunhu/Shadow/Develop/gxxd_ctf_starter/
    
