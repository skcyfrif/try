pipeline {
    agent any

    environment {
        DOCKER_IMAGE = "cyfdoc/shiv" // Use your Docker Hub username/repository
        TAG = "latest"
    }

    stages {
        stage('Clone Repository') {
            steps {
                // Checkout source code
                checkout scm
            }
        }
        
        stage('Build or Pull Docker Image') {
			steps {
				sh '''
                docker images -q ${DOCKER_IMAGE}:${TAG} && docker pull ${DOCKER_IMAGE}:${TAG} || docker build -t ${DOCKER_IMAGE}:${TAG} .
                '''
			}
		}

        stage('Push to Docker Hub') {
            steps {
                echo 'Pushing Docker Image to Docker Hub...'
                withCredentials([usernamePassword(credentialsId: 'cyfdoc', usernameVariable: 'DOCKER_USERNAME', passwordVariable: 'DOCKER_PASSWORD')]) {
                    sh '''
                        echo $DOCKER_PASSWORD | docker login -u $DOCKER_USERNAME --password-stdin
                        docker push ${DOCKER_IMAGE}
                    '''
                }
            }
        }

        stage('Deploy with Docker Compose') {
            steps {
                script {
                    echo 'Deploying using Docker Compose...'
                    sh '''
                    docker-compose down || echo "No containers to stop."
                    docker-compose up -d
                    '''
                }
            }
        }
    }

    post {
        always {
            echo 'Pipeline completed.'
        }
        success {
            echo 'Pipeline executed successfully!'
        }
        failure {
            echo 'Pipeline failed. Check the logs for details.'
        }
    }
}
