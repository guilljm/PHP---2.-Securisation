<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/form.php" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_lastname">
        </div>

        <br>

        <div>
            <label for="nom">Prénom :</label>
            <input type="text" id="prenom" name="user_firstname">
        </div>

        <br>

        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email">
        </div>

        <br>

        <div>
            <label for="telephone">Telephone :</label>
            <input type="tel" id="tel" name="user_phone">
        </div>

        <br>

        <div>
            <label for="sujet">sujet :</label>
            <select id="id_sujet" name="user_sujet">
                <option value="reservtable">Reservation table</option>
                <option value="annultable">Annulation table</option>
                <option value="cmde">Commande</option>
                <option value="annulcmde">Annuation commande</option>
            </select>
        </div>
        <br>

        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message"></textarea>
        </div>

        <br>

        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>

</html>