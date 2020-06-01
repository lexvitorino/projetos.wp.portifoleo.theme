<?php get_header(); ?>

<article class="mb-4 <?php post_class(); ?>">
    <div class="item row">
        <?php if (has_post_thumbnail()) : ?>
            <a class="col-md-4 col-12" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('small', array('class' => 'img-fluid project-image rounded shadow-sm')); ?>
            </a>
        <?php endif; ?>
        <div class="desc col-md-8 col-12">
            <h3 class="title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <p class="mb-2">
                <?php the_excerpt(); ?>
            </p>
            <p>
                <a href="<?php the_permalink(); ?>">
                    <i class="fas fa-external-link-alt"></i> Veja mais
                </a>
            </p>
        </div>
        <!--//desc-->
    </div>
    <!--//item-->
</article>

<?php get_footer(); ?>