<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <link rel="stylesheet" type="text/css" href="../css/button.css">
    <title>FORMULAIRE</title>
</head>
<body>
<div class="logo"><img src="..images\products\logoastro.png" alt="Logo"> </div>

<?php
session_start(); // Starting session

function redirectToProductsPage() {
    header("Location: ../html/products.html");
    exit; // Ensure that script stops after redirection
}

$host = 'localhost';
$dbname = 'Astro';
$username = 'root';
 
if (isset($_POST['login'])) {
    var_dump($_POST['login']);
    try {
        // Connect to MySQL
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username);

        // Set PDO to throw exceptions on error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit(); // Exit on connection failure
    }

    // Retrieve input fields
    $login = $_POST['login'];
    $password = $_POST['pwd'];

    // Prepare query
    $stmt = $pdo->prepare("SELECT * FROM User WHERE LOGIN = :login AND PASSWORD = :pwd");
    $stmt->execute(['login' => $login, 'pwd' => $password]);

    // Fetch user
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user exists
    if ($user) {
        // Start session variables
        $_SESSION['user_id'] = $user['ID']; // Example: Assuming 'id' is the column name for user ID
        $_SESSION['username'] = $user['login']; // Example: Assuming 'login' is the column name for username

        // Redirect to products page
        redirectToProductsPage();
    } else {
        // Display login failed message
        ?>
        <div class="form">
            <h3 class="titre">Connexion échouée !</h3>
            <br><br>
            <a href="#" class="btn" onclick="window.history.go(-1)">Précédent</a>
        </div>
        <?php
    }
}

?>
</body>
</html>
