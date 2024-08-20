#!/bin/bash

# Navigate to the exercise directory
cd /home/ubuntu/HackBerryBox/exercises/Vulnerable_Outdated_Components

# Check if Docker is installed
if ! command -v docker &> /dev/null
then
    echo "Docker is not installed. Please install Docker and try again."
    exit 1
fi

# Check if Docker Compose is installed
if ! command -v docker-compose &> /dev/null
then
    echo "Docker Compose is not installed. Please install Docker Compose and try again."
    exit 1
fi

# Build and start the Docker containers
docker-compose up --build -d

# Wait for the containers to be ready
echo "Waiting for containers to be ready..."
sleep 10

echo "Vulnerable Outdated Components exercise setup complete."
echo "You can access the exercise at http://localhost:8095"
