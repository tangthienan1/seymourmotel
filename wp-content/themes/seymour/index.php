<?php

get_header();

$showposts = -1;
$args = array('orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'slider_manager');
$slider = get_posts($args);
if (!empty($slider)) : $slides = "[";
	foreach ($slider as $slide) :
		$slides .= '{image:"' . wp_get_attachment_url(get_post_thumbnail_id($slide->ID)) . '",';
		$slides .= 'title: "<p>' . get_post_meta($slide->ID, 'AR_slider_caption', true) . '</p><h1>' . $slide->post_title . '</h1>"},';
	endforeach;
	$slides .= "]";
endif
?>
<div id="pushIt">
	<main class="main">
		<?php get_template_part('inc/slider') ?>
		<div class="section welcome">
			<div class="container">
				<?php if (is_active_sidebar('welcome')) : ?>

					<?php dynamic_sidebar('welcome'); ?>

				<?php endif; ?>
				<div class="vspace40px hidden-xs"></div>
				<div class="vspace30px visible-xs"></div>
				<div class="vm text-center">
					<a href="<?php echo site_url('/about-us'); ?>">
						Learn More
						&nbsp;
						<i class="fa fa-long-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>

		<div class="section accomodations listings clearfix">
			<?php get_template_part('inc/accomodation'); ?>
		</div>
		<div class="section attractions listings clearfix">
			<?php get_template_part('inc/local-attractions'); ?>
		</div>

		<div class="section testimonial clearfix">
			<div class="container">
				<div class="s-heading">
					<h2>
						<i class="fa fa-check" aria-hidden="true"></i>&nbsp;What Our Guests Say About Seymour Motel
					</h2>
				</div>
				<div class="vspace10px"></div>
				<div class="row">
					<!-- Testimonial Section-->
					<?php get_template_part('inc/testimonial'); ?>
				</div>
			</div>
		</div>
	</main>
	<?php get_footer(); ?>
</div>
<script type="text/javascript">
	jQuery(function($) {
		$.supersized({
			// Functionality
			slide_interval: 3000, // Length between transitions
			transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed: 700, // Speed of transition
			// Components                           
			slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
			slides: <?php echo $slides; ?>
		});
	});
</script>
</body>

</html>