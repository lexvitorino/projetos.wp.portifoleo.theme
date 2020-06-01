<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <?php wp_head(); ?>
</head>

<?php 
$url = get_theme_mod('ap_foto'); 
$url = wp_get_attachment_image_src($url);
$name = get_theme_mod('ap_name');
$option_work = get_theme_mod('ap_option_work');
$btn_contact = get_theme_mod('ap_btn_contact');
?>

<body <?php body_class(); ?>>
    <!-- ******HEADER****** -->
    <header class="header">
        <div class="container clearfix">
            <a href="/">
                <img class="profile-image img-fluid float-left rounded-circle" src="<?php echo $url[0]; ?>" alt="<?php $name ?>" />
            </a>
            <div class="profile-content float-left">
                <h1 class="name"><?php echo $name; ?></h1>
                <h2 class="desc textoTransition">Web App Developer</h2>
                <ul class="social list-inline">
                    <?php if (get_theme_mod('ap_linkedin')) : ?>
                        <li class="list-inline-item">
                            <a href="<?php echo get_theme_mod('ap_linkedin'); ?>" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('ap_github')) : ?>
                        <li class="list-inline-item">
                            <a href="<?php echo get_theme_mod('ap_github'); ?>" target="_blank">
                                <i class="fab fa-github-alt"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <!--//profile-->
            <a class="btn btn-cta-primary float-right" href="https://themes.3rdwavemedia.com/" target="_blank"><i class="fas fa-paper-plane"></i> <?php echo $btn_contact; ?></a>
        </div>
        <!--//container-->
    </header>
    <!--//header-->