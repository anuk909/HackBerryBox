#!/bin/bash

# Navigate to the exercise directory
cd "$(dirname "$0")"

# Stop and remove the Docker containers
docker-compose down

echo "SQL Injection exercise teardown complete."
