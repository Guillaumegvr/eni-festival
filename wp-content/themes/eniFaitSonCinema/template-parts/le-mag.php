
<section class="le-mag">
    <div class="section-title">
        <h2>LE MAG</h2>
    </div>
    <div class="post-cards">
        <?php
        $ArticlesQuery = new WP_Query([
            'post_type' => 'post', // Nous recherchons des articles ...
            'tag' => '', // Possibilité d'affiner le filtrage par les tags ...
            'orderby' => 'date', // Nous les classons par date de publication ...
            'order' => 'DESC', // Classement antéchronologique ...
            'posts_per_page' => 3 // On limite à 3 résultats ...
        ]);
        ?>
        <?php if ($ArticlesQuery->have_posts()) {
            while ($ArticlesQuery->have_posts()) {
                $ArticlesQuery->the_post();
                ?>
                <div class="post-card">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    <p><?php the_comments_navigation(); ?></p>
                    <p class="le-mag-the-category"><?php the_category(); ?></p>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                    <p class="author">Par <?php the_author(); ?></p>
                </div>
                <?php
            }
            wp_reset_postdata();
        } else {
            echo '<p>Aucun article trouvé.</p>';
        }
        ?>
    </div><!-- .post-cards -->
</section>