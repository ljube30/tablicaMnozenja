<?php
/*Kreiranje koda za uspostavljanje veze sa mysql bazom podataka*/

// Definisanje promjenjivih 
$servername = "localhost";
$username = "root";
$password = "";
$database = "projekat";

// Kreiranje konekcije 
$conn = new mysqli($servername, $username, $password, $database);

// Provjera konekcije 
if ($conn->connect_error) {
    die("Konekcija sa bazom podataka nije uspjela(provjerite konfiguraciju mySQL baze): " . $conn->connect_error);
} 
echo "Konekcija sa bazom podataka uspjesna <br/>";
?>