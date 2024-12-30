pipeline {
    agent any

    environment {
        // Define environment variables for convenience (e.g., for Docker Compose, git, etc.)
        DOCKER_COMPOSE_PATH = './docker-compose.yml'
    }

    stages {
        // Stage 1: Clone the repository from GitHub
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/skcyfrif/try.git', credentialsId: 'gitpat'
            }
        }

        // Stage 2: Build Docker images using Docker Compose
        stage('Build Docker Images') {
            steps {
                script {
                    // Ensure Docker Compose is available
                    sh 'docker-compose -v'
                    
                    // Run the build command to create the images
                    sh 'docker-compose -f ${DOCKER_COMPOSE_PATH} build'
                }
            }
        }

        // Stage 3: Run Docker containers in detached mode
        stage('Run Docker Containers') {
            steps {
                script {
                    // Start the containers in detached mode
                    sh 'docker-compose -f ${DOCKER_COMPOSE_PATH} up -d'
                }
            }
        }

        // Stage 4: Run tests (optional)
        stage('Run Tests') {
            steps {
                // Add commands to run tests here if needed, e.g., PHPUnit, Selenium, etc.
                echo 'Running tests...'
                // For example: sh 'docker-compose exec app vendor/bin/phpunit'
            }
        }
    }

    post {
        always {
            echo 'Cleaning up resources...'
            // Tear down the containers regardless of success or failure
            sh 'docker-compose -f ${DOCKER_COMPOSE_PATH} down'
        }
        success {
            echo 'Pipeline completed successfully!'
        }
        failure {
            echo 'Pipeline failed!'
        }
    }
}
