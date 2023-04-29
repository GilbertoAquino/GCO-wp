pipeline {
    agent any
    stages {
        stage('run sh') {
            steps {
                echo "Test how to run a sh file"
                echo "hello world"
                echo "good bye"
            }
        }
        stage('run sh 2') {
            steps {
                echo "Test how to run a sh file"
                echo "hello world"
                script{
                    sh '''#!/bin/bash
                            ls
                         '''
                    sh 'chmod +x ./upload.sh'
                    sh """
                        USER="jenkins-nhs@gcorneayoftalmologia.mx"
                        PASSWORD="H*pmt{jz~(2D"
                        HOST="www.gcorneayoftalmologia.mx"
                        ftp -inv $HOST <<- _EOF_
                        user $USER $PASSWORD
                        ls
                        cd www.gcorneayoftalmologia.mx
                        ls
                        bye
                        _EOF_
                    """
                }
            }
        }
    }
}
