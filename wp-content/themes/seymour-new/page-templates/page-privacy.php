<?php

/**
 * Template Name: Privacy Templates
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

        <section class="row justify-content-center">
            <div class="
            mx-auto
            text-center
            pt-5
            pb-2
            container-sm
            col-12 col-md-8 col-lg-8
          ">
                <h1 class="rozha-font">Seymour Privacy</h1>
            </div>
            <div class="col-12 col-md-8 col-lg-6">
                <p class="px-4" style="font-size: 20px; text-align: center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam mauris
                    quam pretium id rutrum scelerisque dictum velit dignissim. Libero
                    molestie ut malesuada nulla malesuada tincidunt. Porttitor quis
                    tellus nisi dui. Mauris elit netus semper mus elit odio metus, ut
                    ipsum. Vestibulum enim sed porttitor pellentesque commodo augue.
                </p>
            </div>
        </section>

        <section>
            <div style="background-color: #e9e8e5" class="px-6 py-6 justify-content-between row">
                <div class="col-3">
                    <h2 style="color: #c0bcb7">Private Policy</h2>
                </div>
                <div class="col-6">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam
                        mauris quam pretium id rutrum scelerisque dictum velit dignissim.
                        Libero molestie ut malesuada nulla malesuada tincidunt. Porttitor
                        quis tellus nisi dui. Mauris elit netus semper mus elit odio
                        metus, ut ipsum. Vestibulum enim sed porttitor pellentesque
                        commodo augue. Tortor sed condimentum sollicitudin turpis.
                    </p>
                </div>
            </div>
        </section>

        <section class="px-6">
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-md-8 col-lg-6">
                    <p class="subtitle pb-3">Private Policy</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam
                        mauris quam pretium id rutrum scelerisque dictum velit dignissim.
                        Libero molestie ut malesuada nulla malesuada tincidunt. Porttitor
                        quis tellus nisi dui. Mauris elit netus semper mus elit odio
                        metus, ut ipsum. Vestibulum enim sed porttitor pellentesque
                        commodo augue. Tortor sed condimentum sollicitudin turpis
                        imperdiet tortor mi vulputate magna. Cras aenean nunc orci, elit,
                        ullamcorper.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-md-8 col-lg-6">
                    <p class="subtitle pb-3">Private Policy</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam
                        mauris quam pretium id rutrum scelerisque dictum velit dignissim.
                        Libero molestie ut malesuada nulla malesuada tincidunt. Porttitor
                        quis tellus nisi dui. Mauris elit netus semper mus elit odio
                        metus, ut ipsum. Vestibulum enim sed porttitor pellentesque
                        commodo augue. Tortor sed condimentum sollicitudin turpis
                        imperdiet tortor mi vulputate magna. Cras aenean nunc orci, elit,
                        ullamcorper.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-md-8 col-lg-6">
                    <p class="subtitle pb-3">Private Policy</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam
                        mauris quam pretium id rutrum scelerisque dictum velit dignissim.
                        Libero molestie ut malesuada nulla malesuada tincidunt. Porttitor
                        quis tellus nisi dui. Mauris elit netus semper mus elit odio
                        metus, ut ipsum. Vestibulum enim sed porttitor pellentesque
                        commodo augue. Tortor sed condimentum sollicitudin turpis
                        imperdiet tortor mi vulputate magna. Cras aenean nunc orci, elit,
                        ullamcorper.
                    </p>
                </div>
            </div>
        </section>

        <section>
            <div class="text-center cta__wrapper py-6">
                <h1 class="cta__wrapper-title">Book your stay</h1>
                <p class="cta__wrapper-description">Find the best suit you</p>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-2">
                        <button class="btn w-100 btn-lg btn-primary" style="margin-right: 14px">
                            BOOK NOW
                        </button>
                    </div>
                    <div class="col-12 col-md-2">
                        <button class="btn w-100 btn-lg btn-outline-primary">
                            HOW TO BOOK
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row justify-content-between px-6 py-6">
                <div class="col-12 col-md-3">
                    <h2 class="seymour-title">Gallery</h2>
                </div>
                <div class="col-12 col-md-9">
                    <div class="row no-wrap">
                        <div class="col-6 col-md-4 pb-4">
                            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/gallery-1.png" alt="" class="img-fluid" />
                        </div>
                        <div class="col-6 col-md-4 pb-4">
                            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/gallery-2.png" alt="" class="img-fluid" />
                        </div>
                        <div class="col-6 col-md-4 pb-4">
                            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/gallery-3.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END WELCOME -->
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