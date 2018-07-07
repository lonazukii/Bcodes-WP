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
                                        	<button type="button" class="btn btn-info" style="background: transparent;border: transparent;" data-toggle="modal" data-target="#popup" >View Project</button>
                                        </p>
                                        <p style="visibility: hidden;"><?= $content->ID ?></p>
                                    </figcaption>
                                </figure>
                            </div><!--- END GRID -->
                        </div><!--- END COL -->
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
											          			<p>
											          				<?= $content->post_content ?>
											          			</p>
																<div class="category" style="color: #fff;">
<div style="color: #fff;">
	<?php 
		//echo get_the_term_list($content->ID,'category','<ul class="cat"> <li>',',</li> <li>',',</li> </ul>') ;
		$catlist = get_terms(array('taxonomy' => 'category','hide_empty' => false,), $content->ID);
		var_dump($catlist);
		$post = get_posts(array("post_type" => 'category','nopaging' => true));
		foreach ($post as $lol) {
			$namecat = $lol->post_name;
			if ($catlist[0]->name == $namecat) {
				echo "<h1> Hello World </h1>";
			}else{
				echo "<h1> World Hello</h1>";
			}
		}
		// var_dump($catlist[0]->name);
		var_dump($post);
		//var_dump($post[0]->post_name,$post[1]->post_name,$post[2]->post_name,$post[3]->post_name,$post[4]->post_name,$post[5]->post_name);
		// var_dump(post->);

?>
</div>
																</div>
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
