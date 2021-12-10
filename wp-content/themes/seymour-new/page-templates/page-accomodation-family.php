<?php

/**
 * Template Name: Accommodation Family Room Templates
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
				<h1 class="rozha-font">Accommodation</h1>
			</div>
			<!-- arrow controls -->
			<div class="splide px-6">
				<div class="splide__arrows d-flex justify-content-center">
					<div class="text-right pr-4 slide__btn slide__btn-prev">
						<p class="mb-0">Previous</p>
						<svg width="88" height="6" viewBox="0 0 88 6" fill="#E9E6E5" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 3L5 0.113249V5.88675L0 3ZM88 3.5H4.5V2.5H88V3.5Z" />
						</svg>
					</div>
					<div class="text-left slide__btn-next slide__btn">
						<p class="mb-0">Next</p>
						<svg width="88" height="6" viewBox="0 0 88 6" fill="#E9E6E5" xmlns="http://www.w3.org/2000/svg">
							<path d="M88 3L83 0.113249V5.88675L88 3ZM0 3.5H83.5V2.5H0V3.5Z" />
						</svg>
					</div>
				</div>

				<div class="splide__track home__banner-wrapper">
					<div class="slider__title">
						<h2 class="rozha-font"><?php echo ucwords(get_the_title()); ?></h2>
					</div>
					<ul class="splide__list">
						<li class="splide__slide">
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/banner1.png" alt="" class="img-fluid" />
						</li>
						<li class="splide__slide">
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/banner2.png" alt="" class="img-fluid" />
						</li>
						<li class="splide__slide">
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/banner3.png" alt="" class="img-fluid" />
						</li>
						<li class="splide__slide">
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/banner4.png" alt="" class="img-fluid" />
						</li>
					</ul>
				</div>
			</div>

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
						<div class="tol_no danger">
							<a href="https://useross.com/booking.php?dialog=motel&motel_id=433">
								<p>BOOK NOW</p>
							</a>
						</div>
						<div class="tol_no un-danger">
							<a href="/how-to-book">
								<p>HOW TO BOOK</p>
							</a>
						</div>
					</div>
				</div>
				<div class="wow fadeInRight main__banner_img" data-wow-delay="500ms">
					<?php $back_image = (get_field('banner_image')) ? get_field('banner_image') : get_bloginfo('template_directory') . "/images/static-bg.jpg"; ?>
					<img src="<?php echo $back_image; ?>" style="width:100%; height:100%">
				</div>
			</div>

		</section>

		<section class="main__highlight">
			<h2>Room HighLight</h2>
			<div class="main__highlight_container">
				<div class="main__highlight_container-highlight wow fadeInLeft" data-wow-delay="500ms">
					<h3>Highlight</h3>
					<p>People always don’t travel in groups – some travel alone for various reasons.</p>
				</div>
				<div class="main__highlight_container-img1 wow fadeInLeft" data-wow-delay="500ms">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/family-highlight1.png" alt="">
				</div>
				<div class="main__highlight_container-img2 wow fadeInRight" data-wow-delay="500ms">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/family-highlight2.png" alt="">
				</div>
				<div class="main__highlight_container-img3 wow fadeInLeft" data-wow-delay="500ms">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/family-highlight3.png" alt="">
				</div>
				<div class="main__highlight_container-highlight wow fadeInLeft" data-wow-delay="500ms">
					<h3>Who should choose this</h3>
					<p>For family traveller, all rooms have one queen size and two single beds as standard configuration.</p>
				</div>

			</div>
		</section>

		<section class="main__facilities">
			<div class="main__facilities-info wow fadeInRight" data-wow-delay="500ms">

				<h3>Facilities</h3>
				<p>These rooms also have all the basic facilities in addition to the safety and comfort.</p>
				<div class="main__facilities-benefit">
					<ul>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/wifi.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Wifi
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/tv.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Flat Screen TV
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/microwave.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Microwave
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/air-condition.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Air Conditioning
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/wardrobe.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Wardrobe
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/toaster.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Toaster
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/tea.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Tea & Coffee
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/bathroom.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Private Bathroom
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/safe-area.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Seating Area
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/blanket.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Electric Blanket
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/toiletries.png" style="width: 24px; height: 24px; margin-right: 14px" />
							Free toiletries
						</li>
					</ul>
					<ul>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/towel.png" style="width: 24px; height: 24px; margin-right: 14px" />

							Towels
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/hair.png" style="width: 24px; height: 24px; margin-right: 14px" />

							Hair Dryer
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/iron.png" style="width: 24px; height: 24px; margin-right: 14px" />

							Iron & Iron board
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/shower.png" style="width: 24px; height: 24px; margin-right: 14px" />

							Shower
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/refrigerator.png" style="width: 24px; height: 24px; margin-right: 14px" />

							Refrigerator
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/electric.png" style="width: 24px; height: 24px; margin-right: 14px" />

							Electric Kettle
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/kitchenware.png" style="width: 24px; height: 24px; margin-right: 14px" />

							Kitchenware
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/garden.png" style="width: 24px; height: 24px; margin-right: 14px" />

							Garden & Pool View
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/carpeted.png" style="width: 24px; height: 24px; margin-right: 14px" />

							Carpeted Room
						</li>
						<li>
							<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/linen.png" style="width: 24px; height: 24px; margin-right: 14px" />

							Linen
						</li>

					</ul>
				</div>
			</div>
			<div class="main__facilities-img wow fadeInRight" data-wow-delay="500ms">

				<?php if (get_field("cover_image")) : $image = get_field('cover_image');
					$size1400 = wp_get_attachment_image_src($image['id'], 'Seymour-Image-Thumb'); ?>
					<img src="<?php echo $size1400[0]; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="img-responsive" />
				<?php endif; ?>
			</div>
		</section>
		<!-- More Options -->
		<section>

			<div class="px-6">
				<h2 style="color: #c0bcb7;
							font-weight: 500;
							font-size: 48px;
							line-height: 52px;
							text-align: center;
							padding-bottom: 120px;
							">
					More Options</h2>

				<div class="row justify-content-end">
					<div class="col-12 col-md-6 wow fadeInRight">
						<div class="room__type-wrapper room__type-right ml-auto">
							<img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-1.png" />
							<div class="d-block d-md-none d-flex justify-content-between w-100">
								<div>
									<p style="font-weight: 200; font-size: 16px" class="mb-0">
										Start from
									</p>
									<p style="font-weight: 300; font-size: 20px">
										$120 / night
									</p>
								</div>
								<div class="d-flex align-items-center">
									<p style="color: #b52804" class="mb-0 mr-2">DETAIL</p>
									<img style="width: 80px; height: 4px" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
								</div>
							</div>
							<div class="room__type-title">
								<h2>Single Room</h2>
								<div class="room__type-discover">
									<div class="d-flex align-items-center btn__arrow">
										<p class="mb-0 mr-2">DETAIL</p>
										<img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
									</div>
								</div>
							</div>
							<div class="room__type-price d-none d-md-block">
								<p style="font-weight: 200; font-size: 16px" class="mb-0">
									Start from
								</p>
								<p style="font-weight: 300; font-size: 20px">$120 / night</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row justify-content-start">
					<div class="col-md-1 d-none d-md-block"></div>
					<div class="col-12 col-md-6 wow fadeInLeft">
						<div class="room__type-wrapper room__type-left">
							<img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-2.png" />
							<div class="d-block d-md-none d-flex justify-content-between w-100">
								<div>
									<p style="font-weight: 200; font-size: 16px" class="mb-0">
										Start from
									</p>
									<p style="font-weight: 300; font-size: 20px">
										$160 / night
									</p>
								</div>
								<div class="d-flex align-items-center">
									<p class="mb-0 mr-2">DETAIL</p>
									<img style="width: 80px; height: 4px" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
								</div>
							</div>
							<div class="room__type-title">
								<h2>Twin Room</h2>
								<div class="room__type-discover">
									<div class="d-flex align-items-center btn__arrow">
										<p class="mb-0 mr-2">DETAIL</p>
										<img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
									</div>
								</div>
							</div>
							<div class="room__type-price d-none d-md-block">
								<p style="font-weight: 200; font-size: 16px" class="mb-0">
									Start from
								</p>
								<p style="font-weight: 300; font-size: 20px">$160 / night</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php get_template_part('inc/gallery'); ?>
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
<script>
	document.addEventListener("DOMContentLoaded", function() {
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

	});
</script>

</html>