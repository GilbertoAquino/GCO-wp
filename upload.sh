USER="jenkins-nhs@gcorneayoftalmologia.mx"
PASSWORD="H*pmt{jz~(2D"
HOST="www.gcorneayoftalmologia.mx"
ftp ftp -inv $HOST <<EOF
user $USER $PASSWORD
ls
bye
EOF