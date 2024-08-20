# SQL Injection Exercise Solution

## Objective
The objective of this exercise is to demonstrate how SQL Injection vulnerabilities can be exploited and how to prevent them.

## Exploitation
1. Access the login page at `http://localhost:8080`.
2. In the username field, enter: `' OR 1=1--`
3. Leave the password field empty.
4. Click the login button.
5. Observe that you are logged in without valid credentials, demonstrating the SQL Injection vulnerability.

## Explanation
The application uses string concatenation to build the SQL query, which makes it vulnerable to SQL Injection. The injected code `' OR 1=1--` modifies the query logic to always return true, bypassing the authentication check.

## Prevention
To prevent SQL Injection vulnerabilities, use parameterized queries or prepared statements. Here's an example of how to fix the vulnerability in the `app.py` file:

```python
@app.route('/login', methods=['POST'])
def login():
    username = request.form['username']
    password = request.form['password']

    # Use parameterized query to prevent SQL Injection
    query = "SELECT * FROM users WHERE username = %s AND password = %s"

    db = get_db()
    cursor = db.cursor(dictionary=True)
    cursor.execute(query, (username, password))
    user = cursor.fetchone()
    cursor.close()

    if user:
        return f"Welcome, {user['username']}!"
    else:
        return "Invalid credentials"
```

By using parameterized queries, user input is safely handled, and SQL Injection attacks are mitigated.

## Additional Prevention Measures
1. Input Validation: Implement strict input validation to ensure only expected characters are allowed.
2. Least Privilege: Use database accounts with minimal necessary permissions.
3. Error Handling: Avoid exposing detailed error messages that could reveal database structure.
4. Regular Updates: Keep all software components up-to-date to patch known vulnerabilities.

## Conclusion
This exercise demonstrates the importance of securing applications against SQL Injection vulnerabilities. Always validate and sanitize user input, and use parameterized queries to protect your applications from such attacks.
