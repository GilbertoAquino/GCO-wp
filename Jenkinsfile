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
                    sh "./upload.sh"
                }
            }
        }
    }
}
