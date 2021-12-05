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
            <?php get_template_part('inc/slider-welcome') ?>
        </section>
        <!-- Intro -->
        <section class="main__intro">
            <div class="main__intro-left">Delightful quality accommodation in a tranquil environment at an affordable price</div>
            <div class="main__intro-right">Being industry experts in the field of hospitality for many years, we know the value of relaxed accommodation. It helps to start a new day with better energy and peace of mind. This is a vital fact, especially when it comes to travelling. At Seymour Motel, we take every step possible to let our guests experience warm, country hospitality.</div>
        </section>
        <!-- End Intro -->

        <!-- Mission -->
        <section class="main__mission">
            <div class="main__mission-img">
                <img src="https://picsum.photos/1268/420">
            </div>
            <div class="main__mission_content">
                <div class="main__mission_content-title">
                    <h3>Our mission & vission</h3>
                </div>
                <div class="main__mission_content-text">
                    <p>Despite the fact that our services are extremely affordable, we never sacrifice quality for the sake of saving money.
                        With that vision in mind, we've received a lot of positive feedback from our guests over the last few years. We have significantly increased our customer base by sticking to our vision. We have a large number of repeat guests who appreciate the service we provide and the quiet environment away from the hustle and bustle of town. The majority of these visitors consider us to be one of the best country Victoria lodging providers, which fuels our desire to improve.</p>
                </div>
            </div>
            <div class="main_mission-quote">
                <img src="<?php bloginfo('template_directory'); ?>/icons/quote.png" alt="">
                <h3>“Better accommodation for better price”</h3>
            </div>
        </section>
        <!-- End Mission -->
        <!-- 		CTA -->
        <section>
            <div class="text-center cta__wrapper">
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
        <!-- Gallery -->
        <section class="main__gallery">
            <div class="main__gallery-title">
                <h2>Gallery</h2>
            </div>
            <div class="main__gallery-img">
                <img src="https://picsum.photos/312" alt="">
            </div>
            <div class="main__gallery-img">
                <img src="https://picsum.photos/312" alt="">
            </div>
            <div class="main__gallery-img">
                <img src="https://picsum.photos/312" alt="">
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
</body>

</html>