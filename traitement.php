<!DOCTYPE html>
<html>
<head>
    <title>Traitement du formulaire</title>
</head>
<body>
    <?php
    // Vérification des données envoyées via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $courriel = $_POST["courriel"];
        $choix = $_POST["choix"];

        $motDePasse = $_POST["mot_de_passe"];
        $confirmerMotDePasse = $_POST["confirmer_mot_de_passe"];

        // Vérification des mots de passe
        if ($motDePasse !== $confirmerMotDePasse) {
            echo "Les mots de passe ne correspondent pas";
        } else {
            // Affichage du récapitulatif
            echo "Inscription réussie ! Voici les informations que vous avez saisies :<br><br>";
            echo "Nom : $nom<br>";
            echo "Prénom : $prenom<br>";
            echo "Courriel : $courriel<br>";
            echo "Choix : $choix<br>";
        }
    }
    ?>
</body>
</html>

