<?php get_header(); ?>

<?php
$who_are = get_theme_mod('ap_who_are');
$location = get_theme_mod('ap_location');
$primary_email = get_theme_mod('ap_primary_email');
$link_site = get_theme_mod('ap_link_site');

?>

<div class="container sections-wrapper">
    <div class="row">
        <div class="primary col-lg-8 col-12">
            <section class="about section">
                <div class="section-inner shadow-sm rounded">
                    <h2 class="heading">Quem sou eu?</h2>
                    <div class="content">
                        <p><?php echo $who_are; ?></p>
                    </div>
                    <!--//content-->
                </div>
                <!--//section-inner-->
            </section>
            <!--//section-->

            <?php
            $last_project_section = get_theme_mod('ap_last_project_section');
            $last_project_image = get_theme_mod('ap_last_project_image');
            $last_project_title = get_theme_mod('ap_last_project_title');
            $last_project_comment = get_theme_mod('ap_last_project_comment');
            $last_project_btn_title = get_theme_mod('ap_last_project_btn_title');
            $last_project_link = get_theme_mod('ap_last_project_link');
            ?>

            <section class="latest section">
                <div class="section-inner shadow-sm rounded">
                    <h2 class="heading"><?php echo $last_project_section; ?></h2>
                    <div class="content">
                        <div class="item featured text-center">
                            <div class="featured-image has-ribbon">
                                <a href="<?php echo $last_project_link; ?>" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="<?php echo $last_project_image; ?>" alt="<?php echo $last_project_title; ?>" />
                                </a>
                                <div class="ribbon">
                                    <div class="text">New</div>
                                </div>
                            </div>
                            <h3 class="title mb-3">
                                <a href="<?php echo $last_project_link; ?>" target="_blank">
                                    <?php echo $last_project_title; ?>
                                </a>
                            </h3>
                            <div class="desc text-left">
                                <p>
                                    <?php echo $last_project_comment; ?>
                                </p>
                            </div>
                            <!--//desc-->
                            <a class="btn btn-cta-secondary" href="<?php echo $last_project_link; ?>" target="_blank"><i class="fas fa-thumbs-up"></i> <?php echo $last_project_btn_title; ?></a>
                        </div>
                        <!--//item-->
                        <?php if (have_posts()) : ?>
                            <hr class="divider" />
                            <?php while (have_posts()) : ?>
                                <?php the_post(); ?>
                                <?php get_template_part('template_parts/post'); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!--//content-->
                </div>
                <!--//section-inner-->
            </section>
            <!--//section-->

            <section class="experience section">
                <div class="section-inner shadow-sm rounded">
                    <h2 class="heading">Experiências Profissionais</h2>
                    <div class="content">
                        <?php
                        $ap_query = new WP_Query(array(
                            'post_type' => 'work_experiences'
                        ));
                        if ($ap_query->have_posts()) {
                            while ($ap_query->have_posts()) {
                                $ap_query->the_post();

                                get_template_part('template_parts/work_experiences_post');
                            }
                        }
                        wp_reset_postdata();
                        ?>
                        <!--//item-->
                    </div>
                    <!--//content-->
                </div>
                <!--//section-inner-->
            </section>
            <!--//section-->

        </div>
        <!--//primary-->
        <div class="secondary col-lg-4 col-12">
            <aside class="info aside section">
                <div class="section-inner shadow-sm rounded">
                    <h2 class="heading sr-only">Basic Information</h2>
                    <div class="content">
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-map-marker-alt"></i><span class="sr-only">Localização:</span><?php echo $location; ?>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i><span class="sr-only">Email Principal:</span><?php echo $primary_email; ?>
                            </li>
                            <?php if ($link_site) : ?>
                                <li>
                                    <a href="<?php echo $link_site; ?>" target="_blank">
                                        <i class="fas fa-link"></i><span class="sr-only">Website:</span><?php echo $link_site; ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!--//content-->
                </div>
                <!--//section-inner-->
            </aside>
            <!--//aside-->

            <aside class="skills aside section">
                <div class="section-inner shadow-sm rounded">
                    <h2 class="heading">Skills</h2>
                    <div class="content">
                        <p class="intro">
                            Esses são alguns conhecimentos que adiquiri neste pequeno
                            tempo trabalhando com desenvolvimento de sistemas nesses
                            útimos 15 anos
                        </p>

                        <div class="skillset">
                            <?php
                            $ap_query = new WP_Query(array(
                                'post_type' => 'skills'
                            ));
                            if ($ap_query->have_posts()) {
                                while ($ap_query->have_posts()) {
                                    $ap_query->the_post();

                                    get_template_part('template_parts/skills_post');
                                }
                            }
                            wp_reset_postdata();
                            ?>

                            <p>
                                <a class="more-link" href="<?php echo get_theme_mod('ap_linkedin'); ?>" target="_blank"><i class="fas fa-external-link-alt"></i>Mais no
                                    Linkedin</a>
                            </p>
                        </div>
                    </div>
                    <!--//content-->
                </div>
                <!--//section-inner-->
            </aside>
            <!--//section-->

            <?php
            $testimonials_name = get_theme_mod('ap_testimonials_name');
            $testimonials_occupation = get_theme_mod('ap_testimonials_occupation');
            $testimonials_company = get_theme_mod('ap_testimonials_company');
            $testimonials_comment = get_theme_mod('ap_testimonials_comment');
            $testimonials_linkedin = get_theme_mod('ap_testimonials_linkedin');
            $testimonials_github = get_theme_mod('ap_testimonials_github');
            ?>

            <?php if ($testimonials_name) : ?>
                <aside class="testimonials aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Recomendações</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">
                                    <p>
                                        <i class="fas fa-quote-left"></i><?php echo $testimonials_comment; ?>
                                    </p>
                                </blockquote>
                                <p class="source">
                                    <span class="name"><?php echo $testimonials_name; ?></span><br /><span class="title"><?php echo $testimonials_occupation; ?> <?php echo "no " . $testimonials_company; ?></span>
                                </p>
                            </div>
                            <!--//item-->
                            <?php if ($testimonials_linkedin) : ?>
                                <p>
                                    <a class="more-link" href="<?php echo $testimonials_linkedin; ?>" target="_blank"><i class="fas fa-external-link-alt"></i>Mais no Linkedin</a>
                                </p>
                            <?php endif; ?>
                            <?php if ($testimonials_github) : ?>
                                <p>
                                    <a class="more-link" href="<?php echo $testimonials_github; ?>"><i class="fas fa-external-link-alt"></i>Mais no Github</a>
                                </p>
                            <?php endif; ?>
                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
            <?php endif; ?>
            <!--//section-->

            <aside class="education aside section">
                <div class="section-inner shadow-sm rounded">
                    <h2 class="heading">Educação</h2>
                    <div class="content">
                        <div class="item">
                            <h3 class="title">
                                <i class="fas fa-graduation-cap"></i> Ciências da Computação
                            </h3>
                            <h4 class="university">
                                Universidade Cruzeiro do Sul
                                <span class="year">(2006-2010)</span>
                            </h4>
                        </div>
                        <!--//item-->
                    </div>
                    <!--//content-->
                </div>
                <!--//section-inner-->
            </aside>
            <!--//section-->

            <aside class="languages aside section">
                <div class="section-inner shadow-sm rounded">
                    <h2 class="heading">Línguas</h2>
                    <div class="content">
                        <ul class="list-unstyled">
                            <li class="item">
                                <span class="title"><strong>Português:</strong></span>
                                <span class="level">Lingua Nativa <br class="visible-xs" /><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                                </span>
                            </li>
                            <!--//item-->
                            <li class="item">
                                <span class="title"><strong>Inglês:</strong></span>
                                <span class="level">Conhecimento técnico
                                    <br class="visible-sm visible-xs" />
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </span>
                            </li>
                            <!--//item-->
                        </ul>
                    </div>
                    <!--//content-->
                </div>
                <!--//section-inner-->
            </aside>
            <!--//section-->
        </div>
        <!--//secondary-->
    </div>
    <!--//row-->
</div>
<!--//masonry-->

<?php get_footer(); ?>