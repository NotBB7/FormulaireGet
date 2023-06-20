<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<h2>Formulaire d'inscription</h2>
<form action="traitement.php" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" required><br><br>

    <label for="courriel">Courriel :</label>
    <input type="email" name="courriel" required><br><br>

    <label for="choix">Choix :</label>
    <select name="choix" required>
        <option value="Choix 1">Choix 1</option>
        <option value="Choix 2">Choix 2</option>
        <option value="Choix 3">Choix 3</option>
    </select><br><br>

    <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" pattern="(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,}" required oninput="checkPasswordMatch()"><br><br>

        <label for="confirmer_mot_de_passe">Confirmer le mot de passe :</label>
        <input type="password" id="confirmer_mot_de_passe" name="confirmer_mot_de_passe" required oninput="checkPasswordMatch()"><br><br>


    <span id="message" class="message"></span><br><br>

    <input type="checkbox" name="cgu" required>
    <label for="cgu">J'accepte les CGU</label><br><br>

    <input type="submit" value="S'inscrire">
</form>




<script>
        function checkPasswordMatch() {
            var password = document.getElementById("mot_de_passe").value;
            var confirmPassword = document.getElementById("confirmer_mot_de_passe").value;
            var message = document.getElementById("message");

            if (password === confirmPassword) {
                message.innerHTML = "Mot de passe identique";
                message.className = "message success-message";
            } else {
                message.innerHTML = "Les mots de passe ne correspondent pas";
                message.className = "message error-message";
            }
        }

</script>
</body>
</html>


