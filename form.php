<?php

$data = array_map('trim', $_POST);

$name = htmlentities($data['name']);
$email = htmlentities($data['email']);
$message = htmlentities($data['message']);

$errors = [];

if (empty($name)) {
    $errors[] = 'Le champ prénom doit être renseigné';
}

if (empty($email)) {
    $errors[] = 'Le champ email doit être renseigné';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'l\'adresse email n\'est pas au bon format';
}

if (empty($message)) {
    $errors[] = 'Le champ message doit être renseigné';
}

if (strlen($message) < 30) {
    $errors[] = 'Le champ message doit contenir plus de 30 caractères';
}

if (!empty($errors)) {
    require 'error.php';
    die();
}
?>

<div>
        <h1>Nous traitons votre réservation.</h1>
        <img src="Images/frame.png" alt="Logo du restaurant ROMERY">
</div>
    <div>
        <div class="summary">
           
            <p>
                <img src="Images/ROMERY-BLCK.png" alt="Logo du restaurant ROMERY">
                <span></span>
            </p>
            
            <ul>
                <li>Votre nom : <span><?= $name; ?></span></li>
                <li>Votre email : <span><?= $email; ?></span></li>
                <li>Votre message :
                    <p><?= $message; ?></p>
                </li>
            </ul>
           

        </div>

       
</div>