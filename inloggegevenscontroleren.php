<?php
$gebruikersnaam = $_GET["gebruikersnaampv"];
$wachtwoord = $_GET["wachtwoordpv"];

$mysqli = new mysqli("localhost","root","","anneloesonzedatabase");

$sql = "SELECT * FROM schrijver WHERE username = '".$gebruikersnaam."';";
$resultaat = $mysqli -> query($sql);

if($resultaat -> num_rows != 1){
    header("Location: index.php?geenGebruikersnaam=nietgevonden");
}else{
    $rij = $resultaat -> fetch_assoc();
    if($rij["wachtwoord"] == $wachtwoord){
        echo "Welkom: ".$rij["voornaam"];
        echo "<br>";
        echo "ga hier nu aan de slag met blogs van ".$rij["id"];
    }else{
        header("Location: index.php?foutWachtwoord=incorrect"); 
    }
}
?>