<?php


require_once('../connection.php');

try {
    $bdd = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ... le reste de votre code ...
     // Données à insérer (vous pouvez les récupérer depuis un formulaire, par exemple)
     $nom = htmlspecialchars($_POST['nom']);
     $prenom = htmlspecialchars($_POST['prenom']);
     $pseudo = htmlspecialchars($_POST['pseudo']);
     $email = htmlspecialchars($_POST['email']);
     $motdepasse = password_hash(htmlspecialchars($_POST['motdepasse']), PASSWORD_DEFAULT);
     $datenaissance = $_POST['datenaissance']; // Format YYYY-MM-DD

       // Requête SQL d'insertion
     $requete = $bdd->prepare('INSERT INTO inscription (nom, prenom, pseudo, email, motdepasse, datenaissance) VALUES (?, ?, ?, ?, ?, ?)');
     $requete->execute([$nom, $prenom, $pseudo, $email, $motdepasse, $datenaissance]);
 
     header("location: ../index.php");
     exit();
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

?>
