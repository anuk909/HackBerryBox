# Cross-Site Scripting (XSS) Exercise

## Objective

This exercise demonstrates how to exploit and prevent Cross-Site Scripting (XSS) vulnerabilities.

## Setup

1. Navigate to the `XSS` directory.
2. Run `./setup.sh` to build and start the Docker containers.
3. Access the application at [http://localhost:8081](http://localhost:8081).

## Exercise

1. Explore the comment submission form and try to inject malicious scripts.
2. Attempt to execute JavaScript in other users' browsers.
3. Identify the vulnerable parts of the application code.

## Solution

Refer to the `solution.md` file for a detailed walkthrough of the XSS vulnerability and how to exploit it.

## Prevention

Learn about best practices to prevent XSS attacks:
- Implement proper input validation and sanitization
- Use Content Security Policy (CSP) headers
- Apply the principle of least privilege for user-generated content

## Teardown

Run `./teardown.sh` to stop and remove the Docker containers.

## Compatibility

This exercise is designed to be deployable on a Raspberry Pi.
