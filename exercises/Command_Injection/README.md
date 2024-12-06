# Command Injection Exercise

## Objective

This exercise demonstrates how to exploit and prevent Command Injection vulnerabilities.

## Setup

1. Navigate to the `Command_Injection` directory.
2. Run `./setup.sh` to build and start the Docker containers.
3. Access the application at [http://localhost:8082](http://localhost:8082).

## Exercise

1. Explore the "Network Diagnostics" tool in the application.
2. Attempt to inject system commands into the input field.
3. Try to access sensitive system information or execute unauthorized commands.
4. Identify the vulnerable parts of the application code.

## Solution

Refer to the `solution.md` file for a detailed walkthrough of the Command Injection vulnerability and how to exploit it.

## Prevention

Learn about best practices to prevent Command Injection attacks:
- Use parameterized APIs instead of direct command execution
- Implement strict input validation and sanitization
- Apply the principle of least privilege for system commands
- Use allowlists for permitted commands instead of blocklists

## Teardown

Run `./teardown.sh` to stop and remove the Docker containers.

## Compatibility

This exercise is designed to be deployable on a Raspberry Pi.
