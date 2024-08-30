<?php
/*
Template Name: FESTIVAL
*/

get_header();
?>
<main>
<div class="contact-titre">
    <div class="contact-titre-inner">
        <h1>LE FESTIVAL</h1>
        <p>Bienvenue à la nouvelle édition du festival <strong>ENI CODE</strong></p>
        <p>Préparez-vous à plonger dans un univers où les pixels dansent, les algorithmes
            chantent et les écrans prennent vie ! Cette année, notre festival promet d’être plus
            épique qu’une mise à jour de Windows en plein milieu d’une présentation importante.</p>
        <p>Au programme : des courts-métrages qui vous feront rire, pleurer, et peut-être même reconsidérer votre
            choix de mot de passe. Des débats enflammés sur le meilleur langage de programmation pour réaliser un film (Python ou JavaScript ?),
            et bien sûr, des rencontres avec des réalisateurs qui ont troqué leur clavier pour une caméra.</p>
        <p>Alors, sortez vos lunettes 3D, préparez vos pop-corns et rejoignez-nous pour une aventure cinématographique
            inoubliable, où l’informatique et le cinéma fusionnent pour créer de la magie pure ! </p>
        <p>Le 23, 24, 25 & 26 décembre, Action !</p>
    </div><!-- .contact-titre-inner -->
</div><!-- .contact-titre -->

<div class="festival">
    <div class="entete-image-article mb-5">
        <?php the_post_thumbnail(); ?>
    </div><!-- .entete-image-article -->

    <?php the_content(); ?>

    <?php get_template_part('template-parts/newsletter'); ?>
</div><!-- .festival -->
</main>
<?php get_footer(); ?>
