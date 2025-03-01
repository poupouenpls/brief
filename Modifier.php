<?php 
    require 'Produit.php';

    $produit = new Produit();
    $id = (int) $_GET['id'];

    $productDetails = $produit->listerByID($id);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = filter_input(INPUT_POST, 'nom');
        $quantite = filter_input(INPUT_POST, 'quantite');
        $categorie = filter_input(INPUT_POST, 'categorie');
        $prix = filter_input(INPUT_POST, 'prix');
        $description = filter_input(INPUT_POST, 'description');

        $modifier = $produit->modifier($id, $nom, $quantite, $categorie, $prix, $description);

        if ($modifier) {
            echo "<p>Produit mis à jour avec succès.</p>";
        } else { 
            echo "<p style='color: red;'>Erreur lors de mise a jour du produit.</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="POST" action="Modifier.php?id=<?php echo $id; ?>">
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($productDetails['produit_nom']); ?>">            
            </div>

            <div>
                <label for="quantite">Quantite</label>
                <input type="text" id="quantite" name="quantite" value="<?php echo htmlspecialchars($productDetails['produit_quantite']); ?>">
            </div>

            <div>
                <label for="categorie">Categorie</label>
                <input type="text" id="categorie" name="categorie" value="<?php echo htmlspecialchars($productDetails['produit_categorie']); ?>">
            </div>

            <div>
                <label for="prix">Prix</label>
                <input type="text" id="prix" name="prix" value="<?php echo htmlspecialchars($productDetails['produit_prix']); ?>">
            </div>

            <div>
                <label for="description">Description</label>
                <input type="text" id="description" name="description" value="<?php echo htmlspecialchars($productDetails['produit_description']); ?>">
            </div>

            <button type="submit">Modifier le produit</button>
        </form>
    </div>
</body>
</html>