<?php get_header(); ?>
<main>

    <?php
    // identifiant photo dans l'URL
    $slug = get_query_var('projet');

    // critères recherche
    $args = [
        'post_type' => 'projet',
        'name' => $slug,
        'posts_per_page' => 1
    ];

    // Requête database wordpress 
    $custom_query = new WP_Query($args);
    if ($custom_query->have_posts()):
        while ($custom_query->have_posts()):
            $custom_query->the_post();
            //les compétences
            $competences = wp_get_post_terms(get_the_ID(), 'competence');
            $url_github = get_field('lien_vers_le_code');
            $description = get_field('description');
            ?>

            <article id="projet">
                <div class="projet-details">
                    <div class="projet-image">
                        <?php the_post_thumbnail('full') ?>
                    </div>
                    <div class="projet-header">
                        <h2><?php echo the_title() ?></h2>
                        <div class="projet-tech">
                            <h3>Compétences utilisées :</h3>
                            <div class="competences">
                                <?php foreach ($competences as $competence) {
                                    echo '<span class="competence">' . esc_html($competence->name) . '</span>';
                                } ?>
                            </div>
                        </div>
                        <?php if (!empty($url_github)) { ?>
                        <div class="projet-lien-github">
                            <h3>Code source :</h3>
                            <a href="<?php echo $url_github ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/github.svg' ?>"
                                    alt="Logo github" />Voir le repository Github</a>
                        </div>
                        <?php } ?>
                    </div>

                </div>
                <div class="projet-description">
<?php echo $description ?>
                </div>



            </article>
            <?php
        endwhile;
        wp_reset_postdata();
    endif;

    ?>
</main>
<?php get_footer(); ?>