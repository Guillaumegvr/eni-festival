<?php get_header(); ?>
<main>
    <div class="article">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <article class="post">
                <h1><?php the_title(); ?></h1>
                <div class="entete-article">
                    <div class="entete-image-article">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="entete-meta">
                        <p>Par <?php the_author(); ?></p>
                        <div class="entete-date">
                            <?php the_date(); ?>
                        </div>
                    </div>
                </div>
                <div class="post__content">
                    <?php the_content(); ?>
                </div>
                <div class="liens-partage">
                    <div>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Facebook.png" alt="Logo Facebook">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Linkedin.png" alt="Logo Linkedin">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Reddit.png" alt="Logo reddit">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Mail.png" alt="Logo Mail">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/StackExhange.png" alt="Logo StackExhange">
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Github.png" alt="Logo Github">
                        </a>
                    </div>
                </div>
                <div class="post-navigation">
                    <div class="previous-post">
                        <?php previous_post_link( '%link', 'PRECEDENT' ); ?>
                    </div>
                    <div class="next-post">
                        <?php next_post_link( '%link', 'SUIVANT' ); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'template-parts/comments' ); ?>
        <?php get_template_part( 'template-parts/titre' ); ?>
        <?php get_template_part( 'template-parts/newsletter' ); ?>
</main>
<?php get_footer(); ?>
