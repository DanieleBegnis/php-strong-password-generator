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

//array che contiene tutti i caratteri per la password
$passwordArray = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '>', '#', '+', '-', 'é', ';', '[', '@'];
/* $passwordArray = [
    'a' => '1',
    'b' => '2',
    'c' => '3',
    'd' => '4',
    'e' => '5',
    'f' => '6',
    'g' => '7',
    'h' => '8',
    'i' => '9',
    'j' => '0',
    'k' => '11',
    'l' => '22',
    'm' => '33',
    'n' => '44',
    'o' => '55',
    'p' => '66',
    'q' => '77',
    'r' => '88',
    's' => '99',
    't' => '00',
    'u' => '111',
    'v' => '222',
    'w' => '333',
    'x' => '444',
    'y' => '555',
    'z' => '666',
    'A' => '777',
    'B' => '888',
    'C' => '999',
    'D' => '000',
    'E' => '1111',
    'F' => '2222',
    'G' => '3333',
    'H' => '4444',
    'I' => '5555',
    'J' => '6666',
    'K' => '7777',
    'L' => '8888',
    'M' => '9999',
    'N' => '0000',
    'O' => '11111',
    'P' => '222222',
    'Q' => '333333',
    'R' => '444444',
    'S' => '555555',
    'T' => '666666',
    'U' => '777777',
    'V' => '888888',
    'W' => '999999',
    'X' => '0000000',
    'Y' => '1111111',
    'Z' => '2222222',
    '1' => '3333333',
    '2' => '4444444',
    '3' => '5555555',
    '4' => '6666666',
    '5' => '7777777',
    '6' => '8888888',
    '7' => '9999999',
    '8' => '0000000',
    '9' => '11111111',
    '0' => '22222222',
    ':' => '33333333',
    'é' => '44444444',
    '@' => '55555555',
    '-' => '66666666',

]; */

//funzione che prende dei valori casuali dall'array a seconda del numero che si è inserito nel form

$input = $passwordArray;
$chiavi = array_rand($input, 20);
echo $input[$chiavi[0]];
echo $input[$chiavi[1]];
echo $input[$chiavi[2]];
echo $input[$chiavi[3]];
echo $input[$chiavi[4]];
echo $input[$chiavi[5]];
echo $input[$chiavi[6]];
echo $input[$chiavi[7]];
echo $input[$chiavi[8]];
echo $input[$chiavi[9]];
echo $input[$chiavi[10]];
echo $input[$chiavi[11]];
echo $input[$chiavi[12]];
echo $input[$chiavi[13]];
echo $input[$chiavi[14]];
echo $input[$chiavi[15]];
echo $input[$chiavi[16]];
echo $input[$chiavi[17]];
echo $input[$chiavi[18]];
echo $input[$chiavi[19]];   


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