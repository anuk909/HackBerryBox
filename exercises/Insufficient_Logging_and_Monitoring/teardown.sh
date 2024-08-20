#!/bin/bash

# Navigate to the exercise directory
cd /home/ubuntu/HackBerryBox/exercises/Insufficient_Logging_and_Monitoring

# Stop and remove the Docker containers
docker-compose down

echo "Insufficient Logging and Monitoring exercise teardown complete."
