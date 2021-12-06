<?php

/**
 * Template Name: Welcome Templates
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
            <div class="mx-auto text-center py-5" style="width: 952px">
                <h1 class="rozha-font">Welcome to Seymour</h1>
            </div>
            <!-- Slider -->
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
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcome1-1.png" alt="" class="img-fluid" />
                        </li>
                        <li class="splide__slide">
                            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcome2-1.png" alt="" class="img-fluid" />
                        </li>
                        <li class="splide__slide">
                            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcome3.png" alt="" class="img-fluid" />
                        </li>
                        <li class="splide__slide">
                            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcome4.png" alt="" class="img-fluid" />
                        </li>
                        <li class="splide__slide">

                            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcome5.png" alt="" class="img-fluid" />
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Intro -->
        <section class="main__intro">
            <div class="main__intro_relative">
                <div class="main__intro-left">
                    Delightful quality accommodation in a tranquil environment at an
                    affordable price
                </div>
                <div class="main__intro-right">
                    Being industry experts in the field of hospitality for many years, we
                    know the value of relaxed accommodation. It helps to start a new day
                    with better energy and peace of mind. This is a vital fact, especially
                    when it comes to travelling. At Seymour Motel, we take every step
                    possible to let our guests experience warm, country hospitality.
                </div>
            </div>
        </section>
        <!-- End Intro -->
        <section class="main__img">
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcomebanner.png" />
        </section>
        <!-- Mission -->
        <section class="main__mission">
            <div class="main__mission_content">
                <div class="main__mission_content-title">
                    <h3>Our mission & vission</h3>
                </div>
                <div class="main__mission_content-text">
                    <p style="margin-bottom: 131px;">
                        Despite the fact that our services are extremely affordable, we never
                        sacrifice quality for the sake of saving money. With that vision in
                        mind, we've received a lot of positive feedback from our guests over
                        the last few years. We have significantly increased our customer base
                        by sticking to our vision. We have a large number of repeat guests who
                        appreciate the service we provide and the quiet environment away from
                        the hustle and bustle of town. The majority of these visitors consider
                        us to be one of the best country Victoria lodging providers, which
                        fuels our desire to improve.
                    </p>
                    <div class="main__mission-quote" style="width:512px;height:122px;position:relative">
                        <img style="width:173px; height:119px; position:absolute; right:0" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/qoute.png" alt="" />
                        <h3 style="position:absolute; bottom:0; z-index:2">“Better accommodation for better price”</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mission -->
        <!-- 		CTA -->
        <section>
            <div class="text-center cta__wrapper pdd-120">
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
        <!-- Why us -->
        <section class="main__why">
            <h2 style="color: '#C0BCB7'; text-align:center; margin-bottom: 120px; color:#C0BCB7">Why us</h2>
            <div class="main__why_relative">
                <div class="main__why_wrapper" style="padding-bottom: 160px">
                    <div style="width: 424px">
                        <h3 style="font-weight: 500" class="pb-2">Location</h3>
                        <p style="font-weight: 200">
                            Seymour is located next to the Hume Highway and is approximately an hour away from Melbourn
                        </p>
                        <a href="/location">
                            <div class="d-flex align-items-center btn__arrow">
                                <p class="mb-0 mr-2">DISCOVER </p>
                                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
                            </div>
                        </a>
                    </div>
                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcomeimg1.png" />
                </div>
                <div class="main__why_wrapper" style="justify-content:end">
                    <div style="width: 424px">
                        <h3 style="font-weight: 500; padding-bottom: 120px" class="pb-2">Your safe</h3>
                        <p style="font-weight: 200">
                            Seymour is located next to the Hume Highway and is approximately an hour away from Melbourn </p>
                        <a href="/location">
                            <div class="d-flex align-items-center btn__arrow">
                                <p class="mb-0 mr-2">READ MORE</p>
                                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
                            </div>
                        </a>
                    </div>
                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcomeimg2.png" />
                </div>
            </div>
        </section>

        <!-- End Why us -->
        <!-- Gallery -->
        <section class="main__gallery">
            <div class="main__gallery-title">
                <h2>Gallery</h2>
            </div>
            <div class="main__gallery-img">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/gallery-1.png" alt="" />
            </div>
            <div class="main__gallery-img">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/gallery-2.png" alt="" />
            </div>
            <div class="main__gallery-img">
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/gallery-3.png" alt="" />
            </div>
        </section>
        <!-- End Gallery -->
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