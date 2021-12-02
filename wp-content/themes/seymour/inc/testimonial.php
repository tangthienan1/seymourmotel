<?php $showposts =-1;
$args = array( 'orderby'=>'menu_order','order'=>'ASC' ,'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'testimonial');
$query=query_posts($args);?>
<div class="col-xs-12  col-xs-offset-0 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
	<div id="testominail" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php for($j=0;$j < count($query); $j++):   if($j==0){ $active="active";}else{ $active="";}?>
				<li data-target="#testominail" data-slide-to="<?php echo $j;?>" class="<?php echo $active;?>"></li>
			<?php endfor;?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		<?php if(have_posts()): $i=0; while(have_posts()): the_post();
              $active=($i==0)? "active":"";
		?>
			<div class="item <?php echo $active;?>">
				<p><?php $desc=(get_field('visitor_testimonial'))? get_field('visitor_testimonial'):"";
                      echo  limit_text($desc,30);
				?></p>
				<div class="t-by">
				<?php the_title();?>
				</div>
			</div>
		<?php $i++; endwhile; endif;?>
		</div>
	</div>
</div>