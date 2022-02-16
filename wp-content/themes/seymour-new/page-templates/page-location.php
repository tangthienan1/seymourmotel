<?php

/**
 * Template Name: Location Templates
 */

get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$showposts = 20;
$args = array('orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => $showposts, 'post_status' => 'publish', 'post_type' => 'accomodation', 'paged' => $paged);
$query_acco = new WP_Query($args);
?>

<main role="main">
    <script>
        // Place this code in the head section of your HTML file
        (function(r, d, s) {
            r.loadSkypeWebSdkAsync =
                r.loadSkypeWebSdkAsync ||
                function(p) {
                    var js,
                        sjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(p.id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = p.id;
                    js.src = p.scriptToLoad;
                    js.onload = p.callback;
                    sjs.parentNode.insertBefore(js, sjs);
                };
            var p = {
                scriptToLoad: "https://swx.cdn.skype.com/shared/v/latest/skypewebsdk.js",
                id: "skype_web_sdk",
            };
            r.loadSkypeWebSdkAsync(p);
        })(window, document, "script");
    </script>
    <!-- Location -->

    <section class="location__title">
        <div class="location__mobileTitle mx-auto text-center">
            <h1 class="rozha-font">Location</h1>
        </div>
        <section class="main__location_intro row justify-content-between pr-6">
            <div class="left_img d-none d-md-block col-md-5 col-12 wow fadeInLeft" data-wow-delay="500ms">
                <img style="height: 725px" class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/location1.png" alt="" />
            </div>
            <div class="
              col-md-5 col-12
              text-center
              d-flex
              flex-column
              wow
              fadeInRight
              justify-content-between
            " data-wow-delay="500ms" style="position: relative">
                <h1 class="rozha-font py-6">Location</h1>
                <div class="vertical-img d-none d-md-block">
                    <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/location3.png" alt="" />
                </div>
                <div class="horizontal-img d-none d-md-block">
                    <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/location2.png" alt="" />
                </div>
            </div>
        </section>
    </section>

    <section>
        <div class="modal fade" id="share-modal-wrapper" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 600px">
                <div class="modal-content text-center" style="position: relative">
                    <div class="modal__close-btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5841 1.32584L1.32583 14.5841C1.20861 14.7013 1.04964 14.7672 0.883884 14.7672C0.718124 14.7672 0.559152 14.7013 0.441942 14.5841C0.324731 14.4669 0.258883 14.3079 0.258883 14.1422C0.258883 13.9764 0.324731 13.8174 0.441942 13.7002L13.7002 0.441957C13.8174 0.324747 13.9764 0.258898 14.1421 0.258898C14.3079 0.258898 14.4669 0.324747 14.5841 0.441957C14.7013 0.559167 14.7671 0.718139 14.7671 0.883899C14.7671 1.04966 14.7013 1.20863 14.5841 1.32584Z" fill="#222222" />
                            <path d="M14.5841 13.8427L1.32583 0.584425C1.20861 0.467215 1.04964 0.401367 0.883884 0.401367C0.718124 0.401367 0.559152 0.467215 0.441942 0.584425C0.324731 0.701636 0.258883 0.860607 0.258883 1.02637C0.258883 1.19213 0.324731 1.3511 0.441942 1.46831L13.7002 14.7266C13.8174 14.8438 13.9764 14.9096 14.1421 14.9096C14.3079 14.9096 14.4669 14.8438 14.5841 14.7266C14.7013 14.6094 14.7671 14.4504 14.7671 14.2846C14.7671 14.1189 14.7013 13.9599 14.5841 13.8427Z" fill="#222222" />
                        </svg>
                    </div>

                    <div class="share__popup-wraper modal-body">
                        <h4>Share about Seymour Motel with your friends.</h4>
                        <div class="d-flex justify-content-center mt-4 mb-5">
                            <a class="social__item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://goo.gl/maps/3L5kxHowCJoJBjQQ6">
                                <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/facebook-1.png" alt="" />
                            </a>
                            <a class="social__item" target="_blank" href="mailto:info@seymourmotel.com?&subject=&cc=&bcc=&body=https://goo.gl/maps/3L5kxHowCJoJBjQQ6%0A">
                                <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/email.png" alt="" />
                            </a>
                            <a role="link" aria-labelledby="shareButtonLabel" tabindex="0" onKeydown="skypeShareKeyDownHandler(event)" data-href="https://goo.gl/maps/3L5kxHowCJoJBjQQ6" class="social__item skype-share">
                                <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/skype.png" alt="" />
                            </a>
                            <a class="social__item" target="_blank" href="https://twitter.com/intent/tweet?url=https://goo.gl/maps/3L5kxHowCJoJBjQQ6&text=">
                                <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/twitter.png" alt="" />
                            </a>
                            <a class="social__item" target="_blank" href="https://api.whatsapp.com/send?text=https://goo.gl/maps/3L5kxHowCJoJBjQQ6">
                                <img class="img-fluid" src="http://www.seymourmotel.com/wp-content/uploads/2021/12/phone-1.png" alt="" />
                            </a>
                        </div>

                        <div class="copy__wrapper d-flex">
                            <div class="copy__wrapper-input">
                                <input placeholder="Let us know your email" class="w-100 seymour-input" type="text" value="https://goo.gl/maps/3L5kxHowCJoJBjQQ6" />
                            </div>
                            <button class="btn btn-md-lg btn-outline-primary copy__btn">
                                COPY LINK
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="
            location__nav-wrapper
            mx-auto
            d-flex
            justify-content-between justify-content-md-center
            px-6
          ">
            <h3 class="location__nav-item active">Location</h3>
            <h3 class="location__nav-item px-0 px-md-5">Car/Taxi</h3>
            <h3 class="location__nav-item">Public Transaction</h3>
        </div>
        <div class="location__map-wrapper px-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.024797268675!2d145.14533321529578!3d-37.00920477990603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad7f54810abbb83%3A0xd90071fcec22e637!2sSeymour%20Motel!5e0!3m2!1svi!2s!4v1640224741993!5m2!1svi!2s" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
            <div class="location__map-popup location__map-location active">
                <h3 class="mb-3">Seymour motel</h3>
                <div class="d-flex" style="padding-bottom: 32px">
                    <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.12788 0C3.64661 0 0.000976562 3.64563 0.000976562 8.1269C0.000976562 9.60217 0.662602 11.1888 0.690329 11.2558C0.904019 11.763 1.32566 12.5508 1.6297 13.0126L7.20189 21.4555C7.42992 21.8016 7.76743 22 8.12788 22C8.48833 22 8.82584 21.8016 9.05387 21.456L14.6265 13.0126C14.9311 12.5508 15.3522 11.763 15.5659 11.2558C15.5936 11.1893 16.2548 9.60265 16.2548 8.1269C16.2548 3.64563 12.6091 0 8.12788 0ZM14.6844 10.8848C14.4936 11.3394 14.1011 12.0723 13.8282 12.4863L8.25552 20.9296C8.14557 21.0965 8.11067 21.0965 8.00072 20.9296L2.42805 12.4863C2.15508 12.0723 1.7626 11.3389 1.57186 10.8843C1.56373 10.8647 0.957083 9.40426 0.957083 8.1269C0.957083 4.17292 4.1739 0.956106 8.12788 0.956106C12.0819 0.956106 15.2987 4.17292 15.2987 8.1269C15.2987 9.40617 14.6906 10.8704 14.6844 10.8848Z" fill="black" />
                        <path d="M8.12767 3.82483C5.75509 3.82483 3.8252 5.75521 3.8252 8.12731C3.8252 10.4994 5.75509 12.4298 8.12767 12.4298C10.5002 12.4298 12.4301 10.4994 12.4301 8.12731C12.4301 5.75521 10.5002 3.82483 8.12767 3.82483ZM8.12767 11.4737C6.28286 11.4737 4.7813 9.9726 4.7813 8.12731C4.7813 6.28203 6.28286 4.78094 8.12767 4.78094C9.97247 4.78094 11.474 6.28203 11.474 8.12731C11.474 9.9726 9.97247 11.4737 8.12767 11.4737Z" fill="black" />
                    </svg>
                    <div class="ml-2">
                        <p class="location__map-popup-sub">Location</p>
                        <p>
                            144 Goulburn Valley Hwy, Seymour, <br />
                            VIC 3660
                        </p>
                    </div>
                </div>
                <div class="d-flex" style="padding-bottom: 32px">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 21.9443C20.09 21.9443 21.5 20.4743 21.915 17.9043C21.9622 17.5727 21.9423 17.2349 21.8564 16.9111C21.7705 16.5873 21.6204 16.284 21.415 16.0194L21.335 15.9443L18.3 13.5443C17.8414 13.201 17.2788 13.0255 16.7062 13.0473C16.1337 13.0692 15.5861 13.287 15.155 13.6643L13.845 14.9043C11.115 14.2843 7.195 10.7443 7 8.13435L8.295 6.76935C8.66618 6.33607 8.878 5.78887 8.89528 5.2186C8.91256 4.64833 8.73427 4.08931 8.39 3.63435L6 0.609349C5.97506 0.576098 5.94462 0.547352 5.91 0.524349C5.64595 0.319603 5.34354 0.169866 5.02063 0.0839866C4.69772 -0.00189266 4.36088 -0.0221712 4.03 0.0243495C1.47 0.444349 0 1.85435 0 3.94435C0 8.71825 1.89642 13.2966 5.27208 16.6723C8.64773 20.0479 13.2261 21.9443 18 21.9443ZM4.19 1.01935C4.26158 1.01439 4.33342 1.01439 4.405 1.01935C4.71311 1.02052 5.01338 1.11653 5.265 1.29435L7.6 4.24435C7.80293 4.5142 7.90889 4.84463 7.90072 5.18217C7.89255 5.51971 7.77074 5.84463 7.555 6.10435L6.135 7.60435C6.04867 7.69656 6.00044 7.81803 6 7.94435C6 11.1643 10.645 15.3943 13.92 15.9443C13.9961 15.9569 14.074 15.9517 14.1477 15.9292C14.2215 15.9066 14.289 15.8673 14.345 15.8144L15.845 14.4093C16.1028 14.1894 16.4275 14.0633 16.7662 14.0515C17.1048 14.0397 17.4375 14.1429 17.71 14.3443L20.685 16.6843C20.9093 16.9947 21.0027 17.3808 20.945 17.7593C20.7 19.2094 20 20.9443 18 20.9443C13.4913 20.9443 9.1673 19.1533 5.97919 15.9652C2.79107 12.777 1 8.45303 1 3.94435C1 1.94435 2.735 1.24435 4.19 1.01935Z" fill="black" />
                    </svg>

                    <div class="ml-2">
                        <p class="location__map-popup-sub">Contact Number</p>
                        <p>+61 3 5792 1500</p>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg share-button">
                    SHARE LOCATION
                </button>
            </div>
            <div class="location__map-popup location__map-car">
                <div class="d-flex">
                    <div class="pt-1">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.0371 12.7368L29.3745 12.0352L27.049 5.76684C26.6528 4.70803 25.6395 4.0065 24.5092 4H7.89963C6.76938 4 5.75604 4.70803 5.3598 5.76684L3.06681 11.9573L2.11194 12.8407C1.28049 13.5487 0.799805 14.588 0.799805 15.6793V24.8123C0.8063 26.3063 2.021 27.5145 3.51502 27.5145H5.22989C6.72391 27.5145 7.93861 26.3063 7.9451 24.8123V23.4872H24.0545V24.8123C24.061 26.3063 25.2757 27.5145 26.7697 27.5145H28.4846C29.9786 27.5145 31.1933 26.3063 31.1998 24.8123V15.439C31.1933 14.4191 30.7776 13.4448 30.0371 12.7368ZM6.581 6.20855C6.78886 5.65641 7.31502 5.29915 7.89963 5.29915H24.5157C25.1003 5.29915 25.6265 5.66291 25.8343 6.20855L27.861 11.665H26.3475C25.9902 9.22906 23.7232 7.54667 21.2873 7.91043C19.3451 8.19624 17.8186 9.72274 17.5328 11.665H4.55433L6.581 6.20855ZM25.0224 11.665H18.8449C19.2022 9.95658 20.8781 8.8653 22.5865 9.22257C23.8077 9.48239 24.7625 10.4373 25.0224 11.665ZM6.64596 24.8123C6.63946 25.5918 6.00938 26.2154 5.22989 26.2154H3.51502C2.73553 26.2154 2.10545 25.5918 2.09895 24.8123V23.1104C2.48869 23.3638 3.00186 23.4872 3.51502 23.4872H6.64596V24.8123ZM29.9007 24.8123C29.8942 25.5918 29.2641 26.2154 28.4846 26.2154H26.7697C25.9902 26.2154 25.3601 25.5853 25.3537 24.8123V23.4872H28.4846C28.9978 23.4872 29.5109 23.3638 29.9007 23.1104V24.8123ZM28.4846 22.188H3.51502C2.74203 22.1945 2.10545 21.5774 2.09895 20.798V15.6793C2.09895 14.9648 2.41724 14.2827 2.96288 13.8215C2.96938 13.815 2.98237 13.8021 2.98886 13.7956L3.87228 12.9641H28.4716L29.0952 13.6332C29.1017 13.6462 29.1212 13.6527 29.1277 13.6656C29.6148 14.1268 29.8942 14.7699 29.8942 15.439V20.798H29.9007C29.8942 21.5709 29.2576 22.1945 28.4846 22.188Z" fill="#222222" />
                            <path d="M9.37293 15.5625H4.50114C4.14387 15.5625 3.85156 15.8548 3.85156 16.2121V19.5899C3.85156 19.9471 4.14387 20.2394 4.50114 20.2394H9.37293C9.73019 20.2394 10.0225 19.9471 10.0225 19.5899V16.2121C10.0225 15.8548 9.73019 15.5625 9.37293 15.5625ZM8.72336 18.9403H5.15071V16.8616H8.72336V18.9403Z" fill="#222222" />
                            <path d="M27.497 15.5625H22.6252C22.2679 15.5625 21.9756 15.8548 21.9756 16.2121V19.5899C21.9756 19.9471 22.2679 20.2394 22.6252 20.2394H27.497C27.8542 20.2394 28.1465 19.9471 28.1465 19.5899V16.2121C28.1465 15.8548 27.8542 15.5625 27.497 15.5625ZM26.8474 18.9403H23.2747V16.8616H26.8474V18.9403Z" fill="#222222" />
                            <path d="M19.1363 18.2905H12.8615C12.5042 18.2905 12.2119 18.5828 12.2119 18.9401C12.2119 19.2974 12.5042 19.5897 12.8615 19.5897H19.1363C19.4936 19.5897 19.7859 19.2974 19.7859 18.9401C19.7859 18.5828 19.4936 18.2905 19.1363 18.2905Z" fill="#222222" />
                            <path d="M19.1363 16.2769H12.8615C12.5042 16.2769 12.2119 16.5692 12.2119 16.9264C12.2119 17.2837 12.5042 17.576 12.8615 17.576H19.1363C19.4936 17.576 19.7859 17.2837 19.7859 16.9264C19.7859 16.5692 19.4936 16.2769 19.1363 16.2769Z" fill="#222222" />
                        </svg>
                    </div>

                    <div class="ml-3" style="flex: 1">
                        <h3 class="pb-3">By Car or Taxi</h3>
                        <p class="mb-3">
                            Seymour Motel is located approximately 100 kilometers away from Melbourne Central Station, roughly 1 hour and 30 minutes if you’re driving. From State Route 55 in Mickleham, take National Highway M31 to Seymour-Tooborac, then follow the C384 exit toward Seymour and you will arrive at our motel.
                        </p>
                    </div>
                </div>


            </div>
            <div class="location__map-popup location__map-public">
                <div class="d-flex">
                    <div class="pt-1">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.5731 0.000976562H12.5566C11.1532 0.0725956 10.0706 1.2635 10.1326 2.66744V24.5323C10.1326 24.5403 10.1368 24.5469 10.1372 24.5548C10.139 24.615 10.151 24.6746 10.1728 24.7308L10.1761 24.742L10.177 24.745L11.4391 27.6453C11.5935 28.0158 11.9529 28.2593 12.3541 28.2653H12.7992V30.3984C12.801 30.5805 12.8342 30.761 12.8975 30.9317H6.39958V21.3325C6.39865 20.4493 5.68289 19.7336 4.79972 19.7326V10.6297C7.03453 10.3482 8.66539 8.37777 8.52434 6.12971C8.38329 3.88165 6.51889 2.13055 4.26639 2.13055C2.01389 2.13055 0.149547 3.88165 0.00849623 6.12971C-0.132554 8.37777 1.49831 10.3482 3.73312 10.6297V19.7326C2.84994 19.7336 2.13419 20.4493 2.13326 21.3325V30.9317H0.53339C0.238852 30.9317 0.000121936 31.1704 0.000121936 31.465C0.000121936 31.7595 0.238852 31.9982 0.53339 31.9982H31.4641C31.7586 31.9982 31.9974 31.7594 31.9974 31.465C31.9974 31.1705 31.7586 30.9317 31.4641 30.9317H29.2327C29.2959 30.7609 29.3292 30.5805 29.3309 30.3984V28.2653H29.7757C30.1768 28.2592 30.5361 28.0159 30.6907 27.6458L31.9531 24.745L31.954 24.7422C31.9556 24.7384 31.9559 24.7342 31.9575 24.7303C31.9794 24.674 31.9914 24.6143 31.9931 24.5539C31.9934 24.5463 31.9974 24.5399 31.9974 24.5323V2.66744C32.0594 1.26343 30.9767 0.0725331 29.5731 0.000976562ZM1.06672 6.40044C1.06672 4.63328 2.49929 3.20071 4.26645 3.20071C6.03361 3.20071 7.46618 4.63328 7.46618 6.40044C7.46618 8.1676 6.03361 9.60017 4.26645 9.60017C2.50004 9.59824 1.06866 8.16679 1.06672 6.40044ZM5.33299 30.9318H3.19985V21.3326C3.20023 21.0382 3.43877 20.7997 3.73312 20.7993H4.79972C5.09407 20.7997 5.33261 21.0382 5.33299 21.3326V30.9318ZM15.9988 30.3984C15.9984 30.6928 15.7599 30.9313 15.4655 30.9317H14.3989C14.1046 30.9313 13.866 30.6928 13.8656 30.3984V28.2653H15.9988V30.3984ZM16.9671 30.9318C17.0303 30.761 17.0636 30.5805 17.0653 30.3985V28.2654H25.0646V30.3985C25.0665 30.5806 25.0997 30.761 25.1629 30.9318H16.9671ZM28.2644 30.3984C28.2641 30.6928 28.0256 30.9314 27.7312 30.9317H26.6646C26.3702 30.9314 26.1315 30.6928 26.1313 30.3984V28.2653H28.2644V30.3984ZM29.7221 27.1987H12.408L11.4797 25.0656H30.6507L29.7221 27.1987ZM18.6652 23.999V22.9324C18.6656 22.638 18.9042 22.3995 19.1985 22.3991H22.9315C23.2259 22.3995 23.4644 22.638 23.4648 22.9324V23.999H18.6652ZM30.9308 2.66744V23.999H24.5314V22.9324C24.5304 22.0492 23.8147 21.3334 22.9315 21.3325H19.1985C18.3153 21.3334 17.5996 22.0492 17.5986 22.9324V23.999H11.1992V2.66744C11.1389 1.85295 11.7432 1.14069 12.5566 1.06757H29.5731C30.3866 1.14069 30.9911 1.85288 30.9308 2.66744Z" fill="#222222" />
                            <path d="M28.2643 2.13379H13.8655C12.9823 2.13473 12.2666 2.85048 12.2656 3.73366V4.26692C12.2666 5.1501 12.9823 5.86585 13.8655 5.86679H28.2643C29.1475 5.86585 29.8632 5.1501 29.8641 4.26692V3.73366C29.8631 2.85048 29.1475 2.13473 28.2643 2.13379ZM28.7976 4.26692C28.7972 4.56134 28.5586 4.79994 28.2643 4.80019H13.8655C13.5711 4.79982 13.3326 4.56128 13.3322 4.26692V3.73366C13.3326 3.43931 13.5711 3.20076 13.8655 3.20039H28.2643C28.5587 3.2007 28.7973 3.43924 28.7976 3.73366V4.26692Z" fill="#222222" />
                            <path d="M14.3988 18.666C13.2207 18.666 12.2656 19.6211 12.2656 20.7992C12.267 21.9767 13.2212 22.931 14.3988 22.9323C15.5769 22.9323 16.5319 21.9772 16.5319 20.7992C16.5319 19.6211 15.5769 18.666 14.3988 18.666ZM14.3988 21.8657C13.8097 21.8657 13.3322 21.3882 13.3322 20.7992C13.3327 20.2103 13.8099 19.7332 14.3988 19.7326C14.9878 19.7326 15.4654 20.2101 15.4654 20.7992C15.4654 21.3882 14.9878 21.8657 14.3988 21.8657Z" fill="#222222" />
                            <path d="M27.7318 18.666C26.5537 18.666 25.5986 19.6211 25.5986 20.7992C25.5986 21.9772 26.5537 22.9323 27.7318 22.9323C28.9099 22.9323 29.8649 21.9772 29.8649 20.7992C29.8637 19.6216 28.9094 18.6673 27.7318 18.666ZM27.7318 21.8657C27.1427 21.8657 26.6652 21.3882 26.6652 20.7992C26.6652 20.2101 27.1427 19.7326 27.7318 19.7326C28.3208 19.7326 28.7984 20.2101 28.7984 20.7992C28.7977 21.3879 28.3206 21.8651 27.7318 21.8657Z" fill="#222222" />
                            <path d="M28.2643 6.93359H13.8655C12.9823 6.93453 12.2666 7.65028 12.2656 8.53346V15.9995C12.2666 16.8827 12.9823 17.5984 13.8655 17.5994H28.2643C29.1475 17.5984 29.8632 16.8827 29.8641 15.9995V8.53346C29.8631 7.65028 29.1475 6.93453 28.2643 6.93359ZM28.7976 15.9995C28.7972 16.2939 28.5586 16.5325 28.2643 16.5327H13.8655C13.5711 16.5323 13.3326 16.2938 13.3322 15.9995V8.53346C13.3326 8.23911 13.5711 8.00057 13.8655 8.00019H28.2643C28.5587 8.0005 28.7973 8.23905 28.7976 8.53346V15.9995Z" fill="#222222" />
                        </svg>
                    </div>
                    <div class="ml-3" style="flex: 1">
                        <h3 class="pb-3">By Subway</h3>
                        <p class="mb-3">
                            It will take approximately 2 hours by subway to get to Seymoure Motel from Melbourne Central Station. Enter via Elizabeth St-Stop 5 and take the subway to Southern Cross, then from Southern Cross to Seymour Station. Our motel is only 10 minutes away from the station by cab or taxi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('inc/cta'); ?>

    <?php get_template_part('inc/gallery'); ?>

    <!-- END WELCOME -->
</main>
<?php get_footer(); ?>

<script>
    var listNav = $(".location__nav-wrapper .location__nav-item");
    for (let index = 0; index < listNav.length; index++) {
        const nav = $(listNav[index]);
        nav.click(function() {
            for (let index = 0; index < listNav.length; index++) {
                const element = $(listNav[index]);
                element.removeClass("active");
            }

            var listPopup = $(".location__map-wrapper .location__map-popup");
            console.log(listPopup);
            for (let index = 0; index < listPopup.length; index++) {
                const element = $(listPopup[index]);
                element.removeClass("active");
            }

            nav.toggleClass("active");
            let popup;
            if (index === 0) {
                popup = ".location__map-location";
            } else if (index === 1) {
                popup = ".location__map-car";
            } else if (index === 2) {
                popup = ".location__map-public";
            }
            if (popup) {
                $(popup).toggleClass("active");
            }
        });
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const shareButton = document.querySelector(".share-button");
        shareButton.addEventListener("click", (event) => {
            if (navigator.share) {
                navigator
                    .share({
                        title: "WebShare API Demo",
                        url: "https://codepen.io/ayoisaiah/pen/YbNazJ",
                    })
                    .then(() => {
                        console.log("Thanks for sharing!");
                    })
                    .catch(console.error);
            } else {
                $("#share-modal-wrapper").modal("toggle");
                // shareDialog.classList.add("is-open");
                console.log(`cannotshare`);
            }
        });

        $("#share-modal-wrapper .modal__close-btn").click(function() {
            $("#share-modal-wrapper").modal("toggle");
        });

        $(".copy__btn").click(function() {
            navigator.clipboard.writeText(
                "https://goo.gl/maps/3L5kxHowCJoJBjQQ6"
            );
        });

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
</body>

</html>