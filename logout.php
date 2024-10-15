<?php
session_start();
session_destroy(); // Détruire la session
header('Location: index.html'); // Rediriger vers la page d'accueil
?>