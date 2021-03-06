<?php

/**
 * Template Name: Facilities Templates
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

        <section style="padding-top: 80px;">
            <section class="row justify-content-between pb-5 px-6  mx-0">
                <div class="
              col-12 col-md-7 col-lg-6
              text-center text-md-left
              align-self-end
            ">
                    <div style="padding-bottom: 160px">
                        <h1 class="rozha-font">Facilities</h1>
                        <p>
                            We strive to make our guests happy by providing a wide range of amenities, knowing that their needs are unique.
                            In fact, they are able to unwind and enjoy their trip more fully. Even if they stay with us only for a short time, we aim to make them feel at home.
                        </p>
                    </div>
                    <div>
                        <div class="facilities__group-wrapper">
                            <h2 class="facilities__group-title">General facilities</h2>
                            <div class="row justify-content-start facility__list-wrapper">
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/wifi-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Wifi</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/toaster-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Toaster</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/kitchenware-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Kitchenware</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/breakfast-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Free Breakfast</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/tea-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Tea & Coffee</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/linen-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Linen</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/microwave-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Microwave</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/kettle.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Electric Kettle</p>
                                </div>
                            </div>
                        </div>
                        <div class="facilities__group-wrapper">
                            <h2 class="facilities__group-title">
                                Motel grounds facilities
                            </h2>
                            <div class="row justify-content-start facility__list-wrapper">
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/free-parking-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Free Parking</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/safe-area-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Seating Area</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/swimming-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Swimming Pool</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/garden-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">
                                        Garden & Pool View
                                    </p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/bbq-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Free BBQ Facility</p>
                                </div>
                            </div>
                        </div>
                        <div class="facilities__group-wrapper">
                            <h2 class="facilities__group-title">Room facilities</h2>
                            <div class="row justify-content-start facility__list-wrapper">
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/tv-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Flat Screen TV</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/toiletries-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Free toiletries</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/shower-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Shower</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/air-condition-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Air Conditioning</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/towel-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Towels</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/refrigerator-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Refrigerator</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/bathroom-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Private Bathroom</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/hair-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Hair Dryer</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/carpeted-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Carpeted Room</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/wardrobe-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Wardrobe</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/iron-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Iron & Iron Board</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/electric-1.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Electric Blanket</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-12 col-md-5 col-lg-5 px-0">
                    <div class="facilities__adrress-wrapper">
                        <div class="facilities__adrress-inner">
                            <img class="img-fluid w-100" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/facilities-banner.png" alt="" />
                            <div class="facilities__adrress-content">
                                <p style="font-weight: 200; width: 200px">
                                    144 Goulburn Valley Hwy, Seymour, VIC 3660
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <?php get_template_part('inc/cta'); ?>

        <!-- END WELCOME -->
    </main>
    <?php get_footer(); ?>
</div>
</body>

</html>