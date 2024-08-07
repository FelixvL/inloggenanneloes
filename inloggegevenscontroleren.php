<?php
$gebruikersnaam = $_GET["gebruikersnaampv"];

$mysqli = new mysqli("localhost","root","","anneloesonzedatabase");

$sql = "SELECT * FROM schrijver WHERE username = '".$gebruikersnaam."';";
$resultaat = $mysqli->query($sql);
$rij = $resultaat -> fetch_assoc();

echo "Welkom: ".$rij["voornaam"];
?>