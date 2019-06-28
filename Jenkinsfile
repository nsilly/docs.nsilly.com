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
                docker { image 'nightfuryest/php-composer' }
            }
            steps {
                sh 'composer install'
            }
        }
    }
}