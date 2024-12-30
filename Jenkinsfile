pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/skcyfrif/try.git', credentialsId: 'gitpat'
            }
        }
    }
    
}
pipeline {
    agent any
   
    }
    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/skcyfrif/try.git', credentialsId: 'gitpat'
            }
        }

        stage('Build Docker Images') {
            steps {
                sh '''
                docker-compose build
                '''
            }
        }

        stage('Run Docker Containers') {
            steps {
                sh '''
                docker-compose up -d
                '''
            }
        }
    }
    post {
        always {
            echo 'Cleaning up resources...'
            sh '''
            docker-compose down
            '''
        }
        success {
            echo 'Pipeline completed successfully!'
        }
        failure {
            echo 'Pipeline failed!'
        }
    }
}
