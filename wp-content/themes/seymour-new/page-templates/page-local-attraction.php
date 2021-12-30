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
			<section class="local__header row justify-content-between pb-5 pl-6 mx-0">
				<div class="
				col-12 col-md-6 col-lg-4
              text-center text-md-left
              align-self-end
              pl-0
            ">
					<h1 class="rozha-font">Local Attractions</h1>
					<p>
						Seymour Motel is located in a prime location alongside the Hume Highway in Mitchel Shire, Country Victoria. Seymour is a beautiful town located on the banks of the wonderful Goulburn River. You can reach this charming town within an hour’s drive from Melbourne city along the Hume Highway.
					</p>
				</div>
				<div class="d-none col-12 d-md-block col-md-5 col-lg-7 pr-0">
					<img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-banner.png" alt="" />
				</div>
			</section>
		</section>

		<section class="local__gallery-wrapper px-6">
			<div class="row mx-0 justify-content-start">
				<div class="d-none d-lg-block col-lg-4"></div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/Snow.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Snowfields</h3>
					<p>
						Regardless of the time of year, getting into a snowfield is a thrilling occasion for both families and individuals. Victoria is well-known among snow enthusiasts for its gorgeous vistas and natural surroundings.
					</p>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/galleries.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Galleries & Exhibition</h3>
					<p>
						One of the major attractions in Seymour is its farming exhibition, held annually every February, providing visitors the opportunity to enjoy different foods, see extraordinary livestock breeds and beautiful crafts.
					</p>
				</div>
				<div class="col-8 ml-auto col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-6.png" alt="" class="img-fluid" />
					<h3 class="pt-4">History & Heritage</h3>
					<p>
						Explore our Shire's historic buildings and locations. Learn more about our rich military history, railway heritage, and tourist attractions.
					</p>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/fishing.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Fishing</h3>
					<p>
						Given the amenities provided and the natural surroundings, fishing in Victoria is a fun-filled pastime. The Goulburn River, in particular, has a high density of trout, which is a real treat for anglers.
					</p>
				</div>
				<div class="d-none d-lg-block col-lg-4"></div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/Rectangle-19.png" alt="" class="img-fluid" />
					<h3 class="pt-4">River Activities</h3>
					<p>
						The Goulburn River is famous for many other interesting activities for those who love adventurous outdoor activities such as fishing or boating.
					</p>
				</div>
				<div class="col-8 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-3.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Great Outdoors</h3>
					<p>
						The towns in the Mitchell Shire were considered a major stop for those that came to the goldfields from the ports and towns of the Melbourne area, consisting of drinking houses and other essential services by then.
					</p>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/local-4.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Sport & Leisure</h3>
					<p>
						Seymour’s recreation and open spaces provide a vast array of active, passive, indoor, and outdoor experiences for residents and visitors, like outdoor pools, stadiums, skate parks, horse riding, and golf.
					</p>
				</div>
				<div class="col-6 col-md-4">
					<img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/Trails.png" alt="" class="img-fluid" />
					<h3 class="pt-4">Activity Trails</h3>
					<p>
						Whether you're getting set to hike, bike, trail run, or explore other outdoor sports, a quiet spot like Seymour town is the finest choice for your trials. Come over and enjoy the fresh air for yourself.
					</p>
				</div>
			</div>
		</section>

		<?php get_template_part('inc/cta'); ?>

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