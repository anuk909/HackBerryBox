#!/bin/bash

# Navigate to the exercise directory
cd /home/ubuntu/HackBerryBox/exercises/Insecure_Deserialization

# Stop and remove the Docker containers
docker-compose down

echo "Insecure Deserialization exercise teardown complete."
