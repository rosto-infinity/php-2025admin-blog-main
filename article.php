<?php
session_start();
require_once 'database/database.php';

$error = [];

$article_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($article_id === NULL || $article_id === false) {
    $error['article_id'] = "Le parametre id  est invalide.";
}
$sql = "SELECT * FROM articles WHERE id =:article_id";
$query = $pdo->prepare($sql);
$query->execute(compact('article_id'));
$article = $query->fetch();


// --$sql2 ="SELECT * FROM comments ";

$sql = "SELECT comments.*, users.username
        FROM comments 
        JOIN users ON comments.user_id = users.id 
        WHERE article_id = :article_id";
$query = $pdo->prepare($sql);
$query->execute(['article_id' => $article_id]);
$comments = $query->fetchAll();




// --Récupérer les statistiques
$commentsCount = $pdo->query("SELECT COUNT(*) AS count FROM comments")->fetch()['count'];
$articlesCount = $pdo->query("SELECT COUNT(*) AS count FROM articles")->fetch()['count'];




$pageTitle = "Page d'un article";

// --cDebut de tampon de la page de sortie
ob_start();

// --Recupere la view(layout) de la page d'accueil
require_once 'resources/views/blog/show_html.php';

// --Récupérer le contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

require_once 'resources/views/layouts/blog-layout/blog-layout_html.php';
