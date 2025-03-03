<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier produit</title>
</head>
<body>
    <div>
        <form method="POST" action="index.php?action=modifier&id=<?php echo $produit['produit_id']; ?>">
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($produit['produit_nom']); ?>">
            </div>

            <div>
                <label for="quantite">Quantite</label>
                <input type="text" id="quantite" name="quantite" value="<?php echo htmlspecialchars($produit['produit_quantite']); ?>">
            </div>

            <div>
                <label for="categorie">Categorie</label>
                <input type="text" id="categorie" name="categorie" value="<?php echo htmlspecialchars($produit['produit_categorie']); ?>">
            </div>

            <div>
                <label for="prix">Prix</label>
                <input type="text" id="prix" name="prix" value="<?php echo htmlspecialchars($produit['produit_prix']); ?>">
            </div>

            <div>
                <label for="description">Description</label>
                <input type="text" id="description" name="description" value="<?php echo htmlspecialchars($produit['produit_description']); ?>">
            </div>

            <button type="submit">Modifier le produit</button>
        </form>
    </div>
</body>
</html> 