<?php
    require 'Produit.php';

    $produit = new Produit();
    $id = (int) $_GET['id'];

    if ($produit->supprimer($id)) {
        echo "<p>produit supprimer</p>"; 
    } else { 
        echo "<p>produit non supprimer</p>";
    }
?>