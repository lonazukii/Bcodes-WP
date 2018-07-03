<?php
/**
 Template Name: index
 */
get_header();
?>
<div id="">
    <section id="service" class="service-content">
        <div class="container">
            <div class="row text-center">
                <div class="section-title wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                    <?php echo "<h2>".$opt_settings['service-title']."</h2>"; ?>
                    <span></span>
                    <?php echo "<p>".$opt_settings['service-details']."</p>"; ?><p></p>
                </div>

                <?php 
                foreach ($opt_settings['service-content'] as $conten) {
                    echo "
                    <div class='col-xs-12 col-sm-6 col-lg-4'>
                    <div class='single_service'>
                    <i class='".$conten ['url']."'></i>
                    <h4>".$conten ['title']."</h4>
                    <p>".$conten ['description']."</p>
                    </div>
                    </div>
                    ";
                }
                ?><!-- END COL-->
            </div><!-- END ROW-->
        </div><!-- END CONTAINER-->
    </section>

    <section class="buy_now">
        <div class="container text-center">
            <h3 class="buy_now_title">
                <?php echo $opt_settings['contact']; ?>
                <a href="#" class="page-scroll btn btn-default btn-promotion-bg" >Contact now</a>
            </h3>
        </div><!--- END CONTAINER -->
    </section>

    <section id="portfolio" class="portfolio section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="section-title text-center wow zoomIn title-portfolio">
                    <h2><?= $opt_settings['project-title'] ?></h2>
                    <span></span>
                    <p> <?= $opt_settings['project-desc'] ?> </p>
                </div>
                <?php foreach (get_posts(array("post_type" => 'work','post_status' => 'publish','numberposts'=> 6)) as $content) :?>
                    <?php global $post; $post_slug = $post->post_name; ?>
                        <div class='col-md-4 col-xs-12 no-padding'>
                            <div class='grid'>
                                <figure class='effect-sadie'>
                                    <img src='<?= get_the_post_thumbnail_url($content->ID)?>' class='img-responsive wp-post-image'>
                                    <figcaption>
                                        <h4><?= get_the_title($content->ID) ?></h4>
                                        <p><a href='<?= get_permalink($content->ID) ?>'>View Project</a></p>
                                    </figcaption>
                                </figure>
                            </div><!--- END GRID -->
                        </div><!--- END COL -->
                <?php endforeach; ?>

            </div><!--- END ROW -->

            <div class="portfolio_btn text-center">
                <a href="<?=home_url()?>/work" class="btn-pricing-bg">See More Work</a>
            </div>
        </div><!--- END CONTAINER-FLUID -->
    </section>

    <section id="testimonial" class="client-testimonial section-padding" style="background-image:
    url(<?= $opt_settings['bgtesti']['url'] ?>),linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.6))">
        <div class="container">
            <div class="row text-center">
                <div class="section-title  wow zoomIn">
                    <h2 class="section-title-white"><?php echo $opt_settings['title-testimonial'] ?></h2>
                    <span></span>
                    <p class="section-title-white"><?php echo $opt_settings['desc-testimonial']; ?></p>
                </div>
                <div class="row limit-w" style="overflow: hidden;">
                    <div class="testimoni-carousel owl-carousel owl-theme">
                        <?php $testimonials = get_posts(array("post_type"=>'testimonials',"post_status" => 'publish'));?>
                        <?php foreach ($testimonials as $testi) {
                            echo "
                            <div class='item-testi'>
                            <div class='col-sm-12'>
                            <div class='single_testimonial'>
                            <div class='testimonial_img'>
                            <img width='100' height='100' src='".wp_get_attachment_url(get_post_thumbnail_id($testi->ID),'thumbnail')."' class='img-testimonial img-responsive wp-post-image' alt=''>
                            </div>
                            <div class='testimonial_text'>
                            <p style='color:#fff;'>".$testi->post_content."</p>
                            <h3 style='color:#fff;' class='media-heading'>".$testi->post_title."</h3>";?>
                            <?php 
                            for ($i=0; $i < CFS()->get('rating',$testi->ID) ; $i++) { 
                                echo " <i style='color:#fdc900;' class='fa fa-star'></i> ";
                            }
                            echo"
                            </div>
                            </div>
                            </div>
                            </div>
                            ";
                        }?>
                    </div><!--- END CAROUSEL INNER -->
                </div><!--- END CAROUSEL SLIDE -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>

    <section id="team" class="our_team section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="section-title wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                    <h2><?php echo $opt_settings['title-founder'] ;?></h2>
                    <span></span>
                    <p><?php echo $opt_settings['desc-founder'] ;?></p>
                </div>
                <?php foreach ($lol = get_posts(array("post_type"=>'ourteam', "post_status" => 'publish', 'orderby' => 'date', 'order' => 'ASC')) as $team) {
                    echo "
                    <div class='col-md-3 col-sm-6 col-xs-12'>
                    <div class='single_team'>
                    <img src='".wp_get_attachment_url(get_post_thumbnail_id($team->ID),'thumbnail')."' class='img-fluid wp-post-image' alt=''> 
                    <h4>".$team->post_title."</h4>
                    <p>".$team->post_content."</p>
                    <div class='team_social'>
                    <ul>
                    <li><a href='#'><i class='fa fa-facebook '   style='background: #5d82d1 !important;'></i></a></li>
                    <li><a href='#'><i class='fa fa-twitter '    style='background: #40bff5 !important;'></i></a></li>
                    <li><a href='#'><i class='fa fa-google-plus' style='background: #eb5e4c !important;'></i></a></li>
                    <li><a href='#'><i class='fa fa-linkedin'    style='background: #238cc8 !important;'></i></a></li>
                    </ul>
                    </div>
                    </div>
                    </div>
                    ";
                } ?>
            </div><!-- END ROW -->
        </div><!-- END CONTAINER -->
    </section>

    <section id="partner" class="partner-logo section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2><?= $opt_settings['title-partner'] ?></h2>
                    <span></span>
                    <p><?= $opt_settings['desc-partner'] ?></p>
                </div>

                <div class="col-md-12">
                    <div class="partner wow fadeInRight owl-carousel owl-theme" style="opacity: 1; display: block; visibility: visible; animation-name: fadeInRight;">

                        <?php 
                        $id = explode( ",", $opt_settings['gallery-partner']);
                        foreach ($id as $partnerimg) {
                            $link = wp_get_attachment_url( $partnerimg );
                            echo "

                            <div class='item'>
                            <a href='#'>
                            <img src='".$link."' class='img-partner img-fluid img-responsive' alt=''>
                            </a>
                            </div>

                            ";
                        } ?>

                    </div>
                </div><!-- END COL  -->
            </div><!--END  ROW  -->
        </div><!-- END CONTAINER  -->
    </section>

    <section id="comment" class="contact_area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-title text-center wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                    <h2><?= $opt_settings['title-comment'] ?></h2>
                    <span></span>
                    <p><?= $opt_settings['desc-comment'] ?></p>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="contact">
                        <div id="contact-form">
                            <div role="form" class="wpcf7" id="wpcf7-f5-p7-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                            </div>
                        </div>
                    </div>
                </div><!-- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>

    <section class="work-schedule section-padding">
        <div class="container">
            <div class="wrap-columns">
                <div class="col-sm-12">
                    <div class="schedule">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_address text-center">
                                <div class="icons">
                                 <img src="<?= $opt_settings['icon-phone']['url']?>">
                                </div>
                                <?php foreach ($opt_settings['text-phone'] as $text) {
                                    echo"
                                       <p>$text</p>
                                    ";
                                }?>
                            </div>
                        </div><!-- END COL  -->

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_address text-center">
                                <div class="icons">
                                 <img src="<?= $opt_settings['icon-time']['url']?>">
                                </div>
                                <?php foreach ($opt_settings['text-time'] as $text) {
                                    echo"
                                       <p>$text</p>
                                    ";
                                }?>
                            </div>
                        </div><!-- END COL  -->

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_address text-center">
                                <div class="icons">
                                 <img src="<?= $opt_settings['icon-email']['url']?>">
                                </div>
                                <?php foreach ($opt_settings['text-email'] as $text) {
                                    echo"
                                       <p>$text</p>
                                    ";
                                }?>
                            </div>
                        </div><!-- END COL  -->

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_address text-center">
                                <div class="icons">
                                 <img src="<?= $opt_settings['icon-address']['url']?>">
                                </div>
                                <?php foreach ($opt_settings['text-address'] as $text) {
                                    echo"
                                       <p>$text</p>
                                    ";
                                }?>
                            </div>
                        </div><!-- END COL  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="maps"><?= $opt_settings['adress'] ?></section>
</div>
<?php
get_footer();
