<?php
// var_dump($_POST);


$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 
    if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
        $errors[] = "Le prénom est obligatoire";
    if (!isset($_POST['user_lastname']) || trim($_POST['user_lastname']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '')
        $errors[] = "Le mail est obligatoire";
    if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL))
        $errors[] = "Format de votre mail est invalide";
    if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '')
        $errors[] = "Le téléphone est obligatoire";
    if (!isset($_POST['user_sujet']) || trim($_POST['user_sujet']) === '')
        $errors[] = "Le sujet est obligatoire";
    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
        $errors[] = "Le sujet est obligatoire";

    if (empty($errors)) {
        echo 'Merci ' . $_POST['user_firstname'] . " " . $_POST['user_lastname'] . ' de nous avoir contacté à propos de ';
        switch ($_POST['user_sujet']) {
            case "reservtable":
                echo 'la réservation de votre table';
                break;
            case "annultable":
                echo "l'annulation de votre table";
                break;
            case "cmde":
                echo 'la réservation de votre commande à apporté';
                break;
            case "annulcmde":
                echo 'l\'annulation de votre commande à apporté';
                break;
            default:
                break;
        }

        echo '<br><br>';
        echo 'Un de nos conseillers vous contactera soit à l’adresse ' .  $_POST['user_email'];
        echo ' ou par téléphone au ' . $_POST['user_phone'] . ' dans les plus brefs délais pour traiter votre demande : ';
        echo '<br><br>';
        echo $_POST['user_message'];
    } else {
        echo "vous devez saisir les champs suivants : ";
        echo '<br><br>';
        foreach ($errors as $message) {
            echo $message;
            echo '<br><br>';
        }
    }
}
