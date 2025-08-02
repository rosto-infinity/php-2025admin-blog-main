<?php
session_start(); // -Démarre la session PHP pour gérer les utilisateurs connectés

require_once 'database/database.php'; // -Inclut la connexion à la base de données

$error = []; // Tableau pour stocker les messages d'erreur

// -Récupère l'identifiant de l'article depuis l'URL et le valide comme entier
$article_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($article_id === NULL || $article_id === false) {
    $error['article_id'] = "Le parametre id  est invalide.";
}

// Récupère l'article correspondant à l'identifiant
$sql = "SELECT * FROM articles WHERE id =:article_id";
$query = $pdo->prepare($sql);
$query->execute(compact('article_id'));
$article = $query->fetch();

// Récupère les commentaires de l'article avec le nom d'utilisateur de chaque auteur
$sql = "SELECT comments.*, users.username
        FROM comments 
        JOIN users ON comments.user_id = users.id 
        WHERE article_id = :article_id";
$query = $pdo->prepare($sql);
$query->execute(['article_id' => $article_id]);
$comments = $query->fetchAll();

// Récupère le nombre total de commentaires dans la base
$commentsCount = $pdo->query("SELECT COUNT(*) AS count FROM comments")->fetch()['count'];

// Récupère le nombre total d'articles dans la base
$articlesCount = $pdo->query("SELECT COUNT(*) AS count FROM articles")->fetch()['count'];

// Définit le titre de la page
$pageTitle = "Page d'un article";

// Démarre la temporisation de sortie pour capturer le contenu de la vue
ob_start();

// Inclut la vue spécifique de l'article (affichage du contenu)
require_once 'resources/views/blog/show_html.php';

// Récupère le contenu généré par la vue
$pageContent = ob_get_clean();

// Inclut le layout principal du blog qui affichera $pageContent
require_once 'resources/views/layouts/blog-layout/blog-layout_html.php';