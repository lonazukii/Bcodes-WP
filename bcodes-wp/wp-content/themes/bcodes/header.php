<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bcodes
 */
global $opt_settings;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" href="<?= $opt_settings['ico']['url'] ?>">
    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" <?php body_class(); ?>>

<nav class="navbar navbar-dark navbar-expand-lg fixed-top navbar-default menu-top">
    <div class="container">
        <a class="navbar-brand" href="<?= home_url() ?>">
            <img src="<?php echo $opt_settings['logo']['url'] ?>" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php            
                wp_nav_menu( 
                    array(
                        'theme_location' => 'menu-1',
                        'container' => 'ul',
                        'menu_class' => 'sf-menu navbar-nav ml-auto',
                        'menu_id' => 'primary-menu',
                    )
                );
            ?>
        </div>

    </div>
</nav>

<?php if (is_front_page()): ?>
<div id="home" class="carousel" data-ride="carousel">
        <div class="carousel-inner">
                <?php $index = 0 ?>
            <?php foreach ($opt_settings['slide-top'] as $field): ?>
                <div class='carousel-item <?= ($index == 0) ? 'active':''; ?>'>
                    <div class='d-block w-100'>
                        <span class='d-block w-100 animated fadeInDown' style="background-image: url('<?= $field['image']?>');
                        height:100vh;background-position: center center; background-size: cover;">
                        </span>
                        <div class="container" style="margin-top: -710px;">
                            <?php 
                                if ($index == 0) {
                                    echo "
                                        <div class = 'text-head' style='text-align:left;'>
                                            <h2 class='animated fadeIn'>".$field['title']."</h2>
                                            <h3 class='animated fadeInLeft'>".$field['description']."</h3>
                                            <a class='animated fadeInUp btn btn-default btn-promotion-bg' style='margin:0;'> More Info </a>
                                        </div>
                                    ";
                                }
                                else if ($index == 1) {
                                    echo "
                                        <div class = 'text-head' style='text-align:right;'>
                                            <h2 class='animated fadeIn'>".$field['title']."</h2>
                                            <h3 class='animated fadeInLeft'>".$field['description']."</h3>
                                            <a class='animated fadeInUp btn btn-default btn-promotion-bg' style='margin:0;'> More Info </a>
                                        </div>
                                    ";
                                }
                                else if ($index == 2) {
                                    echo "
                                        <div class = 'text-head' style='text-align:center;'>
                                            <h2 class='animated fadeIn'>".$field['title']."</h2>
                                            <h3 class='animated fadeInDown'>".$field['description']."</h3>
                                            <a class='animated fadeInUp btn btn-default btn-promotion-bg' style='margin:0;'> More Info </a>
                                        </div>
                                    ";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php $index++; ?>
            <?php endforeach; ?>
            <?php foreach ($opt_settings['slide-top'] as $field): ?>
                <div class='carousel-item'>
                    <div class='d-block w-100'>
                        <span class='d-block w-100 animated fadeIn' style="background-image: url('<?= $field['image']?>');
                        min-height:700px;background-position: center center; background-size: cover;">
                        </span>
                        <div class="container" style="margin-top: -710px;">
                            <?php 
                                if ($index == 3) {
                                    echo "
                                        <div class = 'text-head' style='text-align:left;'>
                                            <h2 class='animated fadeIn'>".$field['title']."</h2>
                                            <h3 class='animated fadeInLeft'>".$field['description']."</h3>
                                            <a class='animated fadeInUp btn btn-default btn-promotion-bg' style='margin:0;'> More Info </a>
                                        </div>
                                    ";
                                }
                                else if ($index == 4) {
                                    echo "
                                        <div class = 'text-head' style='text-align:right;'>
                                            <h2 class='animated fadeIn'>".$field['title']."</h2>
                                            <h3 class='animated fadeInLeft'>".$field['description']."</h3>
                                            <a class='animated fadeInUp btn btn-default btn-promotion-bg' style='margin:0;'> More Info </a>
                                        </div>
                                    ";
                                }
                                else if ($index == 5) {
                                    echo "
                                        <div class = 'text-head' style='text-align:center;'>
                                            <h2 class='animated fadeIn'>".$field['title']."</h2>
                                            <h3 class='animated fadeInDown'>".$field['description']."</h3>
                                            <a class='animated fadeInUp btn btn-default btn-promotion-bg' style='margin:0;'> More Info </a>
                                        </div>
                                    ";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php $index++; ?>
            <?php endforeach; ?>
        </div>
        <div class="left-arrow-wrapper">
            <div class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </div>
        </div>
        <div class="right-arrow-wrapper">
            <div class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </div>
        </div>
    </div>
</div>
<?php endif ?>
<?php if (!is_front_page()):?>
    <div class="overlay">
        <div class="container">
            <div class="section-top-title" style="color: #fff !important;">
                <h2 style='color: #fff'> <?php global $post;the_title() ?> </h2>
                <h6 style='color: #fff; font-weight: 100;'> 
                    <a style='color: #fff' href="<?=home_url();?>">Home</a> 
                    / 
                    <a style='color: #fff'> <?= the_title(); ?></a> 
                </h6>
            </div>
        </div>
    </div>
<?php endif ?>

