<?php 
/*
Single Page Temp
 */
get_header();

global $post;?>
<div id="pushIt">
	<main class="main">
		<?php if(have_posts()): while(have_posts()) :the_post();?>
			<?php $back_image=(get_field('banner_image'))? get_field('banner_image'):get_bloginfo('template_directory')."/images/static-bg-1.jpg";?>
			<div class="static-bg relative fill" style="background-image:url('<?php echo $back_image;?>')">
				<div class="cover absolute">
					<div class="mytable">
						<div class="table-cell va-bottom">
							<div class="sb-caption">
								<div class="container">
								<h2><?php echo ucwords(get_the_title());?> Temp</h2>
									<p>
										<?php echo $caption=(get_field('caption'))? get_field('caption'):"";?>
									</p>
								<div class="vspace10px"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cover absolute sb-overlay"></div>
		</div>
		<div class="vspace40px"></div>

		<div class="accomodations accomodations-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<?php if (get_field( "cover_image")) : $image = get_field('cover_image');
						 $size1400 = wp_get_attachment_image_src($image['id'],'Seymour-Image-Thumb');?>
						<img src="<?php echo $size1400[0]; ?>"  class="img-responsive" alt="<?php echo $image['alt'];?>" title="<?php echo $image['title'];?>"/>
					<?php else:?>
                    <?php endif;?>

					<div class="accd-left">
						<?php the_content();?>
					</div>
					<?php
					$args = array(
						'orderby'=>'menu_order',
						'order'=>'ASC' ,
						'post_status' => 'publish',
						'post_parent'=>get_the_ID()
						);
					$children=get_children($args);
					if($children):?>
					<?php foreach($children as $child):?>
						<h5 class="text-center"><?php echo ucwords($child->post_title);?></h5>
						<div class="accd-left">
							<?php echo $child->post_excerpt;?>
							<a href="<?php echo esc_url(get_the_permalink($child->ID));?>" class="theme-yellow">Read More</a>
						</div>

					<?php  endforeach; endif;?>
				</div>
				<div class="col-md-4">
					<?php
                     $id=wp_get_post_parent_id(get_the_ID());
					$args = array( 'orderby'=>'menu_order','order'=>'ASC' ,'post_status' => 'publish', 'post_type' => 'page','posts_per_page' =>-1,'exclude'=>get_the_ID(),'post_parent'=>$id); $rooms=get_posts($args);?>
					<?php 
					if($rooms):?>
					<div class="accd-right theme-yellow-bg attraction">
						<span class="pv">Sub Menu</span>
						<div class="vspace10px"></div>
						<ul class="uppercase related">
							<?php foreach($rooms as $room):?>
								<li>
									<a href="<?php echo esc_url(get_the_permalink($room->ID));?>">
										<i class="fa fa-long-arrow-right"></i>
										<?php echo  $room->post_title;?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
<div class="vspace40px"></div>
<?php endwhile; endif;?>
</main>
<?php get_footer();?>

</div>
</body>
</html>

