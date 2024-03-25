<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    
    header("location: ../index.php");
    exit();
}

require_once('../connection.php');

try {
    $bdd = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

$email_utilisateur1 = $_POST["email_utilisateur1"];
$email_utilisateur2 = $_POST["email_utilisateur2"];

$code_sessions = genererCodeSession();


$requete = $bdd->prepare("INSERT INTO groupe (email_utilisateur1, email_utilisateur2, code_session) VALUES (:email_utilisateur1, :email_utilisateur2, :code_session)");
$requete->bindParam(':email_utilisateur1', $email_utilisateur1);
$requete->bindParam(':email_utilisateur2', $email_utilisateur2);
$requete->bindParam(':code_session', $code_session);
$requete->bindParam(':date_creation', $code_session);

if ($requete->execute()) {
    header("location: homepage.php");
    exit();

    echo json_encode(['success' => true, 'code_session' => $code_sessions]);
} else {
    echo json_encode(['success' => false, 'message' => 'Erreur lors de la création de la session.']);
}

function genererCodeSession($longueur = 8) {

    $caracteres = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxrz";
    $code = "";

    do {
        $code = '';
        for ($i = 0; $i < $longueur; $i++) {
            $code .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
    } while (codeSessionExisteDeja($code));

    return $code;
}

function codeSessionExisteDeja($code) {
    include('./connection.php');

    $requete = $connexion->prepare("SELECT COUNT(*) as count FROM sessions WHERE code_session = :code_session");
    $requete->bindParam(':code_session', $code);
    $requete->execute();
    $row = $requete->fetch(PDO::FETCH_ASSOC);

    return $row['count'] > 0;
}





}
