<?php
    require 'Database.php';

    class Produit {
        private $pdo;

        public function __construct() {
            $this->pdo = Database::getInstance()->getConnection();
        }

        public function lister() {
            $query = $this->pdo->query("select * from produit");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        public function listerByID(int $id){
            $query = $this->pdo->prepare('select * from produit where produit_id = ?');
            $query->execute([$id]);
            return $query->fetch(PDO::FETCH_ASSOC);
        }

        public function ajouter(string $nom, int $quantite, string $categorie, float $prix, string $description) {
            $query = $this->pdo->prepare("INSERT INTO produit (produit_nom, produit_quantite, produit_categorie, produit_prix, produit_description) VALUES (?, ?, ?, ?, ?)");
            return $query->execute([$nom, $quantite, $categorie, $prix, $description]);
        }

        public function supprimer(int $id) {
            $query = $this->pdo->prepare("delete from produit where produit_id = ?");
            return $query->execute([$id]);
        }

        public function modifier(int $id, string $nom, int $quantite, string $categorie, float $prix, string $description) {
            $query = $this->pdo->prepare("UPDATE produit SET produit_nom = ?, produit_quantite = ?, produit_categorie = ?, produit_prix = ?, produit_description = ? WHERE produit_id = ?");
            return $query->execute([$nom, $quantite, $categorie, $prix, $description, $id]);
        }        
    }
?>