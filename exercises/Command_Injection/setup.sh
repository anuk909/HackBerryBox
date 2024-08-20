#!/bin/bash

# Navigate to the exercise directory
cd "$(dirname "$0")"

# Build and start the Docker containers
docker-compose up --build -d

echo "Command Injection exercise setup complete. Access the application at http://localhost:8082"
