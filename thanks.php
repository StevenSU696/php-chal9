<?php

//NOT EMPTY
// AT LEAST 2 CHARACTERS
$errors = array();

//start validation
if (empty($_POST['user_firstname'])) {
    $errors['user_firstname1'] = "Le prénom est obligatoire";
}
if (strlen($_POST['user_firstname']) < 2) {
    $errors['user_firstname2'] = "Le prénom doit contenir au moins 2 caractères";
}
if (empty($_POST['user_lastname'])) {
    $errors['user_lastname1'] = "Le nom est obligatoire";
}
if (strlen($_POST['user_lastname']) < 2) {
    $errors['user_lastname2'] = "Le nom doit contenir au moins 2 caractères";
}
if (empty($_POST['user_email'])) {
    $errors['user_email1'] = "L'email est obligatoire";
}
if (strlen($_POST['user_email']) < 6) {
    $errors['user_email2'] = "L'email doit contenir au moins 6 caractères";
}
if (empty($_POST['user_phone'])) {
    $errors['user_phone1'] = "Le numero de téléphone est obligatoire";
}
if (strlen($_POST['user_phone']) < 6) {
    $errors['user_phone2'] = "Le numero de téléphone doit contenir au moins 6 caractères";
}
if (empty($_POST['user_topic'])) {
    $errors['user_topic1'] = "Le sujet est obligatoire";
}
if (empty($_POST['user_message'])) {
    $errors['user_message1'] = "Le message est obligatoire";
}
if (strlen($_POST['user_message']) < 10) {
    $errors['user_message2'] = "Le message doit contenir au moins 10 caractères";
}

$lastname = $_POST['user_lastname'];
$firstname = $_POST['user_firstname'];
$email = filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL);
$phone = $_POST['user_phone'];
$topic = $_POST['user_topic'];
$message = $_POST['user_message'];


if (count($errors) != 0) {
    //redirect to success pages
    echo 'Une ou plusieurs erreurs ont été trouvés coté PHP dans le formulaire';
} else

    echo 'Merci ' . $firstname . ' ' . $lastname . ' de nous avoir contacté à propos de ' . $topic . '<br>
Un de nos conseiller vous contactera soit à l’adresse ' . $email . ' ou par téléphone au ' . $phone . ' dans les plus brefs délais pour traiter votre demande :<br>'
        . $message;
