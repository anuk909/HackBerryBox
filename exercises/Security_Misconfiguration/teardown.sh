#!/bin/bash

# Navigate to the exercise directory
cd /home/ubuntu/HackBerryBox/exercises/Security_Misconfiguration

# Stop and remove the Docker containers
docker-compose down

echo "Security Misconfiguration exercise teardown complete."
