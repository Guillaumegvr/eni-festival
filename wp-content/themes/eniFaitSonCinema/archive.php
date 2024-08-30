<?php
/*
Template Name: Le Mag
*/

get_header();
?>
<main>
    <div class="contact-titre">
        <h1>LE MAG</h1>
        <p>Le mag qui fusionne cinéma et code ! </p>
        <p>À l’occasion de notre festival ENI CODE, plongez dans l’univers où la magie du 7e art rencontre l’innovation numérique. Ici, nous célébrons les rencontres inattendues entre la créativité cinématographique et la précision du développement. Découvrez des interviews exclusives avec des réalisateurs et développeurs qui transforment leurs passions en œuvres d'art, où l’algorithme devient un partenaire de création.</p>
        <p>À chaque édition, "Le Mag" vous emmène dans les coulisses de films où les effets spéciaux sont aussi aboutis que les lignes de code, et où les outils numériques redéfinissent le storytelling. Suivez les récits fascinants de créateurs qui codent leurs visions cinématographiques et explorez comment les technologies de pointe influencent chaque aspect de la production.</p>
        <p>Nous vous invitons à voir le cinéma sous un nouvel angle, où chaque pixel compte. Préparez-vous à une immersion totale dans un festival aussi décalé qu’innovant, où l’art et la technologie se rencontrent pour créer des expériences uniques. "Pixel Press" est votre passeport pour un voyage au cœur d'un festival où l'avenir du cinéma se dessine pixel par pixel.</p>
    </div>

    <div class="le-mag">
        <table>
            <thead>
            <tr>
                <th><p>TITRE</p></th>
                <th><p>CATEGORIE/DESCRIPTION</p><span class="fleche-haut">&#x25B2;</span><span class="fleche-bas">&#x25BD;</span></th>
            </tr>
            </thead>
            <tbody>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <tr>
                        <td class="table-mag-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                        <td>
                            <p><?php the_category(', '); ?></p>
                            <p><?php the_excerpt(); ?></p>
                        </td>
                        <td class="fleche"><a href="<?php the_permalink(); ?>">&#x2794;</a></td>
                    </tr>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <tr><td colspan="3">Aucun article trouvé.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
        <?php get_template_part('template-parts/newsletter'); ?>
    </div>
</main>
<?php get_footer(); ?>
