<?php

/**
 * Template Name: Accomodation Templates
 */

get_header();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$showposts = 20;
$args = array('orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'accomodation', 'paged' => $paged);
$query_acco = new WP_Query($args);
?>
<div id="pushIt">
	<main class="main">
		<section class="main-container">
			<div class="mx-auto text-center py-5" style="width: 680px">
				<h1 class="rozha-font">Accomodation</h1>
			</div>
			<?php get_template_part('inc/slider-accomodation') ?>
		</section>

		<section class="main__banner">
			<div class="main__banner_wrapper">
				<div class="main__banner_info">
					<div>Start from</div>
					<div class="main__banner_info-price">$110 / night</div>
					<div class="main__banner_info-text">These rooms have been designed specifically to meet the needs of individuals.
						They are extremely comfortable, allowing you to begin a new "next day"
						with a positive mindset. The gentle touch of nature in a calm and quiet environment
						can be a great relief for your's tiredness.
					</div>
					<div class="main__banner_info-benefit">
						<span>
							<i class="fas fa-check"></i> Free Breakfast
						</span>
						<span>
							<i class="fas fa-check"></i> Free Breakfast
						</span>
					</div>
					<div class="main__banner_info-button flex-button">
						<div class="tol_no danger">BOOK NOW</div>
						<div class="tol_no undanger">HOW TO BOOK</div>
					</div>
				</div>
				<div class="main__banner_img">
					<?php $back_image = (get_field('banner_image')) ? get_field('banner_image') : get_bloginfo('template_directory') . "/images/static-bg.jpg"; ?>
					<img src="<?php echo $back_image; ?>" style="width:100%; height:100%">
				</div>
			</div>

		</section>

		<section class="main__highlight">
			<h2>Room HighLight</h2>
			<div class="main__highlight_container">
				<div class="main__highlight_container-highlight">
					<h3>Highlight</h3>
					<p>People always don’t travel in groups – some travel alone for various reasons.</p>
				</div>
				<div class="main__highlight_container-img1">
					<img src="https://picsum.photos/536/330" alt="">
				</div>
				<div class="main__highlight_container-img2">
					<img src="https://picsum.photos/648/400" alt="">
				</div>
				<div class="main__highlight_container-img3">
					<img src="https://picsum.photos/424/540" alt="">
				</div>
				<div class="main__highlight_container-highlight">
					<h3>Who should choose this</h3>
					<p>For an individual traveller, hiring a double room is an unwanted expenditure.</p>
				</div>

			</div>
		</section>

		<section class="main__facilities">
			<div class="main__facilities-info">
				<h3>Facilities</h3>
				<p>These rooms also have all the basic facilities in addition to the safety and comfort.</p>
				<div class="main__facilities-benefit">
					<ul>
						<li>
							<!-- <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/wifi.png" style="width: 24px; height: 24px; margin-right: 14px" /> -->
							Wifi
						</li>
						<li>
							<!-- <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/tv.png" style="width: 24px; height: 24px; margin-right: 14px" /> -->
							Flat Screen TV
						</li>
						<li>Microwave</li>
						<li>
							<!-- <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/air-condition.png" style="width: 24px; height: 24px; margin-right: 14px" /> -->
							Air Conditioning
						</li>
						<li>Wardrobe</li>
						<li>Toaster</li>
						<li>Tea & Coffee</li>
						<li>
							<!-- <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/bathroom.png" style="width: 24px; height: 24px; margin-right: 14px" /> -->
							Private Bathroom
						</li>
						<li>Seating Area</li>
						<li>Electric Blanket</li>
						<li>Free toiletries</li>
					</ul>
					<ul>
						<li>Towels</li>
						<li>Hair Dryer</li>
						<li>Iron & Iron board</li>
						<li>Shower</li>
						<li>Refrigerator</li>
						<li>Electric Kettle</li>
						<li>Kitchenware</li>
						<li>Garden & Pool View</li>
						<li>Carpeted Room</li>
						<li>Linen</li>

					</ul>
				</div>
			</div>
			<div class="main__facilities-img">
				<img src="https://picsum.photos/708">
			</div>
		</section>
		<!-- More Options -->
		<section class="main__more">
			<div class="main__more_right">
				<div class="main__more-title">
					<h2>Twin Room</h2>
				</div>
				<img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-2.png">
				<div class="main__more_right-price">
					<div>Start from</div>
					<div>$120/night</div>
				</div>
			</div>
			<div class="main__more_left">
				<div class="main__more-title">
					<h2>Family Room</h2>
				</div>
				<img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-3.png">
				<div class="main__more_left-price">
					<div>Start from</div>
					<div>$160/night</div>
				</div>
			</div>
		</section>

		<section class="main__gallery">
			<div class="main__gallery-title">
				<h2>Gallery</h2>
			</div>
			<div class="main__gallery-img">
				<img src="https://picsum.photos/312" alt="">
			</div>
			<div class="main__gallery-img">
				<img src="https://picsum.photos/312" alt="">
			</div>
			<div class="main__gallery-img">
				<img src="https://picsum.photos/312" alt="">
			</div>
		</section>
	</main>
	<?php get_footer(); ?>
</div>
<?php
$showposts = -1;
$args = array('orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'slider_manager_acc');
$slider = get_posts($args);
if (!empty($slider)) : $slides = "[";
	foreach ($slider as $slide) :
		$attachments = get_children(array(
			'post_parent' => $slide->ID,
			'post_status' => 'inherit',
			'post_type' => 'attachment',
			'post_mime_type' => 'image',
			'order' => 'ASC',
			'orderby' => 'menu_order ID'
		));

		foreach ($attachments as $att_id => $attachment) {
			$full_img_url = wp_get_attachment_url($attachment->ID);

			$slides .= '{image:"' . $full_img_url . '",';
			$slides .= 'title: "<p>' . get_post_meta($slide->ID, 'AR_slider_caption', true) . '</p><h1>' . $slide->post_title . '</h1>"},';
		}

	endforeach;
	$slides .= "]";
endif;


?>
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