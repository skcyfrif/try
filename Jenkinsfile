pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                // Clone the repository from GitHub (with explicit branch and credentials handling)
                git branch: 'main', url: 'https://github.com/skcyfrif/try.git', credentialsId: 'your-credentials-id'
            }
        }
        
        stage('Build Docker Images') {
            steps {
                script {
                    // Check if ./app directory exists in the workspace
                    def status = sh(script: 'ls -alh .', returnStatus: true)
                    if (status != 0) {
                        error "Directory . does not exist or is not found"
                    }

                    // Build Docker images using docker-compose with verbose output for debugging
                    def buildStatus = sh(script: 'docker-compose build --no-cache', returnStatus: true)
                    if (buildStatus != 0) {
                        error "Docker image build failed"
                    }
                }
            }
        }
        
        stage('Run Containers') {
            steps {
                script {
                    // Run containers using docker-compose with verbose output for debugging
                    def runStatus = sh(script: 'docker-compose up -d --build', returnStatus: true)
                    if (runStatus != 0) {
                        error "Docker containers failed to start"
                    }
                }
            }
        }
    }
    post {
        always {
            // Always clean up or take action after the pipeline completes
            echo 'Cleaning up resources'
            sh 'docker-compose down'  // Stop and remove containers, networks, etc.
        }
        success {
            echo 'Pipeline succeeded!'
        }
        failure {
            echo 'Pipeline failed!'
        }
    }
}
