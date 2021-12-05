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
  <main role="main">
    <!-- WELCOME -->

    <div class="home__sticky-address">
      <p style="font-weight: 200; width: 200px">
        144 Goulburn Valley Hwy, Seymour, VIC 3660
      </p>
    </div>

    <section>
      <section class="row justify-content-center pb-5">
        <div class="
              mx-auto
              text-center
              pt-5
              pb-2
              container-sm
              col-12 col-md-8 col-lg-8
            ">
          <h1 class="rozha-font">Seymour Motel</h1>
        </div>
        <div class="col-12 col-md-8 col-lg-6">
          <p style="font-size: 20px; text-align: right; margin-top: -10px">
            Affordable, all-inclusive packages available in Victoria
          </p>
        </div>
      </section>

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
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/banner1.png" alt="" class="img-fluid" />
            </li>
            <li class="splide__slide">
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/banner2.png" alt="" class="img-fluid" />
            </li>
            <li class="splide__slide">
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/banner3.png" alt="" class="img-fluid" />
            </li>
            <li class="splide__slide">
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/banner4.png" alt="" class="img-fluid" />
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <div class="row justify-content-between px-6" style="padding-bottom: 200px">
        <div class="col-12 col-md-7 mb-5">
          <div style="padding: 54px 0">
            <div>
              <h2 style="color: #c0bcb7; font-weight: 500" class="pb-2">
                Welcome to the clean and peaceful motel in Seymour
              </h2>
              <p style="font-weight: 200">
                Seymour is located next to the Hume Highway and is
                approximately an hour away from Melbourne. Seymour Motel was
                the town's first and remains one of the best in the area,
                offering perfectly reasonable rates. The motel has expansive
                large blocks of land, densely forested with magnificent gum
                trees and tranquil, authentic Australian gardens.
              </p>
            </div>
          </div>
        </div>

        <div class="col-8 col-md-4 text-right ml-auto ml-md-none wow fadeInRight" style="position: relative">
          <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcome1.png" class="img-fluid" />
          <div class="text-center" style="height: 560px; position: absolute; left: -80%; top: 60%">
            <div class="
                  btn__arrow
                  d-flex
                  align-items-center
                  justify-content-center
                  mb-4
                ">
              <p class="mb-0">DISCOVER</p>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
            </div>
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/welcome2.png" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>

    <section>
      <div style="background-color: #e9e6e5">
        <div class="row py-6" style="padding: 144px 60px">
          <div class="col-12 col-md-4 text-center convention__wrapper">
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/convention-1.png" />
            <h3 class="convention__wrapper-title" style="color: #c0bcb7">
              Cozy Space
            </h3>
            <p class="convention__wrapper-subtitle">
              Seymour Motel is an ideal rest stop for travelers as well as a
              wonderful place to stay while exploring the town's true beauty.
              There are three options available.
            </p>
          </div>
          <div class="col-12 col-md-4 text-center convention__wrapper">
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/convention-2.png" />
            <h3 class="convention__wrapper-title" style="color: #c0bcb7">
              Local Attraction
            </h3>
            <p class="convention__wrapper-subtitle">
              Seymour Motel is an ideal rest stop for travelers as well as a
              wonderful place to stay while exploring the town's true beauty.
              There are three options.
            </p>
          </div>
          <div class="col-12 col-md-4 text-center convention__wrapper">
            <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/convention-3.png" />
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

    <section>
      <div class="px-6">
        <div class="row" style="margin-bottom: 160px">
          <div class="col-12 col-md-6">
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
        </div>

        <div class="row justify-content-start wow fadeInLeft">
          <div class="col-12 col-md-6">
            <div class="room__type-wrapper room__type-left">
              <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-1.png" />
              <div class="d-block d-md-none d-flex justify-content-between w-100">
                <div>
                  <p style="font-weight: 200; font-size: 16px" class="mb-0">
                    Start from
                  </p>
                  <p style="font-weight: 300; font-size: 20px">
                    $110 / night
                  </p>
                </div>
                <div class="d-flex align-items-center btn__arrow">
                  <p class="mb-0 mr-2">DETAIL</p>
                  <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
                </div>
              </div>
              <div class="room__type-title">
                <h2>Single Room</h2>
                <div class="room__type-discover">
                  <div class="d-flex align-items-center btn__arrow">
                    <p style="color: #b52804" class="mb-0 mr-2">DETAIL</p>
                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
                  </div>
                </div>
              </div>
              <div class="room__type-price d-none d-md-block">
                <p style="font-weight: 200; font-size: 16px" class="mb-0">
                  Start from
                </p>
                <p style="font-weight: 300; font-size: 20px">$110 / night</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-end">
          <div class="col-12 col-md-6 wow fadeInRight">
            <div class="room__type-wrapper room__type-right ml-auto">
              <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-2.png" />
              <div class="d-block d-md-none d-flex justify-content-between w-100">
                <div>
                  <p style="font-weight: 200; font-size: 16px" class="mb-0">
                    Start from
                  </p>
                  <p style="font-weight: 300; font-size: 20px">
                    $110 / night
                  </p>
                </div>
                <div class="d-flex align-items-center">
                  <p style="color: #b52804" class="mb-0 mr-2">DETAIL</p>
                  <img style="width: 80px; height: 4px" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
                </div>
              </div>
              <div class="room__type-title">
                <h2>Single Room</h2>
                <div class="room__type-discover">
                  <div class="d-flex align-items-center btn__arrow">
                    <p class="mb-0 mr-2">DETAIL</p>
                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
                  </div>
                </div>
              </div>
              <div class="room__type-price d-none d-md-block">
                <p style="font-weight: 200; font-size: 16px" class="mb-0">
                  Start from
                </p>
                <p style="font-weight: 300; font-size: 20px">$110 / night</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-start">
          <div class="col-md-1 d-none d-md-block"></div>
          <div class="col-12 col-md-6 wow fadeInLeft">
            <div class="room__type-wrapper room__type-left">
              <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-3.png" />
              <div class="d-block d-md-none d-flex justify-content-between w-100">
                <div>
                  <p style="font-weight: 200; font-size: 16px" class="mb-0">
                    Start from
                  </p>
                  <p style="font-weight: 300; font-size: 20px">
                    $110 / night
                  </p>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0 mr-2">DETAIL</p>
                  <img style="width: 80px; height: 4px" src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
                </div>
              </div>
              <div class="room__type-title">
                <h2>Family Room</h2>
                <div class="room__type-discover">
                  <div class="d-flex align-items-center btn__arrow">
                    <p class="mb-0 mr-2">DETAIL</p>
                    <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
                  </div>
                </div>
              </div>
              <div class="room__type-price d-none d-md-block">
                <p style="font-weight: 200; font-size: 16px" class="mb-0">
                  Start from
                </p>
                <p style="font-weight: 300; font-size: 20px">$110 / night</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="text-center cta__wrapper py-6">
        <h1 class="cta__wrapper-title">Book your stay</h1>
        <p class="cta__wrapper-description">Find the best suit you</p>
        <div class="row justify-content-center">
          <div class="col-12 col-md-2">
            <a href="">
              <button class="btn w-100 btn-lg btn-primary" style="margin-right: 14px">
                BOOK NOW
              </button>
            </a>
          </div>
          <div class="col-12 col-md-2">
            <a href="/how-to-book">
              <button class="btn w-100 btn-lg btn-outline-primary">
                HOW TO BOOK
              </button>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="row justify-content-between pl-6 pr-6">
        <div class="col-md-5 d-none d-md-block wow fadeInLeft">
          <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/room-type-1.png" class="img-fluid h-100" alt="" />
        </div>
        <div class="col-12 col-md-7 col-lg-6">
          <h2 style="color: #c0bcb7; font-weight: 500" class="pb-2">
            Facility
          </h2>
          <p style="font-weight: 200">
            Seymour Motel is an ideal rest stop for travelers as well as a
            wonderful place to stay while exploring the town's true beauty.
            There are three options available to you, depending on your needs
            and purposes.
          </p>
          <a href="/facilities">
            <div class="d-flex align-items-center mt-4 btn__arrow">
              <p class="mb-0 mr-2">MORE DETAIL</p>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
            </div>
          </a>

          <div class="row justify-content-between facility__list-wrapper" style="padding-top: 40px; padding-right: 60px">
            <div class="d-flex pb-4 col-12 col-md-6 align-items-center">
              <div class="facility__description-wrapper">
                <p>
                  At Seymour, robust and uninterrupted Wi-Fi networks enable
                  our guests to access the internet speedily. You can find
                  your Wi-Fi password at the reception. 
                </p>
              </div>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/wifi.png" style="width: 24px; height: 24px; margin-right: 14px" />
              <p style="font-size: 20px; font-weight: 300; margin: 0">Wifi</p>
            </div>
            <div class="d-flex pb-4 col-12 col-md-6 align-items-center">
              <div class="facility__description-wrapper">
                <p>
                  Free parking lots are conveniently located in front of each
                  unit. Extra spots are available if required.
                </p>
              </div>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/tv.png" style="width: 24px; height: 24px; margin-right: 14px" />
              <p style="font-size: 20px; font-weight: 300; margin: 0">
                Flat Screen TV
              </p>
            </div>
            <div class="d-flex pb-4 col-12 col-md-6 align-items-center">
              <div class="facility__description-wrapper">
                <p>
                  We offer complimentary continental breakfasts as
                  a self-serve service that starts between 7:00 AM and 9:00 AM
                  seven days a week. 
                </p>
              </div>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/free-parking.png" style="width: 24px; height: 24px; margin-right: 14px" />
              <p style="font-size: 20px; font-weight: 300; margin: 0">
                Free Parking
              </p>
            </div>
            <div class="d-flex pb-4 col-12 col-md-6 align-items-center">
              <div class="facility__description-wrapper">
                <p>
                  An outdoor BBQ facility is provided to our guests which is
                  located next to the swimming pool.
                </p>
              </div>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/air-condition.png" style="width: 24px; height: 24px; margin-right: 14px" />
              <p style="font-size: 20px; font-weight: 300; margin: 0">
                Air Conditioning
              </p>
            </div>
            <!-- RIGHT -->
            <div class="d-flex pb-4 col-12 col-md-6 align-items-center">
              <div class="facility__description-wrapper">
                <p>
                  Each and every room in the Seymour Motel is equipped with a
                  flat-screen TV, keeping the guests entertained during their
                  stay. 
                </p>
              </div>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/breakfast.png" style="width: 24px; height: 24px; margin-right: 14px" />
              <p style="font-size: 20px; font-weight: 300; margin: 0">
                Free Breakfast
              </p>
            </div>
            <div class="d-flex pb-4 col-12 col-md-6 align-items-center">
              <div class="facility__description-wrapper">
                <p>
                  All rooms are equipped with proper air conditioning
                  systems and are in good maintenance.
                </p>
              </div>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/swimming.png" style="width: 24px; height: 24px; margin-right: 14px" />
              <p style="font-size: 20px; font-weight: 300; margin: 0">
                Swimming Pool
              </p>
            </div>
            <div class="d-flex pb-4 col-12 col-md-6 align-items-center">
              <div class="facility__description-wrapper">
                <p>
                  Seymour's perfectly set swimming pool, open all year, has
                  everything you need to feel refreshed.
                </p>
              </div>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/bbq.png" style="width: 24px; height: 24px; margin-right: 14px" />
              <p style="font-size: 20px; font-weight: 300; margin: 0">
                Free BBQ Facility
              </p>
            </div>
            <div class="d-flex pb-4 col-12 col-md-6 align-items-center">
              <div class="facility__description-wrapper">
                <p>
                  All of the bathrooms are well-equipped and well-maintained,
                  ensuring complete sanitation.
                </p>
              </div>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/bathroom.png" style="width: 24px; height: 24px; margin-right: 14px" />
              <p style="font-size: 20px; font-weight: 300; margin: 0">
                Private Bathroom
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="row px-6 py-6 justify-content-between align-items-start">
        <div class="col-12 col-md-4">
          <h2 style="color: #c0bcb7; font-weight: 500" class="pb-2">
            Local Attraction
          </h2>
          <a href="/local-attraction">
            <div class="d-flex align-items-center btn__arrow">
              <p class="mb-0 mr-2">SEE MORE</p>
              <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
            </div>
          </a>
        </div>
        <div class="col-12 col-md-5">
          <p>
            Seymour is in such a great location being a regional hub for the
            district with a range of social services with an abundance of
            medical options including the Seymour Hospital, Government
            Agency’s Humans Services and Vic Roads along with great Shopping
            with all major supermarkets available. The rail line junction with
            multiple daily services to Melbourne for the daily commute along
            with services to access all of Australia.
          </p>
        </div>
      </div>
    </section>

    <div class="splide-2 pl-6">
      <div class="splide__arrows d-flex justify-content-end pr-6">
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
            <div class="local__item-wrapper">
              <div>
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/Rectangle-19.png" alt="" style="margin-bottom: 24px; height: 340px; width: 430px" />
              </div>
              <h3>Wonderful Town</h3>
              <p>
                Towns in the Mitchell Shire were considered a major stop for
                those that came to the goldfields from the ports and towns of
                the Melbourne area, consisting of drinking houses and other
                essential services by then.
              </p>
            </div>
          </li>
          <li class="splide__slide">
            <div class="local__item-wrapper">
              <div>
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/Rectangle-19-1.png" alt="" style="margin-bottom: 24px; height: 340px; width: 430px" />
              </div>
              <h3>Sport & Recreation</h3>
              <p>
                One of the major attractions in Seymour is its farming
                exhibition held annually every February providing visitors the
                opportunity to enjoy different foods, see extraordinary
                livestock breeds and beautiful crafts.
              </p>
            </div>
          </li>
          <li class="splide__slide">
            <div class="local__item-wrapper">
              <div>
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/Rectangle-19-2.png" alt="" style="margin-bottom: 24px; height: 340px; width: 430px" />
              </div>
              <h3>Interesting Events</h3>
              <p>
                Goulburn River is famous for many other interesting activities
                for those who love adventurous outdoor activities such as
                fishing or boating,
              </p>
            </div>
          </li>
          <li class="splide__slide">
            <div class="local__item-wrapper">
              <div>
                <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/Rectangle-30.png" alt="" style="margin-bottom: 24px; height: 340px; width: 430px" />
              </div>
              <h3>Wonderful Town</h3>
              <p>
                Goulburn River is famous for many other interesting activities
                for those who love adventurous outdoor activities such as
                fishing or boating,
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <section>
      <div class="d-flex justify-content-between px-6 py-6">
        <h2 style="color: #c0bcb7; font-weight: 500" class="pb-2">
          Happy customer
        </h2>
        <div class="d-flex align-items-center justify-content-end btn__arrow">
          <p class="mb-0">READ MORE</p>
          <img src="http://www.seymourmotel.com/wp-content/uploads/2021/11/arrow.png" />
        </div>
      </div>
      <div class="row" style="padding: 60px; padding-top: 0">
        <div class="col text-center" style="border: 1px solid #c0bcb7; padding: 40px">
          <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/quote.png" alt="" />
          <p style="padding: 40px 0; font-size: 20px; font-weight: 300">
            Our family stayed at the Seymour Motel during the time we visited
            Melbourne. Clean rooms, great services, and who can say no to an
            outdoor pool!
          </p>
          <p style="color: #c0bcb7">- Ashley -</p>
        </div>

        <div class="col text-center" style="border: 1px solid #c0bcb7; padding: 40px; margin: 0 14px">
          <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/quote.png" alt="" />
          <p style="padding: 40px 0; font-size: 20px; font-weight: 300">
            Our family stayed at the Seymour Motel during the time we visited
            Melbourne. Clean rooms, great services, and who can say no to an
            outdoor pool!
          </p>
          <p style="color: #c0bcb7">- Ashley -</p>
        </div>
        <div class="col text-center" style="border: 1px solid #c0bcb7; padding: 40px">
          <img src="http://www.seymourmotel.com/wp-content/uploads/2021/12/quote.png" alt="" />
          <p style="padding: 40px 0; font-size: 20px; font-weight: 300">
            Our family stayed at the Seymour Motel during the time we visited
            Melbourne. Clean rooms, great services, and who can say no to an
            outdoor pool!
          </p>
          <p style="color: #c0bcb7">- Ashley -</p>
        </div>
      </div>
    </section>

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
      <div class="row justify-content-between px-6 py-6">
        <div class="col-12 col-md-3 pb-4">
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