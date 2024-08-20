#!/bin/bash

# Navigate to the exercise directory
cd /home/ubuntu/HackBerryBox/exercises/Insufficient_Logging_and_Monitoring

# Pull the latest Docker images
docker-compose pull

# Build and start the Docker containers
docker-compose up --build -d

# Wait for the application to initialize
echo "Waiting for the application to initialize..."
sleep 10

echo "Insufficient Logging and Monitoring exercise setup complete. Access it at http://localhost:8090"
