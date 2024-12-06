<?php
// Simulate an XML External Entity (XXE) vulnerability

// Load the XML file
$xmlfile = file_get_contents('php://input');

// Disable libxml errors and allow user to fetch error information as needed
libxml_use_internal_errors(true);

// Load the XML string into a SimpleXMLElement object
$xml = simplexml_load_string($xmlfile, 'SimpleXMLElement', LIBXML_NOENT);

// Check if loading the XML was successful
if ($xml === false) {
    echo "Failed loading XML\n";
    foreach(libxml_get_errors() as $error) {
        echo "\t", $error->message;
    }
} else {
    // Output the XML
    echo $xml->asXML();
}

// HTML form for XML input
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML Parser</title>
</head>
<body>
    <h1>XML Parser</h1>
    <form method="post" action="">
        <textarea name="xml" rows="10" cols="50"></textarea><br>
        <input type="submit" value="Parse XML">
    </form>
</body>
</html>
HTML;
?>
