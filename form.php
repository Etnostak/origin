<!DOCTYPE html>
<html lang="fr">
<head>
    <style>
        .enregistrement
{
    background-color:cyan;
    padding: 10px;
    color:black;
}
.enregistrement input{
    border: solid pink;
}
.enregistrement button{
    background-color: green;
    color:ivory;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Basique</title>
</head>
<body>
    <h1>Formulaire de Contact</h1>
    <form action="contact.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" ><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" ><br><br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="5" cols="30" ></textarea><br><br>

        <button type="submit">Envoyer</button>
    </form>
<div class="enregistrement"><h1>Formulaire d'enregistrement </h1>
    <h3>remplir la</h3>
    <form method="POST" action="enregistrement.php">
    <p>
        Nom d'utilisateur :</label>
    <input type="text" name="username" required>
    </p><label>
        <p> <label>Mot de passe :</label>
    <input type="password" name="password" required></p>
   
    <button type="submit">S'inscrire</button></div>
    
</form>
 
 <h1>Formulaire de connexion</h1>
 <form method="POST" action="connexion.php">
    <label>Nom d'utilisateur :</label>
    <input type="text" name="username" >
    <label>Mot de passe :</label>
    <input type="password" name="password">
    <button type="submit">Se connecter</button>
</form>
</body>
</html>
