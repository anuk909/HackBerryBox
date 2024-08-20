#!/bin/bash

# Navigate to the exercise directory
cd "$(dirname "$0")"

# Build and start the Docker containers
docker-compose up --build -d

echo "XSS exercise setup complete. Access the application at http://localhost:8081"
