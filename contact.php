<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Affichage des données
    echo "<h1>Merci pour votre soumission, $nom !</h1>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Message :</strong> $message</p>";
} else {
    echo "<p>Erreur : Veuillez soumettre le formulaire correctement.</p>";
}
?>
