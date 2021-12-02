<?php
/**
 * Template Name: Book Now
 */
get_header();

global $post;?>



<div id="pushIt">
	<main class="main">
		<?php if(have_posts()): while(have_posts()) :the_post();?>
			<?php $back_image=(get_field('banner_image'))? get_field('banner_image'):get_bloginfo('template_directory')."/images/static-bg-1.jpg";?>
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
		<?php endwhile;  endif;?>
		<div class="vspace40px"></div>
		<div class="contacts">
			<div class="container">

				<!-- enquiry form -->
				<div class="enquiry-button text-center clearfix">
					<a>
						Please be kind enough to fill out the following form to reserve your accommodation.
					</a>
				</div>
				<div class="vspace15px"></div>
				<!-- <iframe src="https://useross.com/booking.php?dialog=motel&motel_id=433" width="100%" height="800" frameborder="0" scrolling="no"></iframe> -->
				<?php if(isset($_POST['booking'])):
				$booking=$_POST['room_id'];
				else:
					$booking="";
				endif;
				?>
				<?php echo do_shortcode('[contact-form-7 id="177" title="booknow"]');?>


			</div>
			<div class="vspace40px"></div>
		</div>
		<?php get_footer();?>   
	</main>
</div>
<script>
	(function($){
      $("#start_date").datepicker({ minDate: 0 ,dateFormat:'dd/mm/yy'});
       $("#end_date").datepicker({ minDate: 0 ,dateFormat:'dd/mm/yy'});

	})(jQuery)

</script>
</body>
</html>