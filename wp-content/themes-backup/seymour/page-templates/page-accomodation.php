<?php
/**
 * Template Name: Accomodation Template
 */
get_header();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$showposts =20;
$args = array( 'orderby'=>'menu_order','order'=>'ASC' ,'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'accomodation','paged'=>$paged);
$query_acco = new WP_Query($args);
?>
<div id="pushIt">
	<main class="main">
		<?php $back_image=(get_field('banner_image'))? get_field('banner_image'):get_bloginfo('template_directory')."/images/static-bg.jpg";?>
		<div class="static-bg relative fill" style="background-image:url('<?php echo $back_image;?>')">	<div class="cover absolute">
			<div class="mytable">
				<div class="table-cell va-bottom">
					<div class="sb-caption">
						<div class="container">
							<h2><?php the_title();?></h2>
							<p>
								<?php the_excerpt();?>
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
	<div class="accomodations">
		<div class="container">
			<?php if($query_acco->have_posts()): $i=0; while($query_acco->have_posts()): $query_acco->the_post();
			$i++;?>
			<div class="mytable e-acc">
				<?php if($i%2==0){ ?>
				<div class="table-cell va-middle half-width ea-img">
					
					<?php if (get_field( "cover_image")) :
							$image = get_field('cover_image');
							$size1400 = wp_get_attachment_image_src($image['id'],'Seymour-Image-Thumb');
							?>
							<img src="<?php echo $size1400[0]; ?>"  class="img-responsive" alt="<?php echo $image['alt'];?>" title="<?php echo $image['title'];?>"/>
							<?php
							endif;?>
				</div>
				<?php }?>
				<div class="table-cell va-middle half-width ea-desc">
					<h2><a href="<?php echo esc_url(get_the_permalink());?>"><?php the_title();?></a></h2>
					<div class="vspace15px"></div>
					<ul class="floated-list clearfix">
						<li>
							<img src="<?php bloginfo('template_directory');?>/icons/tv.png" alt="">
						</li>
						<li>
							<img src="<?php bloginfo('template_directory');?>/icons/wifi.png" alt="">
						</li>
					</ul>
					<div class="vspace15px"></div>
					<?php the_excerpt();?>
					<div class="vspace15px"></div>
					<div class="price-book clearfix">
						<div class="pstart pull-left">
						<h4>
							<span class="theme-blue"><?php echo _e('Price:','Seymour');?> </span><span class="theme-black"><?php if(get_field('price')) echo '$'.get_field('price').' '.'/ night for prices';?></span>
							</h4>
						</div>
						<form class="form-horizontal pull-right" action="<?php echo home_url('/book-now');?>" method="post">
								<input type="hidden"  name="room_id" value="<?php echo get_the_ID();?>" type="text" class="form-control input-md">
								<button type="submit" name="booking" class="pbook" >Book Now</button>
						</form>
					</div>
				</div>
				<?php if($i%2!=0){?>
				<div class="table-cell va-middle half-width ea-img">
					<?php if (get_field( "cover_image")) :
							$image = get_field('cover_image');
							$size1400 = wp_get_attachment_image_src($image['id'],'Seymour-Image-Thumb');
							?>
							<img src="<?php echo $size1400[0]; ?>"  class="img-responsive" alt="<?php echo $image['alt'];?>" title="<?php echo $image['title'];?>"/>
							<?php
							endif;?>
				</div>
				<?php }?>
			</div>
		<?php endwhile; endif;?>
		<div class="pagination-block">
			<?php
			$total_pages = $query_acco->max_num_pages;
			if ($total_pages > 1) {
				$current_page = max(1, $paged);
				echo paginate_links(array(
					'base' => get_pagenum_link(1) . '%_%',
					'show_all' => true,
					'format' => '/page/%#%',
					'prev_next' =>true,
					'current' => $current_page,
					'total' => $total_pages,
					));
			}
			?>
		</div>
	</div>
</div>
</main>
<?php get_footer();?>
</div>
</body>
</html>
