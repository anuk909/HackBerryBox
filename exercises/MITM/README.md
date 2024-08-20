# Man-in-the-Middle (MITM) Exercise

## Objective

This exercise demonstrates how to exploit and prevent Man-in-the-Middle (MITM) attacks.

## Setup

1. Navigate to the `MITM` directory.
2. Run `./setup.sh` to build and start the Docker containers.
3. Access the victim application at [http://localhost:5000](http://localhost:5000) and the attacker application at [http://localhost:5001](http://localhost:5001).

## Exercise

1. Use the victim application to send messages.
2. Develop a script in the attacker application to intercept and modify messages.
3. Use Wireshark to monitor network traffic and demonstrate how messages can be intercepted.
4. Secure the communication by enabling HTTPS or using SSH.

## Solution

Refer to the `solution.md` file for a detailed walkthrough of the MITM attack and how to exploit it.

## Prevention

Learn about best practices to prevent MITM attacks:
- Use HTTPS or SSH to encrypt communications
- Implement strong authentication mechanisms
- Regularly monitor network traffic for suspicious activity

## Teardown

Run `./teardown.sh` to stop and remove the Docker containers.

## Compatibility

This exercise is designed to be deployable on a Raspberry Pi.
