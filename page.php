<?php get_header(); ?>

<div class="container sections-wrapper">
    <div class="row">
        <div class="primary col-lg-12">
            <section class="about section">
                <div class="section-inner shadow-sm rounded">
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : ?>
                                <?php the_post(); ?>

                                <div class="post_content">
                                    <?php the_content(); ?>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <!--//section-->
        </div>
    </div>
</div>

<?php get_footer(); ?>