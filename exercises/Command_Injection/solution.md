# Command Injection Exercise Solution

## Objective
The objective of this exercise is to demonstrate how Command Injection vulnerabilities can be exploited and how to prevent them.

## Exploitation
1. Access the Network Diagnostics Tool at `http://localhost:8082`.
2. In the input field for IP address or hostname, enter: `localhost; ls -la`
3. Click the "Ping" button.
4. Observe that not only does the ping command execute, but also the `ls -la` command, demonstrating the Command Injection vulnerability.

## Advanced Exploitation
Try these more advanced injections:
- `localhost && cat /etc/passwd` - View system's user information
- `localhost || echo "Injected command executed"` - Execute a command regardless of the ping result
- ``` `id` ``` - Execute the `id` command and return its output

## Explanation
The application uses string concatenation to build the system command, which makes it vulnerable to Command Injection. The injected commands are executed with the same privileges as the web application process.

## Prevention
To prevent Command Injection vulnerabilities, avoid using user input directly in system commands. Here's an example of how to fix the vulnerability in the `app.py` file:

```python
import subprocess
import shlex

@app.route('/', methods=['GET', 'POST'])
def execute_command():
    output = ""
    if request.method == 'POST':
        host = request.form.get('host')
        if host:
            # Secure command execution
            command = ["ping", "-c", "4", host]
            try:
                output = subprocess.check_output(command, text=True)
            except subprocess.CalledProcessError as e:
                output = f"Error: {e}"
    return render_template_string(command_template, output=output)
```

By using `subprocess.check_output` with a list of arguments instead of `shell=True`, and avoiding string concatenation, we prevent Command Injection attacks.

## Additional Prevention Measures
1. Input Validation: Implement strict input validation to ensure only valid hostnames or IP addresses are accepted.
2. Least Privilege: Run the web application with minimal necessary permissions.
3. Allowlisting: Use a predefined list of allowed commands instead of allowing arbitrary command execution.
4. Sandboxing: Run commands in a restricted environment to limit potential damage from successful attacks.

## Conclusion
This exercise demonstrates the dangers of unsanitized user input in command execution contexts. Always validate and sanitize user input, use secure APIs for command execution, and follow the principle of least privilege to protect your applications from Command Injection attacks.
