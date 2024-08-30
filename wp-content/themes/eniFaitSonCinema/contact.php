<?php
/*
Template Name: CONTACT
*/

get_header();
?>
<main>
    <div class="contact-titre">
        <div>
            <h1>Input Your Query</h1>
        </div>
        <div>
            <p>Besoin de nous transmettre un bug, un feedback,
                ou juste envie de dire bonjour ?</p>
            <p>Entrez votre message dans le champ de texte ci-dessous, appuyez sur 'Envoyer', et laissez la magie du réseau opérer.
                Nous sommes toujours prêts à déboguer, discuter, et faire
                de nouvelles connexions</p>
        </div>
    </div>

    <div class="about">
        <div class="entete-image-article mb-5">
            <?php the_post_thumbnail(); ?>
        </div>

        <?php the_content(); ?>
    </div>
    <?php get_template_part('template-parts/titre'); ?>
</main>

<?php
get_footer();
?>
