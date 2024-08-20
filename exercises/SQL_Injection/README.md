# SQL Injection Exercise

## Objective
This exercise demonstrates how to exploit and prevent SQL Injection vulnerabilities.

## Setup
1. Navigate to the `SQL_Injection` directory.
2. Run `./setup.sh` to build and start the Docker containers.
3. Access the application at [http://localhost:8080](http://localhost:8080).

## Exercise
1. Explore the login form and try to bypass authentication using SQL Injection techniques.
2. Attempt to retrieve sensitive data from the database.
3. Identify the vulnerable parts of the application code.

## Solution
Refer to the `solution.md` file for a detailed walkthrough of the SQL Injection vulnerability and how to exploit it.

## Prevention
Learn about best practices to prevent SQL Injection:
- Use prepared statements with parameterized queries
- Implement input validation and sanitization
- Apply the principle of least privilege for database accounts

## Teardown
Run `./teardown.sh` to stop and remove the Docker containers.

## Compatibility
This exercise is designed to be deployable on a Raspberry Pi.
