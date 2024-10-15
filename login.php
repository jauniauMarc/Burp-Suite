<?php
session_start();

// Utilisateurs fictifs
$users = [
    'admin' => 'password' // Ne jamais stocker de mots de passe en clair dans une vraie application !
];

// Vérifier les identifiants
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['isLoggedIn'] = true;
        header('Location: admin.php'); // Rediriger vers la page admin
        exit();
    } 
    }
 else {
    header('Location: indexe.html');
    exit();
}
?>