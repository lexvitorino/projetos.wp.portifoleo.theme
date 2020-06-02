<?php
$work_experiences_data = get_post_meta($post->ID, 'work_experiences_data', true);
extract($work_experiences_data);

$ap_work_experiences_site = !empty($ap_work_experiences_site) ? $ap_work_experiences_site : "";
$ap_work_experiences_company = !empty($ap_work_experiences_company) ? $ap_work_experiences_company : "";
$ap_work_experiences_start = !empty($ap_work_experiences_start) ? $ap_work_experiences_start : 0;
$ap_work_experiences_stop = !empty($ap_work_experiences_stop) ? $ap_work_experiences_stop : 0;

$linkSite = !empty($ap_work_experiences_site) ?  '<a href="'.  $ap_work_experiences_site . '">' . $ap_work_experiences_company . '</a>' : $ap_work_experiences_company;
?>

<div class="item">
    <h3 class="title">
        <?php the_title(); ?> -
        <span class="place"><?php echo $linkSite ?></span>
        <span class="year">(<?php echo $ap_work_experiences_start; ?> - <?php echo ($ap_work_experiences_stop == 0 ? 'Até o momento' : $ap_work_experiences_stop); ?>)</span>
    </h3>
    <p>
        <?php the_content(); ?>
    </p>
</div>