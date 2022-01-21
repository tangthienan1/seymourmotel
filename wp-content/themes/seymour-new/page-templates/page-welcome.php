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
            <div class="mx-auto text-center p-title">
                <h1 class="rozha-font">Welcome to Seymour</h1>
            </div>
            <!-- Slider -->
            <div class="splide p-wrapper">
                <div class="splide__arrows d-flex justify-content-center">
                    <div class="text-right pr-4 slide__btn slide__btn-prev">
                        <p class="mb-0">Previous</p>
                        <svg width="88" height="6" viewBox="0 0 88 6" fill="#E9E6E5" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 3L5 0.113249V5.88675L0 3ZM88 3.5H4.5V2.5H88V3.5Z" />
                        </svg>
                    </div>
                    <div class="text-left slide__btn-next slide__btn">
                        <p class="mb-0">Next one</p>
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
                    <h2>
                        Delightful quality accommodation in a tranquil environment at an
                        affordable price
                    </h2>
                </div>
                <div class="main__intro-right wow fadeInRight" data-wow-delay="500ms">
                    Being industry experts in the field of hospitality for many years, we
                    know the value of relaxed accommodation. It helps to start a new day
                    with better energy and peace of mind. This is a vital fact, especially
                    when it comes to travelling. At Seymour Motel, we take every step
                    possible to let our guests experience warm, country hospitality.
                </div>
            </div>
        </section>
        <!-- End Intro -->
        <section class="main__img wow fadeInLeft" data-wow-delay="500ms">
            <?php $back_image = (get_field('banner_image')) ? get_field('banner_image') : get_bloginfo('template_directory') . "/images/static-bg.jpg"; ?>
            <img src="<?php echo $back_image; ?>">
        </section>
        <!-- Mission -->
        <section class="main__mission">
            <div class="main__mission_content">
                <div class="main__mission_content-title wow fadeInRight" data-wow-delay="500ms">
                    <h4>Our mission & vission</h4>
                </div>
                <div class="main__mission_content-text">
                    <p class="wow fadeInRight" data-wow-delay="500ms">
                        Despite the fact that our services are extremely affordable, we never sacrifice quality for the sake of saving money. With that vision in mind, we've received a lot of positive feedback from our guests over the last few years. By sticking to our vision, we have significantly increased our customer base. We have a large number of repeat guests who appreciate the service we provide and the quiet environment away from the hustle and bustle of town. The majority of these visitors consider us to be one of the best country Victoria lodging providers, which fuels our desire to improve.
                    </p>
                    <div class="main__mission-quote">
                        <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/qoute.png" alt="" />
                        <h3>“Better accommodation for better price”</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mission -->
        <!-- 		CTA -->
        <?php get_template_part('inc/cta'); ?>
        <!-- 		END CTA -->
        <!-- Why us -->
        <section class="main__why">
            <h2>Why us?</h2>
            <div class="main__why_relative">
                <div class="main__why_wrapper wow fadeInRight" data-wow-delay="500ms">
                    <div class="main__why_wrapper-location">
                        <h3 class="pb-2">Location</h3>
                        <p>
                            Seymour is roughly an hour's drive from Melbourne, and is located along the Hume Highway. The beauty and convenience of the surrounding area are also enjoyed by the motel's position, in addition to the convenience of transportation.
                        </p>
                        <a href="/location">
                            <div class="d-sm-none btn__arrow align-items-center mt-4 p-0">
                                <p class="mb-0">DISCOVER</p>
                                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
                            </div>
                        </a>
                    </div>
                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcomeimg1.png" />
                </div>
                <div class="main__why_wrapper wow fadeInRight" data-wow-delay="500ms" style="justify-content:end">
                    <div class="main__why_wrapper-location">
                        <h3 class="pb-2">Scenery</h3>
                        <p>
                            One of the finest features of Seymour Motel is its enchanting landscape. A beautiful view can be seen from your bedroom window by simply letting the curtains open. Enjoying a leisurely breakfast outside while sipping on your favorite beverage is such an ideal moment while staying at our motel. You can only really comprehend the sensation of being enveloped in this indescribably gorgeous area if you experience it for yourself.
                        </p>
                        <a href="/location">
                            <div class="d-sm-none btn__arrow align-items-center mt-4 p-0">
                                <p class="mb-0">DISCOVER</p>
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
        <?php get_template_part('inc/gallery'); ?>
        <!-- End Gallery -->
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