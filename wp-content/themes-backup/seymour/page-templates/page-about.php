<?php
/**
 * Template Name: About Us
 */
get_header();?>
<div id="pushIt">
	<?php if(have_posts()): while(have_posts()): the_post();
	$args = array(
		'orderby'=>'menu_order',
		'order'=>'ASC' ,
		'post_status' => 'publish',
		'post_parent'=>get_the_ID()
		);

	$children=get_children($args);
	?>
	<main class="main">
		<?php $back_image=(get_field('banner_image'))? get_field('banner_image'):get_bloginfo('template_directory')."/images/static-bg.jpg";?>
		<div class="static-bg relative fill" style="background-image:url('<?php echo $back_image;?>')">
			<div class="cover absolute">
				<div class="mytable">
					<div class="table-cell va-bottom">
						<div class="sb-caption">
							<div class="container">
								<h2><?php the_title();?></h2>
								<div class="vspace10px"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cover absolute sb-overlay"></div>
			</div>
			<div class="section welcome vinfo">
				<div class="container">
					<div class="w-desc cc">
						<?php the_content();?>
					</div>
					<div class="vspace40px hidden-xs"></div>
					<div class="vspace30px visible-xs"></div>
				</div>
			</div>
			<?php foreach($children as $child):
			if($child->post_name=='our-mission-vision'):
				?>
			<div class="section welcome">
				<div class="container">
					<div class="s-heading">
						<h2>
							<?php echo $child->post_title;?>
						</h2>
						<p>
							<?php echo $child->post_excerpt;?>
						</p>
					</div>
					<div class="vspace40px hidden-xs"></div>
					<div class="vspace30px visible-xs"></div>
					<div class="vm text-center">
						<a href="<?php echo esc_url(get_the_permalink($child->ID));?>">
							Learn More
							&nbsp;
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		<?php endif;
if($child->post_name=='visitor-information'):
				?>
			<div class="section vinfo clearfix">
	<div class="container">
		<div class="s-heading">
			<h2>
				<?php echo $child->post_title;?>
			</h2>
			<p>
				<?php echo $child->post_excerpt;?>
			</p>
			<div class="vspace40px"></div>
		</div>
	</div>
</div>
<?php endif;?>
<?php endforeach;?>


<div class="section abt-contact theme-blue-bg text-center">
	<div class="container">
		<div class="s-heading">
			<h2>
				Contact Us
			</h2>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<p>
					<b>
						If you have any enquiry feel free to write us.
						We'll get back to you within 2-3 buisness days.
					</b>
				</p>
				<div class="vspace30px"></div>
				<div class="vm">
					<a href="<?php echo home_url("/contact-us");?>">Make an Enquiry</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endwhile; endif;?>
</main>
<?php get_footer();?>
</div>
<script>
	$(function(){
		var $m_container = $('.masonry');
		$m_container.imagesLoaded(function(){
			$m_container.masonry({
				itemSelector : '.grid-item'
			});
		});
	})
</script>
<script>
	$(function(){
		$('.grid-item a').fancybox();
	})
</script>
</body>
</html>

