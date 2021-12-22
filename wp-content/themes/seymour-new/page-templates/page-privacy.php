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

        <section class="row justify-content-center mx-0">
            <div class="
            mx-auto
            text-center
            pt-5
            pb-2
            container-sm
            col-12 col-md-8 col-lg-8
          ">
                <h1 class="rozha-font">Seymour Policy</h1>
            </div>
        </section>


        <section class="px-6">
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-md-8 col-lg-6">
                    <p class="subtitle pb-3">Personal Information</p>
                    <p>
                        When you use the Seymour website, we collect personal information about you. We may not be able to supply you with all of the services you have requested if we do not have it. Contact Information, Account, Profile Information, Identity Verification, and Payment Information are all part of this information.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-md-8 col-lg-6">
                    <p class="subtitle pb-3">How we use information we collecy</p>
                    <p>
                        Create and maintain a trusted and safer environment by detecting and preventing fraud, spam, abuse, security and safety incidents, and other harmful activity. Moreover, we provide payment services such as complying with legal obligations (such as anti-money laundering regulations), enforcing the Payment Terms and other payment policies.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-md-8 col-lg-6">
                    <p class="subtitle pb-3">Your Right</p>
                    <p>
                        In some jurisdictions, applicable law may entitle you to request specific copies of your personal information or information about how we handle your personal information, as well as to request copies of personal information that you have provided to us in a structured, commonly used, and machine-readable format, and/or to request that we transmit this information to another service provider (where technically feasible).
                    </p>
                </div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-md-8 col-lg-6">
                    <p class="subtitle pb-3">Security</p>
                    <p>
                        While no organization can guarantee complete security, we are constantly developing and updating administrative, technical, and physical security measures to help safeguard your data from unauthorized access, loss, destruction, or alteration.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-md-8 col-lg-6">
                    <p class="subtitle pb-3">Credit Card or Bank Transfer</p>
                    <p>
                        Payment is safely processed from your credit/debit card or bank account to the bank account of the accommodation provider through a third-party payment processor. Check the (reservation) details of your choice thoroughly for any such conditions prior to making your reservation.
                    </p>
                </div>
            </div>
        </section>

        <?php get_template_part('inc/cta'); ?>

        <?php get_template_part('inc/gallery'); ?>

        <!-- END WELCOME -->
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