<?php $showposts =-1;
$args = array( 'orderby'=>'menu_order','order'=>'ASC' ,'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'testimonial');
$query=query_posts($args);?>

<section>
        <div class="d-flex justify-content-between" style="padding: 60px">
          <h2 style="color: #c0bcb7; font-weight: 500" class="pb-2">
            Happy customer
          </h2>
          <div class="d-flex align-items-center justify-content-end" style="cursor: pointer">
            <p style="color: #b52804" class="mb-0">READ MORE</p>
            <img style="width: 80px; height: 4px" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
          </div>
        </div>
        <div class="d-flex testimonial__wrapper" >
<?php if(have_posts()): $i=0; while(have_posts()): the_post();
              $active=($i==0)? "active":"";
		?>
			<div
				class="text-center"
				style="border: 1px solid #c0bcb7; padding: 40px;  margin-right: 14px"
			  >
				<img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/quote.png" alt="" />
				<p style="padding: 40px 0; font-size: 20px; font-weight: 300">
				  <?php $desc=(get_field('visitor_testimonial'))? get_field('visitor_testimonial'):"";
						  echo  limit_text($desc,30);
					?>
				</p>
				<p style="color: #c0bcb7">- <?php the_title();?> -</p>
          </div>
		<?php $i++; endwhile; endif;?>
        </div>
      </section>
