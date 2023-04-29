#!/bin/bash
USER="jenkins-nhs@gcorneayoftalmologia.mx"
PASSWORD="H*pmt{jz~(2D"
HOST="www.gcorneayoftalmologia.mx"
ftp -n -v ${HOST} <<-_EOF_
user ${USER} ${PASSWORD}
ls
cd www.gcorneayoftalmologia.mx
ls
bye
_EOF_