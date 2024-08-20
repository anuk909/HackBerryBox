#!/bin/bash

# Navigate to the exercise directory
cd "$(dirname "$0")"

# Build and start the Docker containers
docker-compose up --build -d

echo "MITM exercise setup complete. Access the victim application at http://localhost:5000 and the attacker application at http://localhost:5001"
