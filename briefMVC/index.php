<?php

session_start();

require_once 'controllers/ProduitController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'liste';
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;

$controller = new ProduitController();

switch ($action) {
    case 'liste':
        $controller->liste();
        break;
    case 'details':
        if ($id) {
            $controller->details($id);
        } else {
            header('Location: index.php?action=liste');
        }
        break;
    case 'ajouter':
        $controller->ajouter();
        break;
    case 'modifier':
        if ($id) {
            $controller->modifier($id);
        } else {
            header('Location: index.php?action=liste');
        }
        break;
    case 'supprimer':
        if ($id) {
            $controller->supprimer($id);
        }
        header('Location: index.php?action=liste');
        break;
    default:
        header('Location: index.php?action=liste');
        break;
}
?>
