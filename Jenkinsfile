pipeline {
    agent none
    stages {
        stage('Buid assets') {
            agent {
                docker { image 'node:12-alpine' }
            }
            steps {
                sh 'npm install'
                sh 'npm run prod'
            }
        }
        stage('Install PHP package') {
            agent {
                docker { image 'nightfuryest/php-composer:7.2' }
            }
            steps {
                sh 'composer install'
            }
        }
        stage('Deliver') { 
            agent any
            steps {
                script {
                    fileOperations([
                        folderDeleteOperation(
                            './node_modules'
                        ),
                        folderCopyOperation(
                            destinationFolderPath: '/home/projects/nsilly.com',
                            sourceFolderPath: '.'
                        )
                    ])
                }
            }
        }
    }
}