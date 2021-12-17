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
            <div style="background-color: #e9e8e5" class="px-6 py-6 justify-content-between row  mx-0">
                <div class="col-12 col-md-3">
                    <h2 style="color: #c0bcb7">Private Policy</h2>
                </div>
                <div class="col-12 col-md-6 pl-5 pl-md-0">
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
                <div class="row justify-content-center mx-0">
                    <div class="col-8 col-md-5 col-xl-3 pb-2">
                        <button class="btn w-100 btn-lg btn-primary" data-toggle="modal" data-target="#book-modal-wrapper" style="margin-right: 14px">
                            BOOK NOW
                        </button>
                    </div>
                    <div class="col-8 col-md-5 col-xl-3">
                        <a href="/how-to-book">
                            <button class="btn w-100 btn-lg btn-outline-primary">
                                HOW TO BOOK
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

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