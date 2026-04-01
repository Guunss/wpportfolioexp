<?php get_header(); ?>
<main>
    <section id="accueil">
        <div class="accueil-texte">
            <p class="intro">Bonjour, je suis</p>
            <h1 class="tIntro">Gudrun Jans</h1>
            <h2>Développeur WordPress</h2>
            <p class="description">Je crée des interfaces modernes et performantes</p>

            <div class="accueil-boutons">
                <a href="#projets" class="btn btn-primary">Voir mes projets</a>
                <a href="#contact" class="btn btn-secondary">Me contacter</a>
            </div>
        </div>

        <div class="accueil-image">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/developpeuse.png' ?>"
                alt="image développeuse">
        </div>
    </section>

    <section id="projets">
        <h2 class="projets-titre">Mes réalisations</h2>

        <div class="swiper-container-wrapper">
            <div class="swiper">
                <div class="swiper-wrapper projets-container">

                    <?php
                    $projets = new WP_Query(array(
                        'post_type' => 'projet',
                        'orderby' => 'date',
                        'order' => 'ASC',
                    ));

                    if ($projets->have_posts()):
                        while ($projets->have_posts()):
                            $projets->the_post();
                            ?>

                            <div class="swiper-slide">
                                <article class="projet">
                                    <a href="<?php echo get_permalink() ?>">
                                        <div class="projets-image">
                                            <?php the_post_thumbnail('medium'); ?>

                                            <div class="projets-content">
                                                <h3><?php the_title(); ?></h3>
                                                <?php the_field('description_courte'); ?>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata();
                    else:
                        echo 'Aucun projet !';
                    endif;
                    ?>

                </div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section> <!-- ✅ TRÈS IMPORTANT -->

    <section id="competences">
        <div class="container">

            <h2 class="competences-titre">Mes compétences</h2>

            <h3 class="competences-sous-titre">Compétences techniques</h3>

            <div class="competences-grid">
                <div class="competence-card">
                    <div class="icon">WP</div>
                    <h4>WordPress</h4>
                    <p>Thèmes, ACF, CPT, intégration</p>
                </div>

                <div class="competence-card">
                    <div class="icon">HTML/CSS</div>
                    <h4>HTML / CSS</h4>
                    <p>Flexbox, Grid, responsive design</p>
                </div>

                <div class="competence-card">
                    <div class="icon">JS</div>
                    <h4>JavaScript</h4>
                    <p>Interactions, DOM</p>
                </div>
            </div>

            <h3 class="competences-sous-titre">Soft skills</h3>

            <div class="competences-grid">
                <div class="competence-card">
                    <div class="icon">💡</div>
                    <h4>Autonomie</h4>
                    <p>Créative et indépendante</p>
                </div>

                <div class="competence-card">
                    <div class="icon">📋</div>
                    <h4>Organisation</h4>
                    <p>Structurée et efficace</p>
                </div>

                <div class="competence-card">
                    <div class="icon">💬</div>
                    <h4>Communication</h4>
                    <p>Trilingue, claire et à l’écoute</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Pour une information, un devis, contactez-moi !</h2>
        <?php echo do_shortcode('[contact-form-7 id="943c207" title="Formulaire de contact 1"]'); ?>
    </section>
</main>
<?php get_footer(); ?>