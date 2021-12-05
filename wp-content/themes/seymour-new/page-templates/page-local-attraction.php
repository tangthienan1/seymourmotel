<?php

/**
 * Template Name: Local Attraction Templates
 */

get_header();
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$showposts = 20;
$args = array('orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'accomodation', 'paged' => $paged);
$query_acco = new WP_Query($args);
?>
<div id="pushIt">
	<main role="main">
		<!-- WELCOME -->
		<section>
			<section class="row justify-content-between pb-5 pl-6">
				<div class="col-12 col-md-8 col-lg-4 align-self-end">
					<h1 class="rozha-font">Local Attractions</h1>
					<p>
						Seymour Motel is located in a prime location alongside the Hume
						Highway, Mitchel Shire – Country Victoria. Seymour is a beautiful
						town located on the banks of the wonderful Goulburn River. You can
						reach this charming town within an hours’ drive from Melbourne
						city along the Hume Highway.
					</p>
				</div>
				<div class="col-12 col-md-8 col-lg-7">
					<img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-banner.png" alt="" />
				</div>
			</section>
		</section>

		<section class="local__gallery-wrapper px-6">
			<div class="row justify-content-end">
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-1.png" alt="" class="img-fluid" />
					<p class="pt-4">Snowfields</p>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-2.png" alt="" class="img-fluid" />
					<p class="pt-4">Galleries & Exhibition</p>
				</div>
			</div>
			<div class="row justify-content-start">
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-3.png" alt="" class="img-fluid" />
					<p class="pt-4">History & Heritage</p>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-4.png" alt="" class="img-fluid" />
					<p class="pt-4">Fishing</p>
				</div>
			</div>
			<div class="row justify-content-start">
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-5.png" alt="" class="img-fluid" />
					<p class="pt-4">River Activities</p>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-6.png" alt="" class="img-fluid" />
					<p class="pt-4">Great Outdoors</p>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-7.png" alt="" class="img-fluid" />
					<p class="pt-4">Sport & Leisure</p>
				</div>
			</div>
			<div class="row justify-content-start">
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-8.png" alt="" class="img-fluid" />
					<p class="pt-4">Activity Trails</p>
				</div>
			</div>
		</section>

		<section>
			<div class="text-center cta__wrapper py-6">
				<h1 class="cta__wrapper-title">Book your stay</h1>
				<p class="cta__wrapper-description">Find the best suit you</p>
				<div class="row justify-content-center">
					<div class="col-12 col-md-2">
						<a href="https://useross.com/booking.php?dialog=motel&motel_id=433">
							<button class="btn w-100 btn-lg btn-primary" style="margin-right: 14px">
								BOOK NOW
							</button>
						</a>
					</div>
					<div class="col-12 col-md-2">
						<a href="./how-to-book.html">
							<button class="btn w-100 btn-lg btn-outline-primary">
								HOW TO BOOK
							</button>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="row justify-content-between px-6 py-6">
				<div class="col-12 col-md-3 pb-4">
					<h2 class="seymour-title">Gallery</h2>
				</div>
				<div class="col-12 col-md-9">
					<div class="row no-wrap">
						<div class="col-6 col-md-4 pb-4">
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/gallery-1.png" alt="" class="img-fluid" />
						</div>
						<div class="col-6 col-md-4 pb-4">
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/gallery-2.png" alt="" class="img-fluid" />
						</div>
						<div class="col-6 col-md-4 pb-4">
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/gallery-3.png" alt="" class="img-fluid" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- END WELCOME -->
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
<script>
	document.addEventListener("DOMContentLoaded", function() {
		console.log(`WOW`, WOW);
		new WOW().init();
		var splide = new Splide(".splide", {
			arrows: false,
			type: "loop",
			pagination: false,
		});
		splide.mount();
		$(".splide .slide__btn-prev").on("click", () => {
			splide.go("<");
		});
		$(".splide .slide__btn-next").on("click", () => {
			splide.go(">");
		});

		var splide2 = new Splide(".splide-2", {
			arrows: false,
			type: "loop",
			perPage: 3,
			pagination: false,
		});
		splide2.mount();
		$(".splide-2 .slide__btn-prev").on("click", () => {
			splide2.go("<");
		});
		$(".splide-2 .slide__btn-next").on("click", () => {
			splide2.go(">");
		});
	});
</script>
</body>

</html>