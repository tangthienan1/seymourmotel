<?php
/**
 * Template Name: Local Attraction Template
 */
get_header();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$showposts =10;
$args = array( 'orderby'=>'menu_order','order'=>'ASC' ,'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'local-attraction','paged'=>$paged);

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
							<h2><?php echo ucwords(get_the_title());?></h2>
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
		<?php if(have_posts()): while (have_posts()): the_post();?>
				<div class="section welcome">
				<div class="container">
					<div class="w-desc cc">
						<?php the_content();?>
					</div>
					<div class="vspace5px hidden-xs"></div>
				</div>
			</div>
			
		<?php endwhile; endif;?>
	<div class="accomodations">
		<div class="container">
	
			<?php if($query_acco->have_posts()): $i=0; while($query_acco->have_posts()): $query_acco->the_post(); $i++;?>
				<div class="mytable e-acc">
				<?php if($i%2==0) { ?>
					<div class="table-cell va-middle half-width ea-img">
						<?php if (get_field( "cover_image")) : $image = get_field('cover_image');
						$size1400 = wp_get_attachment_image_src($image['id'],'Seymour-Image-Medium');?>
						<img src="<?php echo $size1400[0]; ?>"  class="img-responsive" alt="<?php echo $image['alt'];?>" title="<?php echo $image['title'];?>"/>
					<?php else:?>
						<img src="<?php echo bloginfo('template_directory')."/images/default-img.png"?>" class="img-responsive">
					<?php endif;?>


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
					<?php echo limit_text(get_field('description'),50);?>
					<div class="vspace15px"></div>
					<a href="<?php echo esc_url(get_the_permalink());?>" class="rm">Read More</a>
				</div>
				<?php if($i%2!=0){ ?>
				<div class="table-cell va-middle half-width ea-img">
					<?php if (get_field( "cover_image")) : $image = get_field('cover_image');
				$size1400 = wp_get_attachment_image_src($image['id'],'Seymour-Image-Thumb');?>
					<img src="<?php echo $size1400[0]; ?>"  class="img-responsive" alt="<?php echo $image['alt'];?>" title="<?php echo $image['title'];?>"/>
				<?php else:?>
                        <img src="<?php echo bloginfo('template_directory')."/images/default-img.png"?>" class="img-responsive">
				<?php endif;?>
				</div>
				<?php }?>


			
		</div>
	<?php endwhile;  wp_reset_postdata();endif;?>
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
