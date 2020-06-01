<?php
$skills_data = get_post_meta($post->ID, 'skills_data', true);
extract($skills_data);

$title = str_replace(['<p>', '</p>'], '', get_the_content());
?>

<div class="item">
    <h3 class="level-title">    
    <?php the_title(); ?><span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="<?php echo $title; ?>"><i class="fas fa-info-circle"></i><?php echo $ap_skills_level; ?></span>
    </h3>
    <div class="level-bar">
        <div class="level-bar-inner" data-level="<?php echo $ap_skills_per_level; ?>%"></div>
    </div>
    <!--//level-bar-->
</div>
<!--//item-->