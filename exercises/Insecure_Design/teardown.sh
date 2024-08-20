#!/bin/bash

# Navigate to the exercise directory
cd /home/ubuntu/HackBerryBox/exercises/Insecure_Design

# Stop and remove the Docker containers
docker-compose down

echo "Insecure Design exercise teardown complete."
