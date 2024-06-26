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

$passwordLength = isset($_GET['password']) ? intval($_GET['password']) : '';
$password = '';

if(!empty($userPasswordLength)) {

    $allAvailableChars = getAvailableChars($userAvailableChars);

    $password = generatePassword($userPasswordLength, $allAvailableChars, $userRepetition);
}

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
    <p><?php echo $passwordArray[$random_keys[1]]; ?></p>
    <?php echo $passwordArray[$random_keys[2]]; ?>
    <?php var_dump($password); ?>
</body>

</html>