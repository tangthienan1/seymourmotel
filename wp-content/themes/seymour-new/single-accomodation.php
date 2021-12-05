<?php

/*

Single Accomodation page

 */

get_header(); ?>

<div id="pushIt">

	<main class="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php $back_image = (get_field('top_banner_image')) ? get_field('top_banner_image') : get_bloginfo('template_directory') . "/images/static-bg-1.jpg"; ?>

				<div class="static-bg relative fill" style="background-image:url('<?php echo $back_image; ?>')">

					<div class="cover absolute">

						<div class="mytable">

							<div class="table-cell va-bottom">

								<div class="sb-caption">

									<div class="container">

										<h2><?php echo ucwords(get_the_title()); ?> test</h2>

										<p>

											<?php echo $caption = (get_field('caption')) ? get_field('caption') : ""; ?>

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



				<div class="accomodations accomodations-detail">

					<div class="container">



						<div class="vspace40px"></div>

						<div class="row">

							<div class="col-md-8">

								<?php

								if (have_rows('gallery')) : ?>

									<div id="carousel-gallery" class="carousel slide" data-ride="carousel">

										<!-- Indicators -->



										<ol class="carousel-indicators">

											<?php $j = 0;
											while (have_rows('gallery')) : the_row();
												$active = ($j == 0) ? "active" : ""; ?>

												<li data-target="#carousel-gallery" data-slide-to="<?php echo $j++; ?>" class="<?php echo $active; ?>"></li>

											<?php endwhile; ?>

										</ol>



										<!-- Wrapper for slides -->

										<div class="carousel-inner" role="listbox">

											<?php

											$i = 0;

											while (have_rows('gallery')) : the_row();

												$active = ($i == 0) ? 'active' : "";

												$images = get_sub_field('g_images');

											?>

												<div class="item <?php echo $active; ?>">

													<img src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>" title="<?php echo $images['title']; ?>" class="img-responsive">

												</div>

											<?php $i++;
											endwhile; ?>

										</div>



										<!-- Controls -->

										<a class="left carousel-control" href="#carousel-gallery" role="button" data-slide="prev">

											<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>

											<span class="sr-only">Previous</span>

										</a>

										<a class="right carousel-control" href="#carousel-gallery" role="button" data-slide="next">

											<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>

											<span class="sr-only">Next</span>

										</a>

									</div>

								<?php else : ?>

									<?php if (get_field("cover_image")) :

										$image = get_field('cover_image');

										$size1400 = wp_get_attachment_image_src($image, 'Seymour-Image');

									?>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" title="<?php echo $image['title']; ?>">

									<?php

									endif; ?>

								<?php endif; ?>

								<div class="accd-left">

									<?php the_content(); ?>

								</div>

							</div>

							<div class="col-md-4">

								<div class="accd-right theme-blue-bg">

									<!-- <span class="pt"><?php //echo _e('Price:','Seymour');
															?></span> -->

									<span class="pv"><?php echo "$" . get_field('price'); ?> / Per Night</span>

									<div class="check-and-book price-book">

										<a target="_blank" href="https://useross.com/booking.php?dialog=motel&motel_id=433" class="pbook">BOOK DIRECT</a>
										<!-- <form class="form-horizontal" action="<?php //echo home_url('/book-now');
																					?>" method="post">
<input type="hidden"  name="room_id" value="<?php //echo get_the_ID();
											?>" type="text" class="form-control input-md">
<button type="submit" name="booking" class="pbook" >BOOK DIRECT</button>
</form> -->

									</div>

								</div>

								<div class="vspace30px"></div>

								<?php $args = array('orderby' => 'menu_order', 'order' => 'ASC', 'post_status' => 'publish', 'post_type' => 'accomodation', 'exclude' => get_the_ID());
								$rooms = get_posts($args); ?>

								<?php

								if ($rooms) : ?>

									<div class="accd-right theme-yellow-bg">

										<span class="pv">More Rooms</span>

										<div class="vspace10px"></div>

										<ul class="uppercase related">

											<?php foreach ($rooms as $room) : ?>

												<li>

													<a href="<?php echo esc_url(get_the_permalink($room->ID)); ?>">

														<i class="fa fa-long-arrow-right"></i>

														<?php echo  $room->post_title; ?>

													</a>

												</li>

											<?php endforeach; ?>

										</ul>

									</div>

								<?php endif; ?>

							</div>

						</div>

					</div>

				</div>



				<div class="vspace40px"></div>





		<?php endwhile;
		endif; ?>



	</main>

	<?php get_footer(); ?>

</div>

<script>
	$(function() {

		$('.datepicker,.datepicker1').datepicker();

	})
</script>

</body>

</html>