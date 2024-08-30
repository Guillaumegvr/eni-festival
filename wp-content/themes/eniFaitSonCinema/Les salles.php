<?php
/*
Template Name: Les Salles
*/

get_header();
?>
<main>
    <div class="contact-titre">
        <h1>LES SALLES</h1>
    </div><!-- .contact-titre -->

    <div class="lesSalles">
        <div class="entete-image-article mb-5">
            <?php the_post_thumbnail(); ?>
        </div><!-- .entete-image-article -->

        <?php the_content(); ?>

        <div class="salle-cinema">
            <div class="salle-titre">
                <h2><?php the_field('Salle-De-Cinema-Nantes-titre'); ?></h2>
                <p><?php the_field('Salle-De-Cinema-Nantes-SousTitre'); ?></p>
            </div><!-- .salle-titre -->
            <div class="salle-description">
                <p><?php the_field('Salle-De-Cinema-Nantes-presentation'); ?></p>
                <p><?php the_field('salle-de-cinema-nantes-places-places'); ?></p>
                <button class="button-outline-blue">Tarif/disponibilités</button>
            </div><!-- .salle-description -->
            <div class="salle-image">
                <?php
                $imageID = get_field('salle-de-cinema-nantes-photo');
                $size = 'medium';
                if ($imageID) {
                    echo wp_get_attachment_image($imageID, $size);
                }
                ?>
            </div><!-- .salle-image -->
        </div><!-- .salle-cinema -->

        <!-- Répétition pour d'autres salles-cinema -->

        <div class="salle-cinema">
            <div class="salle-titre">
                <h2><?php the_field('salle-de-cinema-quimper-titre'); ?></h2>
                <p><?php the_field('salle-de-cinema-quimper-sous-titre'); ?></p>
            </div><!-- .salle-titre -->
            <div class="salle-description">
                <p><?php the_field('salle-de-cinema-quimper-presentation'); ?></p>
                <p><?php the_field('salle-de-cinema-quimper-places'); ?></p>
                <button class="button-outline-blue">Tarif/disponibilités</button>
            </div><!-- .salle-description -->
            <div class="salle-image">
                <?php
                $imageID = get_field('salle-de-cinema-quimper-photo');
                $size = 'medium';
                if ($imageID) {
                    echo wp_get_attachment_image($imageID, $size);
                }
                ?>
            </div><!-- .salle-image -->
        </div><!-- .salle-cinema -->

        <!-- Répétition pour d'autres salles-cinema -->

        <div class="salle-cinema">
            <div class="salle-titre">
                <h2><?php the_field('salle-de-cinema-niort-titre'); ?></h2>
                <p><?php the_field('salle-de-cinema-niort-sous-titre'); ?></p>
            </div><!-- .salle-titre -->
            <div class="salle-description">
                <p><?php the_field('salle-de-cinema-niort-presentation'); ?></p>
                <p><?php the_field('salle-de-cinema-niort-places'); ?></p>
                <button class="button-outline-blue">Tarif/disponibilités</button>
            </div><!-- .salle-description -->
            <div class="salle-image">
                <?php
                $imageID = get_field('salle-de-cinema-niort-photo');
                $size = 'medium';
                if ($imageID) {
                    echo wp_get_attachment_image($imageID, $size);
                }
                ?>
            </div><!-- .salle-image -->
        </div><!-- .salle-cinema -->

        <!-- Répétition pour d'autres salles-cinema -->

        <div class="salle-cinema">
            <div class="salle-titre">
                <h2><?php the_field('salle-de-cinema-rennes-titre'); ?></h2>
                <p><?php the_field('salle-de-cinema-rennes-sous-titre'); ?></p>
            </div><!-- .salle-titre -->
            <div class="salle-description">
                <p><?php the_field('salle-de-cinema-rennes-presentation'); ?></p>
                <p><?php the_field('salle-de-cinema-rennes-places'); ?></p>
                <button class="button-outline-blue">Tarif/disponibilités</button>
            </div><!-- .salle-description -->
            <div class="salle-image">
                <?php
                $imageID = get_field('salle-de-cinema-rennes-photo');
                $size = 'medium';
                if ($imageID) {
                    echo wp_get_attachment_image($imageID, $size);
                }
                ?>
            </div><!-- .salle-image -->
        </div><!-- .salle-cinema -->

        <section class="le-mag">
            <div class="section-title">
                <h2>LE MAG</h2>
            </div><!-- .section-title -->
            <div class="post-cards">
                <?php
                $ArticlesQuery = new WP_Query([
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'posts_per_page' => 3
                ]);

                if ($ArticlesQuery->have_posts()) {
                    while ($ArticlesQuery->have_posts()) {
                        $ArticlesQuery->the_post();
                        ?>
                        <div class="post-card">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                            <p><?php the_comments_navigation(); ?></p>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?></p>
                            <p class="author"><?php the_author(); ?></p>
                        </div><!-- .post-card -->
                        <?php
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>Aucun article trouvé.</p>';
                }
                ?>
            </div><!-- .post-cards -->
        </section><!-- .le-mag -->

        <?php get_template_part('template-parts/titre'); ?>
    </div><!-- .lesSalles -->
</main>
<?php
get_footer();
?>
