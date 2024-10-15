<?php
session_start();
session_destroy(); // Détruire la session
header('Location: indexe.html'); // Rediriger vers la page d'accueil
?>