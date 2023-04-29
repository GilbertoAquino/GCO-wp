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
                    USER="jenkins-nhs@gcorneayoftalmologia.mx"
                    PASSWORD="H*pmt{jz~(2D"
                    HOST="www.gcorneayoftalmologia.mx"
                    sh '''#!/bin/bash
                            ls
                         '''
                    sh 'chmod +x ./upload.sh'
                    sh './upload.sh'
                }
            }
        }
    }
}
