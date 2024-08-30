<?php
/**
 * Plugin Name: Reservation Manager
 * Description: Un plugin pour gérer les réservations du festival.
 * Version: 1.0
 * Author: Eni
 */

// Pour empêcher l'accès direct au fichier php
if (!defined('ABSPATH')) {
    exit;
}

// Nous allons créer la table à l'activation du plugin 
function reservation_manager_install() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'festivals';
    
    $charset_collate = $wpdb->get_charset_collate();
 
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        nom_ville varchar(255) NOT NULL,
        nb_places_disponible_total int NOT NULL, 
        nb_places_disponible_balcon int NOT NULL, 
        nb_places_disponible_zone int NOT NULL, 
        nb_places_disponible_PMR int NOT NULL, 
        prix_balcon decimal(10, 2) NOT NULL,
        prix_zone decimal(10, 2) NOT NULL,
        prix_PMR decimal(10, 2) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";
 
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'reservation_manager_install');

function reservation_manager_uninstall() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'festivals';
    $sql = "DROP TABLE IF EXISTS $table_name;";
    $wpdb->query($sql);
}
register_deactivation_hook(__FILE__, 'reservation_manager_uninstall');

// Nous allons ajouter un menu dans l'admin WordPress
function reservation_manager_menu() {
    add_menu_page(
        'Gestion des Reservations',
        'Reservations',
        'manage_options',
        'reservations_manager',
        'reservation_manager_page',
        'dashicons-tickets-alt',
        6
    );
}
add_action('admin_menu', 'reservation_manager_menu');

// Nous allons afficher la page de contenu
function reservation_manager_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'festivals';

    // Nous traitons les requêtes POST
    if (isset($_POST['new'])) {
        $wpdb->insert($table_name, [
            'nom_ville' => $_POST['nom_ville'],
            'nb_places_disponible_total' => $_POST['nb_places_disponible_total'],
            'nb_places_disponible_balcon' => $_POST['nb_places_disponible_balcon'],
            'nb_places_disponible_zone' => $_POST['nb_places_disponible_zone'],
            'nb_places_disponible_PMR' => $_POST['nb_places_disponible_PMR'],
            'prix_balcon' => $_POST['prix_balcon'],
            'prix_zone' => $_POST['prix_zone'],
            'prix_PMR' => $_POST['prix_PMR']
        ]);
    } elseif (isset($_POST['update'])) {
        $wpdb->update($table_name, [
            'nom_ville' => $_POST['nom_ville'],
            'nb_places_disponible_total' => $_POST['nb_places_disponible_total'],
            'nb_places_disponible_balcon' => $_POST['nb_places_disponible_balcon'],
            'nb_places_disponible_zone' => $_POST['nb_places_disponible_zone'],
            'nb_places_disponible_PMR' => $_POST['nb_places_disponible_PMR'],
            'prix_balcon' => $_POST['prix_balcon'],
            'prix_zone' => $_POST['prix_zone'],
            'prix_PMR' => $_POST['prix_PMR']
        ], ['id' => $_POST['id']]);
    } elseif (isset($_POST['delete'])) {
        $wpdb->delete($table_name, ['id' => $_POST['id']]);
    }

    // On récupère les données puis on construit notre tableau et notre formulaire
    $festivals = $wpdb->get_results("SELECT * FROM $table_name");
    ?>
    <div class="wrap">
        <h1>Gestion des Reservations</h1>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom de la ville</th>
                    <th>Nombre de Places Total</th>
                    <th>Nombre de Place Balcon</th>
                    <th>Prix Balcon</th>
                    <th>Nombre de Place Zone A & B</th>
                    <th>Prix Zone A & B</th>
                    <th>Nombre de Place Zone PMR</th>
                    <th>Prix Zone PMR</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($festivals as $festival): ?>
                    <tr>
                        <td><?= $festival->id; ?></td>
                        <td><?= $festival->nom_ville; ?></td>
                        <td><?= $festival->nb_places_disponible_total; ?></td>
                        <td><?= $festival->nb_places_disponible_balcon; ?></td>
                        <td><?= $festival->prix_balcon; ?></td>
                        <td><?= $festival->nb_places_disponible_zone; ?></td>
                        <td><?= $festival->prix_zone; ?></td>
                        <td><?= $festival->nb_places_disponible_PMR; ?></td>
                        <td><?= $festival->prix_PMR; ?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="id" value="<?= $festival->id; ?>"/>
                                <input type="submit" name="delete" value="Supprimer" class="button button-danger"/>
                                <input type="submit" name="edit" value="Modifier" class="button button-primary"/>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h2><?php echo isset($_POST['edit']) ? 'Modifier' : 'Ajouter'; ?> un Festival</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo isset($_POST['edit']) ? $_POST['id'] : ''; ?>"/>
            <input type="text" name="nom_ville" value="<?php echo isset($_POST['edit']) ? $_POST['nom_ville'] : ''; ?>" placeholder="Nom de la ville" required/>
            <input type="number" name="nb_places_disponible_total" value="<?php echo isset($_POST['edit']) ? $_POST['nb_places_disponible_total'] : ''; ?>" placeholder="Nombre de Places Total" required/>
            <input type="number" name="nb_places_disponible_balcon" value="<?php echo isset($_POST['edit']) ? $_POST['nb_places_disponible_balcon'] : ''; ?>" placeholder="Nombre de Places balcon" required/>
            <input type="number" step="0.01" name="prix_balcon" value="<?php echo isset($_POST['edit']) ? $_POST['prix_balcon'] : ''; ?>" placeholder="Prix balcon" required/>
            <input type="number" name="nb_places_disponible_zone" value="<?php echo isset($_POST['edit']) ? $_POST['nb_places_disponible_zone'] : ''; ?>" placeholder="Nombre de Places zone A&B" required/>
            <input type="number" step="0.01" name="prix_zone" value="<?php echo isset($_POST['edit']) ? $_POST['prix_zone'] : ''; ?>" placeholder="Prix zone A et B" required/>
            <input type="number" name="nb_places_disponible_PMR" value="<?php echo isset($_POST['edit']) ? $_POST['nb_places_disponible_PMR'] : ''; ?>" placeholder="Nombre de Places PMR" required/>
            <input type="number" step="0.01" name="prix_PMR" value="<?php echo isset($_POST['edit']) ? $_POST['prix_PMR'] : ''; ?>" placeholder="Prix places PMR" required/>
            <input type="submit" name="<?php echo isset($_POST['edit']) ? 'update' : 'new'; ?>" value="<?php echo isset($_POST['edit']) ? 'Mettre à Jour' : 'Ajouter'; ?>" class="button button-primary"/>
        </form>
    </div>
    <?php
}

