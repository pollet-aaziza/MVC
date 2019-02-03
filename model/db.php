<?php
// Récupération des données
try
{
    $db = new PDO('mysql:host=localhost;dbname=association;charset=utf8', 'phpmyadmin', 'Manzakin2603');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
