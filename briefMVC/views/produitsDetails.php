<?php
    if (!isset($produit)) {
        header('Location: index.php?action=liste');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du produit</title>
</head>
<body>
    <h2>Détails du produit</h2>
    <div>
        <h3><?php echo htmlspecialchars($produit['produit_nom']); ?></h3>
        <p>Catégorie : <?php echo htmlspecialchars($produit['produit_categorie']); ?></p>
        <p>Prix : <?php echo htmlspecialchars($produit['produit_prix']); ?> €</p>
        <p>Quantité : <?php echo htmlspecialchars($produit['produit_quantite']); ?></p>
        <p>Description : <?php echo htmlspecialchars($produit['produit_description']); ?></p>
    </div>
    <p>
        <a href="index.php?action=liste">Retour à la liste</a>
        <a href="index.php?action=modifier&id=<?php echo $produit['produit_id']; ?>">Modifier</a>
    </p>
</body>
</html>