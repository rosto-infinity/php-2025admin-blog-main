<?php
session_start();

require_once 'database/database.php';

// Verifiez les permissions d'accès a la page
if($_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();
}

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function createSlug($title) {
    $slug =removeAccents($title);
    $slug= strtolower( str_replace(' ', '-',$slug));
    $slug = preg_replace('/[^a-z0-9-]/', '', $slug); // Supprimer les caractères non alphanumériques
    $slug = preg_replace('/-+/', '-', $slug); // Remplacer les tirets multiples par un seul

    return trim($slug, '-'); // Supprimer les tirets en début et fin de chaîne
}

function removeAccents($string)
{
  $accents = [
    'à' => 'a',
    'á' => 'a',
    'â' => 'a',
    'ã' => 'a',
    'ä' => 'a',
    'å' => 'a',
    'ç' => 'c',
    'è' => 'e',
    'é' => 'e',
    'ê' => 'e',
    'ë' => 'e',
    'ì' => 'i',
    'í' => 'i',
    'î' => 'i',
    'ï' => 'i',
    'ñ' => 'n',
    'ò' => 'o',
    'ó' => 'o',
    'ô' => 'o',
    'õ' => 'o',
    'ö' => 'o',
    'ø' => 'o',
    'ù' => 'u',
    'ú' => 'u',
    'û' => 'u',
    'ü' => 'u',
    'ý' => 'y',
    'ÿ' => 'y',
    'À' => 'A',
    'Á' => 'A',
    'Â' => 'A',
    'Ã' => 'A',
    'Ä' => 'A',
    'Å' => 'A',
    'Ç' => 'C',
    'È' => 'E',
    'É' => 'E',
    'Ê' => 'E',
    'Ë' => 'E',
    'Ì' => 'I',
    'Í' => 'I',
    'Î' => 'I',
    'Ï' => 'I',
    'Ñ' => 'N',
    'Ò' => 'O',
    'Ó' => 'O',
    'Ô' => 'O',
    'Õ' => 'O',
    'Ö' => 'O',
    'Ø' => 'O',
    'Ù' => 'U',
    'Ú' => 'U',
    'Û' => 'U',
    'Ü' => 'U',
    'Ý' => 'Y'
  ];
  return strtr($string, $accents);
}

if(isset($_POST['add-article'])) {

    $title = clean_input($_POST['title']);
    $slug =createSlug($title);
        echo $slug;
        die();

    $introduction = clean_input($_POST['introduction']);
    $content = clean_input($_POST['content']);

    // Gestion de l'image

    //validation des champs
    if(empty($title) || empty($introduction) || empty($content)) {
        $error = "Tous les champs sont obligatoires.";
    }else{

        //Verification de l'unicité du slug

        //Insertion de l'article dans la base de données
        $query = $pdo->prepare("INSERT INTO articles (title, slug, introduction, content, created_at) VALUES (:title, :slug, :introduction, :content,  NOW())");

        $query->execute([
            'title' => $title,
            'slug' => $slug,
            'introduction' => $introduction,
            'content' => $content
        ]);


    }
}




$pageTitle = 'Page  Add article';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'resources/views/admin/articles/add-article_html.php';

// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'resources/views/layouts/admin-layout/layout_html.php';

