<script>
    function inlogGegevensControleren(){
        let gebruikersnaam = document.getElementById("gebruikersnaamVeld").value;
        let wachtwoord = document.getElementById("wachtwoordVeld").value;

        window.open("inloggegevenscontroleren.php?gebruikersnaampv="+gebruikersnaam, "_self");
    }
</script>

<h1>inloggen</h1>

Username: <input id="gebruikersnaamVeld" ><br>
Wachtwoord: <input id="wachtwoordVeld" ><br>

<button onclick="inlogGegevensControleren()">Inloggen</button>