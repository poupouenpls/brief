<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>

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
    <h1>Liste des produits</h1>
    
    <a href="index.php?action=ajouter">Ajouter un nouveau produit</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Quantité</th>
                <th>Catégorie</th>
                <th>Prix</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produits as $produit): ?>
                <tr>
                    <td><?php echo htmlspecialchars($produit['produit_id']); ?></td>
                    <td><?php echo htmlspecialchars($produit['produit_nom']); ?></td>
                    <td><?php echo htmlspecialchars($produit['produit_quantite']); ?></td>
                    <td><?php echo htmlspecialchars($produit['produit_categorie']); ?></td>
                    <td><?php echo htmlspecialchars($produit['produit_prix']); ?>$</td>
                    <td><?php echo htmlspecialchars($produit['produit_description']); ?></td>
                    <td><a href="index.php?action=details&id=<?php echo $produit['produit_id']; ?>">Détails</a></td>
                    <td><a href="index.php?action=modifier&id=<?php echo $produit['produit_id']; ?>">Modifier</a></td>
                    <td><a href="index.php?action=supprimer&id=<?php echo $produit['produit_id']; ?>">Supprimer</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html> 