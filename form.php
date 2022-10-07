<?php
// var_dump($_POST);

if (isset($_POST['user_firstname']) && isset($_POST['user_lastname']) && isset($_POST['user_sujet']) && isset($_POST['user_phone']) && isset($_POST['user_email']) && isset($_POST['user_message'])) {
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
}
