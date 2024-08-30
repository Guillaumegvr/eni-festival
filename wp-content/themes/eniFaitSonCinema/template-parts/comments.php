<div class="commentaire">
<?php
if ( post_password_required() ) {
    return;
}

if ( have_comments() ) : ?>
    <h3 class="comments-title">Debug & Discuss</h3>

    <ol class="comment-list">
        <?php
        wp_list_comments( array(
            'style'      => 'ol',
            'short_ping' => true,
        ) );
        ?>
    </ol>

    <?php
    the_comments_navigation();

    if ( ! comments_open() ) :
        ?>
        <p class="no-comments"><?php _e( 'Les commentaires sont fermés.', 'votre-theme' ); ?></p>
        <?php
    endif;

endif;

$commenter = wp_get_current_commenter();
$fields = array(
    'author' => '</div><div class="fields"><p class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"  placeholder="NOM*" /></p>',
    'email'  => '<p class="comment-form-email"><input id="email" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '"  placeholder="EMAIL*" /></p>',
    'url'    => '<p class="comment-form-url"><input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="SITE WEB" /></p></div></div>', // La fermeture d'un div existante ici est conservée
);

// Ajout d'une nouvelle div pour équilibrer les balises
$comments_args = array(
    'title_reply'          => __( 'DEBUG & DISCUSS', 'votre-theme' ),
    'comment_notes_after'  => '',
    'label_submit'         => __( 'FEEDBACK', 'votre-theme' ),
    'fields'               => $fields,
    'comment_field'        => '<div class="container-comments"><div class="comments-full"><div class="comments-textarea"><p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="' . _x( 'Écrivez votre commentaire ici...', 'placeholder', 'votre-theme' ) . '" aria-required="true"></textarea></p></div>',
);

comment_form( $comments_args );

?>
</div>
