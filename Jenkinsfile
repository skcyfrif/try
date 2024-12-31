pipeline {
    agent any

    environment {
        DOCKER_IMAGE = "cyfdoc/shiv"  // Docker Hub username/repository
        TAG = "latest1"
        IMAGE_NAME = "${DOCKER_IMAGE}:${TAG}"
    }

    stages {
        stage('Clone Repository') {
            steps {
                // Checkout source code
                checkout scm
            }
        }

        stage('Docker Login') {
            steps {
                echo 'Logging into Docker Hub...'
                withCredentials([usernamePassword(credentialsId: 'cyfdoc', usernameVariable: 'DOCKER_USERNAME', passwordVariable: 'DOCKER_PASSWORD')]) {
                    sh '''
                        echo $DOCKER_PASSWORD | docker login -u $DOCKER_USERNAME --password-stdin
                    '''
                }
            }
        }

        stage('Build or Pull Docker Image') {
            steps {
                script {
                    // Check if the Docker image already exists
                    def imageExists = sh(script: "docker images -q ${IMAGE_NAME}", returnStdout: true).trim()

                    if (imageExists) {
                        echo "Image ${IMAGE_NAME} exists. Pulling latest image."
                        sh "docker pull ${IMAGE_NAME}"
                    } else {
                        echo "Image ${IMAGE_NAME} not found. Building image."
                        sh "docker build -t ${IMAGE_NAME} ."
                    }
                }
            }
        }

        stage('Push to Docker Hub') {
            steps {
                echo 'Pushing Docker Image to Docker Hub...'
                withCredentials([usernamePassword(credentialsId: 'cyfdoc', usernameVariable: 'DOCKER_USERNAME', passwordVariable: 'DOCKER_PASSWORD')]) {
                    sh '''
                        echo $DOCKER_PASSWORD | docker login -u $DOCKER_USERNAME --password-stdin
                        docker push ${IMAGE_NAME}
                    '''
                }
            }
        }

        stage('Deploy with Docker Compose') {
            steps {
                echo 'Deploying using Docker Compose...'
                sh '''
                    docker-compose down || echo "No containers to stop."
                    docker-compose up -d
                '''
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
