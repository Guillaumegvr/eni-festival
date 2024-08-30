<?php get_header(); ?>

<main class="site-main">
    <!-- Section pour le titre -->
    <section>
        <?php get_template_part('template-parts/titre'); ?>
    </section>

    <!-- Section de présentation -->
    <section>
        <div class="presentation">
            <p>Dans les couloirs labyrinthiques de l'École d'Informatique ENI, deux esprits brillants qui rêvaient
                de fusionner le monde du code avec celui du cinéma. Leurs noms sont David Octet et Damien Data. Ensemble,
                ils formèrent une alliance improbable, mélangeant des lignes de code avec des répliques cultes de films.</p>
            <p>Un jour pluvieux de 2020, alors que David Octet sirotait son café et que Damien Data débuggait un algorithme,
                ils eurent une révélation simultanée. Pourquoi ne pas créer un festival de cinéma unique,
                spécialement pour les étudiants en développement informatique ? Un endroit où les bits et
                les pixels se mêleraient aux bobines et aux pop-corn.</p>
            <p>...</p>
            <a href="<?php echo esc_url(get_permalink(10)); ?>" class="button-outline-white">Eni Code Saga</a>
        </div><!-- .presentation -->
    </section>

    <!-- Section pour le contenu "le-mag" -->
    <?php get_template_part('template-parts/le-mag'); ?>

    <!-- Section de la sélection du festival -->
    <section class="la-selection">
        <div class="section-title">
            <h2>LA SELECTION DU FESTIVAL</h2>
        </div>
        <!-- Jour 1 -->
        <div class="la-selection-container">
            <div class="la-selection-jour">
                <p>Jour 1</p>
            </div>
            <div class="la-selection-titres">
                <a href="http://localhost:8888/eni-fait-son-cinema/le-festival#hello-world">
                    <h4>HELLO WORLD !</h4>
                </a>
                <p>CtrI-C, CtrI+V, CtrI-Life.</p>
            </div>
        </div>

        <!-- Jour 2 -->
        <div class="la-selection-container">
            <div class="la-selection-jour">
                <p>Jour 2</p>
            </div>
            <div class="la-selection-titres">
                <a href="http://localhost:8888/eni-fait-son-cinema/le-festival#byte-me-baby">
                    <h4>Byte Me, Baby !</h4>
                </a>
                <p>The Matrix Reload: Garbage Collectors Revenge</p>
            </div>
        </div>

        <!-- Jour 3 -->
        <div class="la-selection-container">
            <div class="la-selection-jour">
                <p>Jour 3</p>
            </div>
            <div class="la-selection-titres">
                <a href="http://localhost:8888/eni-fait-son-cinema/le-festival#404-not-found">
                    <h4>404 Not Found</h4>
                </a>
                <p>La quête du pointeur perdu</p>
            </div>
        </div>

        <!-- Jour 4 -->
        <div class="la-selection-container">
            <div id="les-salles-last-jour" class="la-selection-jour">
                <p>Jour 4</p>
            </div>
            <div id="les-salles-last-titre" class="la-selection-titres">
                <a href="http://localhost:8888/eni-fait-son-cinema/le-festival#code-hard-or-go-home">
                    <h4>Code Hard or Go Home</h4>
                </a>
                <p>Mission Impossible: Debugging protocol</p>
            </div>
        </div>
    </section>

    <!-- Section des salles -->
    <section class="les-salles">
        <div class="les-salles-title">
            <h2>LES SALLES</h2>
            <p>Bienvenue dans l'univers décalé des salles de cinéma de l'ENi</p>
            <a href="<?php echo esc_url(get_permalink(15)); ?>" class="button-outline-blue">Pixel Play</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
