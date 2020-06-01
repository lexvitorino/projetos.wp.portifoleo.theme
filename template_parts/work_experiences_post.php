<?php
$work_experiences_data = get_post_meta($post->ID, 'work_experiences_data', true);
extract($work_experiences_data);
?>

<div class="item">
    <h3 class="title">
        <?php the_title(); ?> -
        <span class="place"><a href="<?php echo $ap_work_experiences_site; ?>"><?php echo $ap_work_experiences_company; ?></a></span>
        <span class="year">(<?php echo $ap_work_experiences_start; ?> - <?php echo ($ap_work_experiences_stop == 0 ? 'Até o momento' : $ap_work_experiences_stop); ?>)</span>
    </h3>
    <p>
        <?php the_content(); ?>
    </p>
</div>