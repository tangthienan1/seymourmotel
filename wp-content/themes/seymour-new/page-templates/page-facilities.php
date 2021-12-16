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

        <section>
            <section class="row justify-content-between pb-5 px-6  mx-0">
                <div class="
              col-12 col-md-8 col-lg-6
              text-center text-md-left
              align-self-end
            ">
                    <div style="padding-bottom: 160px">
                        <h1 class="rozha-font">Facilities</h1>
                        <p>
                            Knowing how sensitive travelers' needs are, we strive to make
                            our guests happy by providing a variety of amenities. In fact,
                            these amenities allow them to unwind and have a great time
                            during their stay. We primarily believe in providing them with a
                            "home away from home" experience, regardless of how long they
                            stay with us.
                        </p>
                    </div>
                    <div>
                        <div class="facilities__group-wrapper">
                            <h2 class="facilities__group-title">General facilities</h2>
                            <div class="row justify-content-start facility__list-wrapper">
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            At Seymour, robust and uninterrupted Wi-Fi networks
                                            enable our guests to access the internet speedily. You
                                            can find your Wi-Fi password at the reception. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/wifi.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Wifi</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Free parking lots are conveniently located in front of
                                            each unit. Extra spots are available if required.
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/toaster.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Toaster</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            We offer complimentary continental breakfasts as
                                            a self-serve service that starts between 7:00 AM and
                                            9:00 AM seven days a week. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/kitchenware.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Kitchenware</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            An outdoor BBQ facility is provided to our guests which
                                            is located next to the swimming pool.
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/breakfast.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Free Breakfast</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/tea.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Tea & Coffee</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            At Seymour, robust and uninterrupted Wi-Fi networks
                                            enable our guests to access the internet speedily. You
                                            can find your Wi-Fi password at the reception. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/linen.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Linen</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            At Seymour, robust and uninterrupted Wi-Fi networks
                                            enable our guests to access the internet speedily. You
                                            can find your Wi-Fi password at the reception. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/microwave.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Microwave</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            At Seymour, robust and uninterrupted Wi-Fi networks
                                            enable our guests to access the internet speedily. You
                                            can find your Wi-Fi password at the reception. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/electric.png" style="width: 24px; height: 24px; margin-right: 14px" />
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
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Free parking lots are conveniently located in front of
                                            each unit. Extra spots are available if required.
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/free-parking.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Free Parking</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            We offer complimentary continental breakfasts as
                                            a self-serve service that starts between 7:00 AM and
                                            9:00 AM seven days a week. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/safe-area.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Seating Area</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            An outdoor BBQ facility is provided to our guests which
                                            is located next to the swimming pool.
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/swimming.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Swimming Pool</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/garden.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">
                                        Garden & Pool View
                                    </p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/bbq.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Free BBQ Facility</p>
                                </div>
                            </div>
                        </div>
                        <div class="facilities__group-wrapper">
                            <h2 class="facilities__group-title">Room facilities</h2>
                            <div class="row justify-content-start facility__list-wrapper">
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            At Seymour, robust and uninterrupted Wi-Fi networks
                                            enable our guests to access the internet speedily. You
                                            can find your Wi-Fi password at the reception. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/tv.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Flat Screen TV</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Free parking lots are conveniently located in front of
                                            each unit. Extra spots are available if required.
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/toiletries.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Free toiletries</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            We offer complimentary continental breakfasts as
                                            a self-serve service that starts between 7:00 AM and
                                            9:00 AM seven days a week. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/shower.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Shower</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            An outdoor BBQ facility is provided to our guests which
                                            is located next to the swimming pool.
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/air-condition.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Air Conditioning</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/towel.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Towels</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/refrigerator.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Refrigerator</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/bathroom.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Private Bathroom</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/hair.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Hair Dryer</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/carpeted.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Carpeted Room</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/wardrobe.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Wardrobe</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/iron.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Iron & Iron Board</p>
                                </div>
                                <div class="d-flex pb-4 col-6 col-xl-4 align-items-center">
                                    <div class="facility__description-wrapper">
                                        <p>
                                            Each and every room in the Seymour Motel is equipped
                                            with a flat-screen TV, keeping the guests entertained
                                            during their stay. 
                                        </p>
                                    </div>
                                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/blanket.png" style="width: 24px; height: 24px; margin-right: 14px" />
                                    <p style="font-weight: 300; margin: 0">Electric Blanket</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-12 col-md-4 col-lg-5">
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

        <section>
            <div class="text-center cta__wrapper py-6">
                <h1 class="cta__wrapper-title">Book your stay</h1>
                <p class="cta__wrapper-description">Find the best suit you</p>
                <div class="row justify-content-center  mx-0">
                    <div class="col-8 col-md-6 col-xl-3 pb-2">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#book-modal-wrapper">
                            BOOK NOW
                        </button>
                    </div>
                    <div class="col-8 col-md-6 col-xl-3">
                        <a href="/how-to-book">
                            <button class="btn w-100 btn-lg btn-outline-primary">
                                HOW TO BOOK
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- END WELCOME -->
    </main>
    <?php get_footer(); ?>
</div>
</body>

</html>