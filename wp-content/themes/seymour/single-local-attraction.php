<?php 
get_header();?>
<div id="pushIt">
	<main class="main">
		<?php if(have_posts()): while(have_posts()) :the_post();?>
			<?php $back_image=(get_field('top_banner__image'))? get_field('top_banner__image'):get_bloginfo('template_directory')."/images/static-bg-1.jpg";?>
			<div class="static-bg relative fill" style="background-image:url('<?php echo $back_image;?>')">
				<div class="cover absolute">
					<div class="mytable">
						<div class="table-cell va-bottom">
							<div class="sb-caption">
								<div class="container">
									<h2><?php the_title();?></h2>
									<p>
										<?php echo $caption=(get_field('caption'))? get_field('caption'):"";?>
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
<?php if (get_field( "cover_image")) : $image = get_field('cover_image');
								 $size1400 = wp_get_attachment_image_src($image['id'],'Seymour-Image-Thumb');?>
								<img src="<?php echo $size1400[0]; ?>"  class="img-responsive" alt="<?php echo $image['alt'];?>" title="<?php echo $image['title'];?>"/>
							<?php else:?>
								<img src="<?php bloginfo('template_directory')."/images/default-img.png"?>" class="img-responsive">
							<?php endif;?>
							<div class="accd-left">


								<?php if(get_field('description')):?>
									<?php echo get_field('description');?>
									<?php endif;?>
								<?php
								if(have_rows('local_attraction')): $i=0;
								while (have_rows('local_attraction')) : the_row();
								?>
								<h5><?php echo get_sub_field('place_title');?></h5>
								<div class="vspace5px"></div>
								<?php if (get_sub_field( "local_image")) : $image = get_sub_field('local_image');
				               $size1400 = wp_get_attachment_image_src($image['id'],'Seymour-Image-Thumb');?>
								<img src="<?php echo $size1400[0]; ?>"  class="img-responsive" alt="<?php echo $image['alt'];?>" title="<?php echo $image['title'];?>"/>
							<?php else:?>
								<img src="<?php bloginfo('template_directory')."/images/static-bg.jpg"?>" class="img-responsive">
							<?php endif;?>
							<div class="vspace5px"></div>
							<div class="snld-desc_<?php echo $i;?>">
								<?php echo get_sub_field('place_description');?>
							</div>
<!--							<div class="fhide" style="display:none">-->
<!--								<div class="snld-desc1">-->
<!--									--><?php //echo get_sub_field('place_description');?>
<!--								</div>-->
<!--							</div>-->
<!--							<div class="rm" >-->
<!--								<a href="javascript:;" class="theme-yellow" id="rm_--><?php //echo $i;?><!--">-->
<!--									<span class="rmt">Read More</span>-->
<!--									<span class="rms">+</span>-->
<!--								</a>-->
<!--							</div>-->
							<?php   $i++;endwhile;?>
						<?php endif;?>

					</div>

				</div>
				<div class="col-md-4">
					<?php $args = array( 'orderby'=>'menu_order','order'=>'ASC' ,'post_status' => 'publish', 'post_type' => 'local-attraction','posts_per_page' =>-1,'exclude'=>get_the_ID()); $rooms=get_posts($args);?>
					<?php 
					if($rooms):?>
					<div class="accd-right theme-yellow-bg attraction">
						<span class="pv">More Local Attractions </span>
						<div class="vspace10px"></div>
						<ul class="uppercase related">
							<?php foreach($rooms as $room):?>
								<li>
									<a href="<?php echo esc_url(get_the_permalink($room->ID));?>">
										<i class="fa fa-long-arrow-right"></i>
										<?php echo  $room->post_title;?>
									</a>
								</li>
							<?php endforeach; wp_reset_postdata(); ?>
						</ul>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>

<div class="vspace40px"></div>


<?php endwhile; endif;?>

</main>
<?php get_footer();?>
</div>
<script>
	$(function(){
		$('.datepicker,.datepicker1').datepicker({
			startDate: '-3d'
		});
	})
// revealing read more
//$(function(){
//	$('.rm a').click(function(e){
//		var id=$(this).attr('id'),
//		arg=id.split("_");
//		findDisplay = $("#rm_"+arg[1]).parent().prev('.fhide').css('display');
//		if(findDisplay == "none"){
//			$(".snld-desc_"+arg[1]).slideUp();
//			$("#rm_"+arg[1]).parent().prev('.fhide').slideDown(350);
//			$("#rm_"+arg[1]).children('span.rmt').text('Read Less');
//			$("#rm_"+arg[1]).children('span.rms').text('-');
//		}
//		else{
//			$("#rm_"+arg[1]).parent().prev('.fhide').slideUp(350);
//			$(".snld-desc_"+arg[1]).slideDown();
//			$("#rm_"+arg[1]).children('span.rmt').text('Read More');
//			$("#rm_"+arg[1]).children('span.rms').text('+');
//		}
//		e.preventDefault();
//	});
//})
</script>
</body>
</html>

