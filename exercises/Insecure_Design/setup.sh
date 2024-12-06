#!/bin/bash

# Navigate to the exercise directory
cd /home/ubuntu/HackBerryBox/exercises/Insecure_Design

# Pull the latest Docker images
docker-compose pull

# Build and start the Docker containers
docker-compose up --build -d

# Wait for the application to initialize
echo "Waiting for the application to initialize..."
sleep 10

echo "Insecure Design exercise setup complete. Access it at http://localhost:8089"
