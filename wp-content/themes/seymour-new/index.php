<?php

get_header();

$showposts = -1;
$args = array('orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'slider_manager');
$slider = get_posts($args);
if (!empty($slider)) : $slides = "[";
  foreach ($slider as $slide) :
    $slides .= '{image:"' . wp_get_attachment_url(get_post_thumbnail_id($slide->ID)) . '",';
    $slides .= 'title: "<p>' . get_post_meta($slide->ID, 'AR_slider_caption', true) . '</p><h1>' . $slide->post_title . '</h1>"},';
  endforeach;
  $slides .= "]";
endif
?>
<div id="pushIt">
  <main class="main">
    <section class="main-container">
      <div class="mx-auto text-center py-5" style="width: 680px">
        <h1 class="rozha-font">Seymour Motel</h1>
        <p style="font-size: 20px; text-align: right; margin-top: -10px">
          Affordable, all-inclusive packages available in Victoria
        </p>
      </div>
      <?php get_template_part('inc/slider') ?>
    </section>

    <div class="d-flex justify-content-between" style="padding: 60px 0; padding-bottom: 200px">
      <div>
        <div style="width: 680px; padding: 54px 0 60px 54px">
          <div>
            <?php if (is_active_sidebar('welcome')) : ?>
              <?php dynamic_sidebar('welcome'); ?>
            <?php endif; ?>
          </div>
        </div>
        <a href="<?php echo site_url('/about-us'); ?>">
          <div class="d-flex align-items-center justify-content-end">
            <p style="color: #b52804" class="mb-0 pr-1">DISCOVER</p>
            <img style="width: 80px; height: 4px" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
          </div>
        </a>
      </div>

      <div style="width: 600px; height: 800px; position: relative">
        <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/welcome1.png" class="img-fluid" />
        <div style="
                width: 425px;
                height: 560px;
                position: absolute;
                left: -40%;
                top: 60%;
              ">
          <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/welcome2.png" class="img-fluid" />
        </div>
      </div>
    </div>
    </section>

    <section>
      <div style="background-color: #e9e6e5">
        <div class="row" style="padding: 76px">
          <div class="col text-center convention__wrapper">
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/convention-1.png" />
            <h3 class="convention__wrapper-title" style="color: #c0bcb7">
              Cozy Space
            </h3>
            <p class="convention__wrapper-subtitle">
              Seymour Motel is an ideal rest stop for travelers as well as a
              wonderful place to stay while exploring the town's true beauty.
              There are three options available.
            </p>
          </div>
          <div class="col text-center convention__wrapper">
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/convention-2.png" />
            <h3 class="convention__wrapper-title" style="color: #c0bcb7">
              Local Attraction
            </h3>
            <p class="convention__wrapper-subtitle">
              Seymour Motel is an ideal rest stop for travelers as well as a
              wonderful place to stay while exploring the town's true beauty.
              There are three options.
            </p>
          </div>
          <div class="col text-center convention__wrapper">
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/convention-3.png" />
            <h3 class="convention__wrapper-title" style="color: #c0bcb7">
              Chill vibe
            </h3>
            <p class="convention__wrapper-subtitle">
              Seymour Motel is an ideal rest stop for travelers as well as a
              wonderful place to stay while exploring the town's true beauty.
              There are three options.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- 		ROOM TYPE -->
    <section>
      <div style="padding: 60px">
        <div style="width: 650px">
          <h2 style="color: #c0bcb7; font-weight: 500" class="pb-2">
            Explore rooms & suites
          </h2>
          <p style="font-weight: 200">
            Seymour is located next to the Hume Highway and is approximately
            an hour away from Melbourne. Seymour Motel was the town's first
            and remains one of the best in the area, offering perfectly
            reasonable rates. The motel has expansive large blocks of land,
            densely forested with magnificent gum trees and tranquil,
            authentic Australian gardens.
          </p>
        </div>

        <div class="room__type-wrapper room__type-left">
          <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-1.png" />
          <div class="room__type-title">
            <h2>Single Room</h2>
          </div>
          <div class="room__type-price">
            <p style="font-weight: 200; font-size: 16px" class="mb-0">
              Start from
            </p>
            <p style="font-weight: 300; font-size: 20px">$110 / night</p>
          </div>
        </div>

        <div class="room__type-wrapper room__type-right ml-auto">
          <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-2.png" />
          <div class="room__type-title">
            <h2>Twin Room</h2>
          </div>
          <div class="room__type-price">
            <p style="font-weight: 200; font-size: 16px" class="mb-0">
              Start from
            </p>
            <p style="font-weight: 300; font-size: 20px">$120 / night</p>
          </div>
        </div>

        <div class="room__type-wrapper room__type-right" style="margin-left: 172px">
          <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-3.png" />
          <div class="room__type-title">
            <h2>Family Room</h2>
          </div>
          <div class="room__type-price">
            <p style="font-weight: 200; font-size: 16px" class="mb-0">
              Start from
            </p>
            <p style="font-weight: 300; font-size: 20px">$160 / night</p>
          </div>
        </div>
      </div>
    </section>
    <!-- END ROOM TYPE -->

    <!-- 		CTA -->
    <section>
      <div style="" class="text-center cta__wrapper">
        <h1 class="cta__wrapper-title">Book your stay</h1>
        <p class="cta__wrapper-description">Find the best suit you</p>
        <div class="d-flex justify-content-center">
          <button class="btn btn-lg btn-primary" style="margin-right: 14px">
            BOOK NOW
          </button>
          <button class="btn btn-lg btn-outline-primary">HOW TO BOOK</button>
        </div>
      </div>
    </section>
    <!-- 		END CTA -->

    <!-- 		FACILITY -->

    <section>
      <div class="d-flex justify-content-between">
        <div style="width: 710px; height: 480px">
          <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/Rectangle-30.png" class="img-fluid" alt="" />
        </div>
        <div style="width: 540px">
          <h2 style="color: #c0bcb7; font-weight: 500" class="pb-2">
            Facility
          </h2>
          <p style="font-weight: 200">
            Seymour Motel is an ideal rest stop for travelers as well as a
            wonderful place to stay while exploring the town's true beauty.
            There are three options available to you, depending on your needs
            and purposes.
          </p>
          <div class="d-flex align-items-center">
            <p style="color: #b52804" class="mb-0 mr-2">MORE DETAIL</p>
            <img style="width: 80px; height: 4px" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
          </div>

          <div class="d-flex justify-content-between" style="padding-top: 40px; padding-right: 60px">
            <div>
              <div class="d-flex align-items-center">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/wifi.png" style="width: 24px; height: 24px; margin-right: 14px" />
                <p style="font-size: 20px; font-weight: 300; margin: 0">
                  Wifi
                </p>
              </div>
              <div class="d-flex align-items-center">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/tv.png" style="width: 24px; height: 24px; margin-right: 14px" />
                <p style="font-size: 20px; font-weight: 300; margin: 0">
                  Flat Screen TV
                </p>
              </div>
              <div class="d-flex align-items-center">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/free-parking.png" style="width: 24px; height: 24px; margin-right: 14px" />
                <p style="font-size: 20px; font-weight: 300; margin: 0">
                  Free Parking
                </p>
              </div>
              <div class="d-flex align-items-center">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/air-condition.png" style="width: 24px; height: 24px; margin-right: 14px" />
                <p style="font-size: 20px; font-weight: 300; margin: 0">
                  Air Conditioning
                </p>
              </div>
            </div>
            <!-- RIGHT -->
            <div>
              <div class="d-flex align-items-center">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/breakfast.png" style="width: 24px; height: 24px; margin-right: 14px" />
                <p style="font-size: 20px; font-weight: 300; margin: 0">
                  Free Breakfast
                </p>
              </div>
              <div class="d-flex align-items-center">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/swimming.png" style="width: 24px; height: 24px; margin-right: 14px" />
                <p style="font-size: 20px; font-weight: 300; margin: 0">
                  Swimming Pool
                </p>
              </div>
              <div class="d-flex align-items-center">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/bbq.png" style="width: 24px; height: 24px; margin-right: 14px" />
                <p style="font-size: 20px; font-weight: 300; margin: 0">
                  Free BBQ Facility
                </p>
              </div>
              <div class="d-flex align-items-center">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/bathroom.png" style="width: 24px; height: 24px; margin-right: 14px" />
                <p style="font-size: 20px; font-weight: 300; margin: 0">
                  Private Bathroom
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 		END FACILITY -->

    <!-- 		<div class="section welcome">
			<div class="container">
				<?php if (is_active_sidebar('welcome')) : ?>

					<?php dynamic_sidebar('welcome'); ?>

				<?php endif; ?>
				<div class="vspace40px hidden-xs"></div>
				<div class="vspace30px visible-xs"></div>
				<div class="vm text-center">
					<a href="<?php echo site_url('/about-us'); ?>">
						Learn More
						&nbsp;
						<i class="fa fa-long-arrow-right"></i>
					</a>
				</div>
			</div>
		</div> -->



    <!-- 		<div class="section accomodations listings clearfix">
			<?php get_template_part('inc/accomodation'); ?>
		</div> -->
    <div class="section attractions listings clearfix">
      <?php get_template_part('inc/local-attractions'); ?>
    </div>

    <!-- Testimonial Section-->
    <?php get_template_part('inc/testimonial'); ?>



    <section>
      <div style="background-color: #e9e6e5">
        <div class="row" style="padding: 76px">
          <div class="col">
            <h1 style="font-family: 'Rozha One' !important">Stay in touch</h1>
          </div>
          <div class="col d-flex flex-column">
            <input placeholder="Name" class="seymour-input" type="text" />
            <input placeholder="Email" class="seymour-input" type="text" style="margin: 30px 0" />
            <div>
              <button class="btn btn-lg btn-primary" style="margin-right: 14px">
                SUBMIT
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="d-flex justify-content-between" style="padding: 60px">
        <h2 class="pb-2 seymour-title">Gallery</h2>
        <div class="d-flex">
          <div style="width: 321px; height: 321px">
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/gallery-1.png" alt="" class="img-fluid" />
          </div>
          <div style="width: 321px; height: 321px; margin: 0 14px">
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/gallery-2.png" alt="" class="img-fluid" />
          </div>
          <div style="width: 321px; height: 321px">
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/gallery-3.png" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
</div>
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