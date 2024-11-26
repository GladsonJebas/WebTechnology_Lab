<?php
// Load the XML file
$xml = simplexml_load_file('data.xml') or die("Error: Cannot create object");

// Function to display the XML content
function displayXmlData($xml) {
    echo "<h1>XML Data Extracted:</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    
    // Loop through each record in the XML
    foreach ($xml->user as $user) {
        echo "<tr>";
        echo "<td>" . $user->id . "</td>";
        echo "<td>" . $user->name . "</td>";
        echo "<td>" . $user->email . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extract XML Data using PHP</title>
</head>
<body>

    <h1>Welcome to the XML Data Extractor</h1>
    
    <!-- Display extracted XML data -->
    <?php displayXmlData($xml); ?>

</body>
</html>
