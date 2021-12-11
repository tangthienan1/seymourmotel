<?php

/**
 * Template Name: How to book Templates
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

        <section>
            <div class="mx-auto text-center py-5">
                <h1 class="rozha-font">How to book?</h1>
            </div>
        </section>

        <section class="step__wrapper px-6">
            <div class="row">
                <div class="col-12 col-md-5 col text-center text-md-left">
                    <h3>Step 1. Check the schedule</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie
                        laoreet aliquam morbi ipsum eu suspendisse ornare. Ac imperdiet
                        suspendisse ut nibh commodo proin amet.
                    </p>
                </div>
                <div class="col-12 col-md-1"></div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/step1.png" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5 col text-center text-md-left">
                    <h3>Step 2. Choose room</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie
                        laoreet aliquam morbi ipsum eu suspendisse ornare. Ac imperdiet
                        suspendisse ut nibh commodo proin amet.
                    </p>
                </div>
                <div class="col-12 col-md-1"></div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/step2.png" alt="" />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5 col text-center text-md-left">
                    <h3>Step 3. Check out with safe secured payment</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie
                        laoreet aliquam morbi ipsum eu suspendisse ornare. Ac imperdiet
                        suspendisse ut nibh commodo proin amet.
                    </p>
                </div>
                <div class="col-12 col-md-1"></div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/step3.png" alt="" />
                </div>
            </div>
        </section>

        <section class="px-6">
            <div class="row">
                <div class="col-12 col-md-6 pr-2 pb-4">
                    <h2 style="color: #c0bcb7">
                        Here are some common questions about Seymour
                    </h2>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card my-2">
                        <div class="card-header collapsed" href="#collapseOne" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseOne">
                            <span class="title">Can I cancel my booking?</span>
                            <span class="accicon">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.7" d="M4.62204 5.56356C4.82142 5.7938 5.17858 5.7938 5.37796 5.56356L9.47967 0.827327C9.7601 0.503505 9.53008 0 9.1017 0H0.898298C0.469922 0 0.239896 0.503505 0.520334 0.827327L4.62204 5.56356Z" fill="#222222" />
                                </svg>
                            </span>
                        </div>
                        <div class="collapse collapse_content" id="collapseOne">
                            <div class="d-flex card-body">
                                <div class="pr-2">
                                    <img style="width: 80px; height: 4px" src="./assets/arrow.png" />
                                </div>
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Molestie laoreet aliquam morbi ipsum eu suspendisse
                                        ornare. Ac imperdiet suspendisse ut nibh commodo proin
                                        amet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card my-2">
                        <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                            <span class="title">Is my payment safe? How?</span>
                            <span class="accicon">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.7" d="M4.62204 5.56356C4.82142 5.7938 5.17858 5.7938 5.37796 5.56356L9.47967 0.827327C9.7601 0.503505 9.53008 0 9.1017 0H0.898298C0.469922 0 0.239896 0.503505 0.520334 0.827327L4.62204 5.56356Z" fill="#222222" />
                                </svg>
                            </span>
                        </div>
                        <div class="collapse collapse_content" id="collapseTwo">
                            <div class="d-flex card-body">
                                <div class="pr-2">
                                    <img style="width: 80px; height: 4px" src="./assets/arrow.png" />
                                </div>
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Molestie laoreet aliquam morbi ipsum eu suspendisse
                                        ornare. Ac imperdiet suspendisse ut nibh commodo proin
                                        amet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2">
                        <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true">
                            <span class="title">Is my payment safe? How?</span>
                            <span class="accicon">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.7" d="M4.62204 5.56356C4.82142 5.7938 5.17858 5.7938 5.37796 5.56356L9.47967 0.827327C9.7601 0.503505 9.53008 0 9.1017 0H0.898298C0.469922 0 0.239896 0.503505 0.520334 0.827327L4.62204 5.56356Z" fill="#222222" />
                                </svg>
                            </span>
                        </div>
                        <div class="collapse collapse_content" id="collapseThree">
                            <div class="d-flex card-body">
                                <div class="pr-2">
                                    <img style="width: 80px; height: 4px" src="./assets/arrow.png" />
                                </div>
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Molestie laoreet aliquam morbi ipsum eu suspendisse
                                        ornare. Ac imperdiet suspendisse ut nibh commodo proin
                                        amet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-2">
                        <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true">
                            <span class="title">Is my payment safe? How?</span>
                            <span class="accicon">
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.7" d="M4.62204 5.56356C4.82142 5.7938 5.17858 5.7938 5.37796 5.56356L9.47967 0.827327C9.7601 0.503505 9.53008 0 9.1017 0H0.898298C0.469922 0 0.239896 0.503505 0.520334 0.827327L4.62204 5.56356Z" fill="#222222" />
                                </svg>
                            </span>
                        </div>
                        <div class="collapse collapse_content" id="collapseFour">
                            <div class="d-flex card-body">
                                <div class="pr-2">
                                    <img style="width: 80px; height: 4px" src="./assets/arrow.png" />
                                </div>
                                <div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Molestie laoreet aliquam morbi ipsum eu suspendisse
                                        ornare. Ac imperdiet suspendisse ut nibh commodo proin
                                        amet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="d-none d-md-block col-5 px-0">
                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/contact.png" class="img-fluid" alt="" />
                </div>
                <div class="col-0 col-md-1"></div>
                <div class="help__form-wrapper col-12 col-md-5">
                    <div class="
                d-flex
                justify-content-between
                flex-column
                howtobook__help-wrapper
              " style="height: 100%">
                        <div class="pb-5 pb-md-0">
                            <h2 style="color: #c0bcb7">Still need help?</h2>
                        </div>
                        <div class="d-flex flex-column">
                            <input placeholder="Name" class="seymour-input" type="text" />
                            <input placeholder="Let us know your email" class="seymour-input" type="text" />
                            <input placeholder="What is your question?" class="seymour-input" type="text" />
                        </div>
                        <div class="text-center text-md-left px-5 px-md-0 pt-4">
                            <button class="btn btn-lg btn-primary w-100 w-md-auto">
                                SEND
                            </button>
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