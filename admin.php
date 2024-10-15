<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    echo 'Accès refusé. Veuillez vous connecter.';
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f4f4f4; }
        header { background: #333; color: #fff; padding: 10px 0; text-align: center; }
    </style>
</head>
<body>
    <header>
        <h1>Panel Admin</h1>
    </header>

    <section>
        <h2>Gestion des utilisateurs</h2>
        <p>Fonctionnalités d'administration ici.</p>
    </section>

    <nav>
        <a href="indexe.html">Retour à l'accueil</a>
        <a href="logout.php">Se déconnecter</a>
    </nav>
</body>
</html>