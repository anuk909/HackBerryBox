CREATE DATABASE IF NOT EXISTS xxedb;
USE xxedb;

CREATE TABLE xml_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    xml_content TEXT
);

-- Insert some sample XML data
INSERT INTO xml_data (xml_content) VALUES
('<note><to>User</to><from>Admin</from><message>Hello, World!</message></note>'),
('<note><to>Developer</to><from>Tester</from><message>Test message</message></note>');
