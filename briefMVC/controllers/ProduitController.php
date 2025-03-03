<?php
require_once 'models/Produit.php';

class ProduitController {
    private $produitControl;

    public function __construct() {
        $this->produitControl = new Produit();
    }

    public function liste() {
        $produits = $this->produitControl->lister();
        require 'views/produitsListe.php';
    }

    public function details($id) {
        $produit = $this->produitControl->listerByID($id);
        require 'views/produitsDetails.php';
    }

    public function ajouter() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = filter_input(INPUT_POST, 'nom');
            $quantite = filter_input(INPUT_POST, 'quantite');
            $categorie = filter_input(INPUT_POST, 'categorie');
            $prix = filter_input(INPUT_POST, 'prix');
            $description = filter_input(INPUT_POST, 'description');

            if ($this->produitControl->ajouter($nom, $quantite, $categorie, $prix, $description)) {
                header('Location: index.php?action=liste');
                exit();
            }
        }
        require 'views/produitsAjouter.php';
    }

    public function modifier($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = filter_input(INPUT_POST, 'nom');
            $quantite = filter_input(INPUT_POST, 'quantite');
            $categorie = filter_input(INPUT_POST, 'categorie');
            $prix = filter_input(INPUT_POST, 'prix');
            $description = filter_input(INPUT_POST, 'description');

            if ($this->produitControl->modifier($id, $nom, $quantite, $categorie, $prix, $description)) {
                header('Location: index.php?action=liste');
                exit();
            }
        }
        $produit = $this->produitControl->listerByID($id);
        require 'views/produitsModifier.php';
    }

    public function supprimer($id) {
        if ($this->produitControl->supprimer($id)) {
            header('Location: index.php?action=liste');
            exit();
        }
    }
}
?>