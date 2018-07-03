<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bcodes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		// if ( is_singular() ) :
		// 	the_title( '<h1 class="entry-title">', '</h1>' );
		// else :
		// 	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		// endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				//bcodes_posted_on();
				//bcodes_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	<div class="container" style="padding-top: 30px;">
		<div class="row">
			<div class="col-md-8">
				<?php bcodes_post_thumbnail(); ?>	
			</div>
			<div class="col-md-4">
				<div class="entry-content">
					<div class="about-project">
						<h4> About Project </h4>
							<?php
								the_content( sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bcodes' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									get_the_title()
								) );

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bcodes' ),
									'after'  => '</div>',
								) );
							?>
					</div>
					<div class="about-project">
						<h4> Project Details </h4>

						<?php 
						$field = get_posts(array(get_the_ID(),"post_type"=>'work'));
						$link = get_the_terms($field->ID, 'url')[0]->name;
							echo "
							<ul>
							<li> 
								<i class='fa fa-user'></i> 
								<b> Client :</b> 
								".get_the_terms($field->ID, 'client')[0]->name."
							</li>
							<li> 
								<i class='fa fa-clock-o'></i> 
								<b> Project Date :</b> 
								".get_the_time('F j, Y')."
							</li>
							<li> 
								<i class='fa fa-folder'></i> 
								<b> Project Url :</b> 
								<a href='http://$link'>	$link </a>
							</li>
						</ul>	";
						
						;
						?>
					</div>
					<a style='color:#fff;' href="http://<?= $link ?>" class='btn btn-pricing-bg'> Live Project </a>
				</div><!-- .entry-content -->
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class='text-center'>
			<h2> Related Project </h2>	
		</div>
		<div class="row">
			<?php foreach (get_posts(array(
				'post_type' => 'work',
				'post_status' => 'publish',
				'numberposts' => 3,
				'post__not_in' => array(get_the_ID()))
			) as $content) :?>
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
		</div>
	</div>

	<footer class="entry-footer">
		<?php //bcodes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
