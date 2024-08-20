# Broken Access Control Exercise

## Overview
This exercise demonstrates a common broken access control vulnerability in a smart home management system called BerryHome. The goal is to exploit the vulnerability to gain unauthorized access to the admin control panel, which could potentially allow control over all smart homes in the neighborhood.

## Objective
- Understand and exploit broken access control vulnerabilities
- Learn how to properly implement access controls in web applications
- Practice identifying and exploiting vulnerabilities in Python/Flask applications

## Setup
1. Ensure you have Docker and Docker Compose installed on your Raspberry Pi
2. Run the `setup.sh` script to start the Docker containers
3. Access the web application at `http://localhost:8081`

## Exercise
1. Log in as a regular user with the credentials: username `homeowner`, password `smartliving`
2. Explore the user dashboard and try to access the admin panel
3. Analyze the application's access control mechanism
4. Exploit the broken access control to gain admin privileges

## Teardown
Run the `teardown.sh` script to stop and remove the Docker containers

## Solution
The solution to this exercise is documented in the `solution.md` file.

## Technologies Used
- Python 3.9
- Flask web framework
- HTML/CSS for frontend
- Docker for containerization

Remember: In a real-world scenario, always ensure you have proper authorization before testing or exploiting any system's security measures.
