<?php $showposts =3;
$args = array( 'orderby'=>'menu_order','order'=>'ASC' ,'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'local-attraction');
query_posts($args);?>
<div class="container">
	<?php if (is_active_sidebar('attraction-statement')) : ?>

		<?php dynamic_sidebar('attraction-statement'); ?>

	<?php endif; ?>

	<div class="vspace40px"></div>
	<div class="row">
		<?php if(have_posts()): while(have_posts()): the_post();?>
			
			<div class="col-sm-6 col-md-4">
				<div class="e-listings">
					<div class="el-img relative">
						<a href="<?php echo esc_url(get_the_permalink());?>">
							<?php if (get_field( "cover_image")) : $image = get_field('cover_image');
						$size1400 = wp_get_attachment_image_src($image['id'],'Seymour-Image-Thumb');?>
						<img src="<?php echo $size1400[0]; ?>" alt="<?php  echo $image['alt'];?>" title="<?php echo $image['title'];?>"  class="img-responsive"/><?php
							endif;?>
						</a>
						<div class="eli-info absolute">
							<div class="eli-heading">
								<h3>
									<?php the_title();?>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; endif;?>
		</div>
		<div class="vm text-center">
			<a href="<?php echo site_url('/local-attraction');?>">
				Veiw All
				&nbsp;
				<i class="fa fa-long-arrow-right"></i>
			</a>
		</div>
	
</div>