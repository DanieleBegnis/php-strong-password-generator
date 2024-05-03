<?php
/* Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice,
spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, 
effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: 
quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro
(es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.  */

$password = isset($_GET['password']) ? intval($_GET['password']) : '';

$passwordArray = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','>','#','+','-','é',';','[','@'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>

<body>
    <form method="GET">
        <div>
            <label for="password">Numero di caratteri della password</label>
            <input id="password" name="password" type="text" />
        </div>
        <div>
            <button type="submit">Invia</button>
        </div>
    </form>
    <p><?php echo $password; ?></p>
    <?php var_dump($password); ?>
</body>

</html>