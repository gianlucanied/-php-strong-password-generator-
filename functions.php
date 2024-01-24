
<?php

if (isset($_GET['password_lunghezza'])) {

    // Ottieni la lunghezza della password dalla richiesta GET fatta a user
    $password_lunghezza = $_GET['password_lunghezza'];

    // Genero la password casuale
    $random_password = generateRandomPassword($password_lunghezza);

    // Restituisci la password all'utente
    echo "La tua password casuale è: " . $random_password;
} 

// Funzione per generare una password casuale
function generateRandomPassword($length) {

    // Scelgo i caratteri da utilizzare
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?=/';

    // Inizializzo la password
    $password = '';

    // Creo un ciclo for per creare la password random
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}
?>