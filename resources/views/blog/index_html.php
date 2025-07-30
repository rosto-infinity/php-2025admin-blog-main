<!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Stage Professionnel en Génie Logiciel et Développement Web/Mobile</h1>
            <p>L'objectif est de pérenniser le parcours d'un développeur fullstack en mettant en lumière les projets, les compétences et les réalisations des étudiants dans les domaines du développement web et mobile. Découvrez comment ils maîtrisent les technologies clés et construisent des solutions innovantes pour l'avenir.</p>
            <div class="technologies">
                <span>HTML</span>
                <span>CSS</span>
                <span>TailwindCSS</span>
                <span>JavaScript</span>
                <span>Dart</span>
                <span>Flutter</span>
                <span>Laravel</span>
                <span>NodeJS</span>
                <span>ReactJS</span>
            </div>
            <a href="#projects" class="cta-button">Voir les Projets</a>
        </div>
    </section>
         <!-- Section Articles -->
    <section class="articles-section">
        <h2>Derniers Articles</h2>
        <div class="articles-grid">
           <!-- Article 1 -->
            <?php foreach ($articles as $article): ?>
            
            <div class="article-card">
                <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" class="article-image">
                <div class="article-content">
                    <h3 class="article-title"><?= $article['title'] ?></h3>
                    <div class="article-meta">
                        <span class="article-category">
                            <i class='bx bx-category-alt'></i> Catégorie 1
                        </span>
                        <span class="article-date">
                            <i class='bx bx-calendar'></i> <?= $article['created_at'] ?>
                        </span>
                    </div>
                    <p class="article-excerpt"><?= $article['introduction'] ?></p>
                    <div class="article-footer">
                        <span class="article-comments">
                            <i class='bx bx-comment-dots'></i> 5 commentaires
                        </span>
                        <a href="article.php?id=<?= $article['id'] ?>" class="read-more">
                            Lire<i class='bx bx-chevron-right'></i>
                        </a>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </section>

