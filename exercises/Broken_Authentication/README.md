# Broken Authentication Exercise

## Cover Story: The Forgotten Password Fiasco

Welcome to PiBank, the revolutionary digital banking platform for the modern age! As a new customer, you've just signed up for an account with PiBank, excited about the prospect of managing your finances with ease. However, you've heard rumors about some users experiencing issues with the password reset feature.

Your curiosity piqued, you decide to investigate the system's security. Your mission, should you choose to accept it, is to explore PiBank's password reset functionality and see if you can uncover any potential vulnerabilities. Remember, in the real world, always get proper authorization before testing any system's security!

## Exercise Objective
- Understand and exploit broken authentication vulnerabilities
- Learn how to properly implement secure authentication mechanisms
- Gain insights into secure password storage and reset procedures

## Setup Instructions
1. Run the `setup.sh` script to start the Docker containers
2. Access the web application at `http://localhost:8083`

## Exercise Steps
1. Log in as a regular user (credentials provided in the application)
2. Attempt to use the "Forgot Password" feature
3. Analyze the password reset mechanism for vulnerabilities
4. Try to exploit any weaknesses you find in the authentication system

## Teardown
Run the `teardown.sh` script to stop and remove the Docker containers

## Solution
The solution to this exercise is documented in the `solution.md` file. Only refer to it after attempting to solve the exercise on your own.

Remember: In a real-world scenario, always ensure you have proper authorization before testing or exploiting any system's security measures.
