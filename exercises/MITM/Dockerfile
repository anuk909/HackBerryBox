# Use an official Python image as a parent image
FROM python:3.9-slim

# Set the working directory
WORKDIR /app

# Copy the current directory contents into the container at /app
COPY . /app

# Install Flask and Scapy
RUN pip install flask scapy

# Expose port 5000
EXPOSE 5000

# Run the application
CMD ["python", "app.py"]
