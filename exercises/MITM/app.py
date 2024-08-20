from flask import Flask, request, jsonify

app = Flask(__name__)

# Simulated communication data
messages = []

@app.route('/send', methods=['POST'])
def send_message():
    message = request.json.get('message')
    if message:
        messages.append(message)
        return jsonify({"status": "Message sent"}), 200
    return jsonify({"error": "No message provided"}), 400

@app.route('/messages', methods=['GET'])
def get_messages():
    return jsonify({"messages": messages}), 200

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)
