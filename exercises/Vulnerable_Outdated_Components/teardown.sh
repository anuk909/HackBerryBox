#!/bin/bash

# Navigate to the exercise directory
cd /home/ubuntu/HackBerryBox/exercises/Vulnerable_Outdated_Components

# Stop and remove the Docker containers
docker-compose down

# Remove any created volumes
docker volume prune -f

# Remove any dangling images
docker image prune -f

echo "Vulnerable Outdated Components exercise teardown complete."
