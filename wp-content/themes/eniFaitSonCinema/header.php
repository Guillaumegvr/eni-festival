<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
<header class="header">
<div class="menu d-flex flex-md-row align-items-md-center justify-content-between m-3">
    <img id="myBtn" src="<?php echo get_template_directory_uri(); ?>/img/menu-principal.png" alt="Logo menu" style="width: 30px; height: 30px">
    <div>
        <h1 class="titre-menu">
            <a href="<?php echo esc_url(home_url('/')); ?>" title="Retour à la page principale">ENI</a>
        </h1>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <nav class="navigation-mobile" aria-label="Main Navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'menu-liens') ); ?>
                <span class="close">Fermer</span>
            </nav>
        </div>
    </div>
    <nav class="navigation-fullscreen" aria-label="Main Navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'menu-liens') ); ?>
    </nav>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</div>
</header>
