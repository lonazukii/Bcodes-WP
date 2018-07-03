<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bcodes
 */

get_header();
?>
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
                <a href="#" class="btn-pricing-bg">See More Work</a>
            </div>
        </div><!--- END CONTAINER-FLUID -->
    </section>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
