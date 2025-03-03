<?php
    require 'Produit.php';

    $produit = new Produit();
    $produits = $produit->lister(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <a href="Ajouter.php">Ajouter un nouveau produit</a>

    <table>
        <tr>
            <th>produit_id</th>
            <th>produit_nom</th>
            <th>produit_quantite</th>
            <th>produit_categorie</th>
            <th>produit_prix</th>
            <th>produit_description</th>
        </tr>

        <?php foreach ($produits as $produit): ?>
            <tr>
                <td><?php echo htmlspecialchars($produit['produit_id']); ?></td>
                <td><?php echo htmlspecialchars($produit['produit_nom']); ?></td>
                <td><?php echo htmlspecialchars($produit['produit_quantite']); ?></td>
                <td><?php echo htmlspecialchars($produit['produit_categorie']); ?></td>
                <td><?php echo htmlspecialchars($produit['produit_prix']); ?>$</td>
                <td><?php echo htmlspecialchars($produit['produit_description']); ?></td>
                <td><a href="Modifier.php?id=<?php echo $produit['produit_id']; ?>">Modifier le produit</a></td>
                <td><a href="Supprimer.php?id=<?php echo $produit['produit_id']; ?>">Supprimer produit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>