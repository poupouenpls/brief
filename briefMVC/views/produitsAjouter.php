<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
</head>
<body>
    <div>
        <form method="POST" action="index.php?action=ajouter">
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