#!/bin/bash

# Navigate to the exercise directory
cd /home/ubuntu/HackBerryBox/exercises/Broken_Authentication

# Stop and remove the Docker containers
docker-compose down

# Remove any created volumes
docker volume prune -f

# Remove any dangling images
docker image prune -f

echo "Broken Authentication exercise teardown complete."
