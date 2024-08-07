<?php
    if(isset($_GET["geenGebruikersnaam"])){
        echo "foute username";
    }
    if(isset($_GET["foutWachtwoord"])){
        echo "foute wachtwoord";
    }
?>

<script>
    function inlogGegevensControleren(){
        let gebruikersnaam = document.getElementById("gebruikersnaamVeld").value;
        let wachtwoord = document.getElementById("wachtwoordVeld").value;

        window.open("inloggegevenscontroleren.php?gebruikersnaampv="+gebruikersnaam+"&wachtwoordpv="+wachtwoord, "_self");
    }
</script>

<h1>inloggen</h1>

Username: <input id="gebruikersnaamVeld" ><br>
Wachtwoord: <input type="password" id="wachtwoordVeld" ><br>

<button onclick="inlogGegevensControleren()">Inloggen</button>