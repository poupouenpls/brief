<?php
    require 'Produit.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = filter_input(INPUT_POST, 'nom');
        $quantite = filter_input(INPUT_POST, 'quantite');
        $categorie = filter_input(INPUT_POST, 'categorie');
        $prix = filter_input(INPUT_POST, 'prix');
        $description = filter_input(INPUT_POST, 'description');

        $produit = new Produit();
        $ajout = $produit->ajouter($nom, $quantite, $categorie, $prix, $description);

        if ($ajout) {
            echo "<p>Produit ajoute</p>";
        } else { 
            echo "<p style='color: red;'>Erreur lors de l'ajout du produit.</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
</head>
<body>
    <div>
        <form method="POST" action="Ajouter.php">
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom">
            </div>

            <div>
                <label for="quantite">Quantite</label>
                <input type="text" id="quantite" name="quantite">
            </div>

            <div>
                <label for="categorie">Categorie</label>
                <input type="text" id="categorie" name="categorie">
            </div>

            <div>
                <label for="prix">Prix</label>
                <input type="text" id="prix" name="prix">
            </div>

            <div>
                <label for="description">Description</label>
                <input type="text" id="description" name="description">
            </div>

            <button type="submit">Ajouter le produit</button>
        </form>
    </div>
</body>
</html>