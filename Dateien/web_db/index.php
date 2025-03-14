<?php
$servername = "192.168.60.20";
$username = "webuser";
$password = "sicheres_passwort";
$dbname = "studentendb";

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung prüfen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MariaDB!";

// Einfache Tabelle erstellen
$sql = "CREATE TABLE IF NOT EXISTS test (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "<br>Table created successfully";
} else {
    echo "<br>Error creating table: " . $conn->error;
}

$conn->close();
?>