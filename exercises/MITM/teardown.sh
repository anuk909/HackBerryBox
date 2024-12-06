#!/bin/bash

# Navigate to the exercise directory
cd "$(dirname "$0")"

# Stop and remove the Docker containers
docker-compose down

echo "MITM exercise teardown complete."
