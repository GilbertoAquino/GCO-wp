USER="jenkins-nhs@gcorneayoftalmologia.mx"
PASSWORD="H*pmt{jz~(2D"
HOST="www.gcorneayoftalmologia.mx"
ftp -n -v ${HOST} <<EOT
ascii
user ${USER} ${PASSWORD}
lls
ls
cd www.gcorneayoftalmologia.mx
ls
bye
EOT