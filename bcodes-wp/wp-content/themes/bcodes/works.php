<?php
/**
 Template Name: Works
 */
 get_header();
?>
<section id="portfolio" class="portfolio">
        <div class="container-fluid">
            <div class="row">
                <?php foreach (get_posts(array("post_type" => 'work','nopaging' => true)) as $content) :?>
                    <?php global $post; $post_slug = $post->post_name; ?>
                        <div class='col-md-4 col-xs-12 no-padding'>
                            <div class='grid'>
                                <figure class='effect-sadie'>
                                    <img src='<?= get_the_post_thumbnail_url($content->ID)?>' class='img-responsive wp-post-image'>
                                    <figcaption>
                                        <h4><?= get_the_title($content->ID) ?></h4>
                                        <p>
                                        	<button type="button" class="btn btn-info" style="background: transparent;border: transparent;" data-toggle="modal" data-target="#popup" on>View Project</button>
                                        </p>
                                        <p style="visibility: hidden;"><?= $content->ID ?></p>
                                    </figcaption>
                                </figure>
                            </div><!--- END GRID -->
                        </div><!--- END COL -->
                        <?= var_dump($content->ID); ?>
                <?php endforeach; ?>
                	<div class="modal" id="popup">
  						<div class="modal-dialog modal-dialog-centered modal-lg">
							<div class="modal-content" style="color:#000;">
								<!-- Modal body -->
						        <div class="modal-body">
						        	<button type="button" class="close" data-dismiss="modal">&times;</button>
						          	<div class="container popup">
						          		<div class="row">
						          			<div class="col-md-6">
						          				<div class="row" style="overflow: hidden;">
						          					<div class="slide-popup owl-carousel owl-theme">
						          						<img class='img-popup' src='<?=get_the_post_thumbnail_url($content->ID)?>'>
							          					<?php
							          						$id = CFS()->get('loop',$content->ID);
									                        foreach ($id as $projectimg) {
									                            $link = wp_get_attachment_url( $projectimg['imageslide']);
									                            echo "<img src='".$link."' class='img-popup' alt=''>";
									                    } ?>
						          					</div>
						          				</div>
						          			</div>
							          		<div class="col-md-6">
							          			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum soluta maiores aliquam iusto quae id, excepturi nihil ab totam, earum eum minus ipsum, eaque odio ducimus doloremque? Doloribus quam, esse?
							          		</div>
						          		</div>
						          	</div>
						        </div>
				      		</div>
	  					</div>
					</div>
            </div><!--- END ROW -->            
        </div><!--- END CONTAINER-FLUID -->
    </section>
<?php 
get_footer() ?>
