<?php
/*
Template Name: ABOUT
*/

get_header();
?>

<main>
    <div class="about-titre">
        <div>
            <h1 class="titre-page-principal">ABOUT</h1>
        </div>
        <div class="gauche">
            <h2>ENI CODE SAGA</h2>
        </div>
    </div>

    <div class="about">
        <div class="entete-image-article mb-5">
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="about-content">
            <?php the_content(); ?>
        </div>
    </div>

    <?php get_template_part('template-parts/titre'); ?>
</main> <!-- Ici on ferme la balise main avant get_footer -->

<?php
get_footer();
?>
