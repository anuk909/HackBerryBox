#!/bin/bash

# Navigate to the exercise directory
cd "$(dirname "$0")"

# Build and start the Docker containers
docker-compose up --build -d

echo "SQL Injection exercise setup complete. Access the application at http://localhost:8080"
