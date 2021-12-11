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
			<section class="local__header row justify-content-between pb-5 pl-6">
				<div class="
              col-12 col-md-8 col-lg-4
              text-center text-md-left
              align-self-end
            ">
					<h1 class="rozha-font">Local Attractions</h1>
					<p>
						Seymour Motel is located in a prime location alongside the Hume
						Highway, Mitchel Shire – Country Victoria. Seymour is a beautiful
						town located on the banks of the wonderful Goulburn River. You can
						reach this charming town within an hours’ drive from Melbourne
						city along the Hume Highway.
					</p>
				</div>
				<div class="d-none d-md-block col-12 col-md-8 col-lg-7">
					<img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-banner.png" alt="" />
				</div>
			</section>
		</section>

		<section class="local__gallery-wrapper px-6">
			<div class="row justify-content-end">
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-1.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Snowfields</h3>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-2.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Galleries & Exhibition</h3>
				</div>
			</div>
			<div class="row justify-content-start">
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-3.png" alt="" class="img-fluid" />
					<h3 class="pt-4">History & Heritage</h3>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-4.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Fishing</h3>
				</div>
			</div>
			<div class="row justify-content-start">
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-5.png" alt="" class="img-fluid" />
					<h3 class="pt-4">River Activities</h3>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-6.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Great Outdoors</h3>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-7.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Sport & Leisure</h3>
				</div>
			</div>
			<div class="row justify-content-start">
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-8.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Activity Trails</h3>
				</div>
			</div>
		</section>

		<section>
			<div class="text-center cta__wrapper py-6">
				<h1 class="cta__wrapper-title">Book your stay</h1>
				<p class="cta__wrapper-description">Find the best suit you</p>
				<div class="row justify-content-center">
					<div class="col-8 col-md-3 col-xl-2 pb-2">
						<a href="https://useross.com/booking.php?dialog=motel&motel_id=433">
							<button class="btn w-100 btn-lg btn-primary" style="margin-right: 14px">
								BOOK NOW
							</button>
						</a>
					</div>
					<div class="col-8 col-md-3 col-xl-2">
						<a href="/how-to-book">
							<button class="btn w-100 btn-lg btn-outline-primary">
								HOW TO BOOK
							</button>
						</a>
					</div>
				</div>
			</div>
		</section>

		<?php get_template_part('inc/gallery'); ?>

		<!-- END WELCOME -->
	</main>
	<?php get_footer(); ?>
</div>
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