function reservation_manager_shortcode($atts) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'festivals';
 
    // Récupérer les informations
    $festival = $wpdb->get_row($wpdb->prepare(
        "SELECT * FROM $table_name WHERE nom_ville = %s",
        $atts['nom']
    ));
 
    if ($festival) {
        ob_start();
        ?>
        <div class="festival-reservation">
            <div class="festival-reservation-ville">
                <h2><?php echo esc_html($festival->nom_ville); ?></h2>
                <p><?php echo esc_html($festival->nb_places_disponible_total); ?> places</p>
            </div>
            <div class="festival-reservation-tableau">
                <table>
                    <thead>
                        <tr>
                            <th>BALCON</th>
                            <th id="ab">ZONE A & B</th>
                            <th>PMR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span>DISPONIBILITE</span><br><?php echo esc_html($festival->nb_places_disponible_balcon); ?></td>
                            <td><?php echo esc_html($festival->nb_places_disponible_zone); ?></td>
                            <td><?php echo esc_html($festival->nb_places_disponible_PMR); ?></td>
                        </tr>
                        <tr>
                            <td><span>TARIF</span><br><?php echo number_format(esc_html($festival->prix_balcon), 0); ?>&#8364;</td>
                            <td><?php echo number_format(esc_html($festival->prix_zone), 0); ?>&#8364;</td>
                            <td><?php echo number_format(esc_html($festival->prix_PMR), 0); ?>&#8364;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        return ob_get_clean();
    } else {
        return "<p>Festival non trouvé</p>";
    }
}
add_shortcode('reservation_manager', 'reservation_manager_shortcode');
