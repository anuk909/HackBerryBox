# Broken Access Control - Solution

## Overview
This exercise demonstrates a common broken access control vulnerability. The goal is to exploit the vulnerability to gain unauthorized access to a restricted area.

## Steps to Exploit
1. Access the web application and attempt to navigate to the restricted area.
2. Observe that access is denied due to insufficient permissions.
3. Use a tool like Burp Suite to intercept the request and modify the session token or user role.
4. Resend the modified request to gain access to the restricted area.

## Explanation
The application fails to properly enforce access controls, allowing attackers to manipulate session tokens or user roles to gain unauthorized access.

## Mitigation
To fix this vulnerability, implement proper access control checks on the server-side and ensure that session tokens and user roles are securely managed.
