
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/resources/css/blog.css">
<link rel="stylesheet" href="/resources/css/forms.css">

<link rel="stylesheet" href="/resources/css/footer.css">
  <title>Stage Blog Php 2025 - <?= $pageTitle ?></title>
</head>
<body>
  <?php include 'blog-navbar_html.php'?>
  <main>
    <?= $pageContent ?>
  </main>

  <?php include 'blog-footer_html.php'?>
  
</body>
</html>