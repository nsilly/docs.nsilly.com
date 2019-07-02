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
                sh 'rm -rf node_modules'
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
        stage('Checkout documentation file') {
            agent any
            steps {
                dir('resources/docs/1.0') {
                    git branch: 'master', url: 'https://github.com/nsilly/docs.git'
                    
                }
            }
            post {
                success {
                    sh 'yes | cp -R . /home/projects/nsilly.com'
                    sh 'mkdir -p /home/projects/nsilly.com/public/page-cache'
                    sh 'chmod -R 777 /home/projects/nsilly.com/public/page-cache'
                    sh 'chmod -R 777 /home/projects/nsilly.com/storage/*'
                }
            }
        }
    }
}