#!/bin/bash

# Install Docker and Docker Compose if not already installed
if ! command -v docker &> /dev/null || ! command -v docker-compose &> /dev/null; then
    echo "Docker or Docker Compose not found. Installing..."
    curl -fsSL https://get.docker.com -o get-docker.sh
    sudo sh get-docker.sh
    sudo usermod -aG docker $USER
    sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
    sudo chmod +x /usr/local/bin/docker-compose
    echo "Docker and Docker Compose installed. Please log out and log back in to use Docker without sudo."
    exit
fi

# Navigate to the exercise directory
cd /home/ubuntu/HackBerryBox/exercises/Security_Misconfiguration

# Pull the latest Docker images
docker-compose pull

# Build and start the Docker containers
docker-compose up --build -d

# Wait for the application to initialize
echo "Waiting for the application to initialize..."
sleep 10

echo "Security Misconfiguration exercise setup complete. Access it at http://localhost:8092"
