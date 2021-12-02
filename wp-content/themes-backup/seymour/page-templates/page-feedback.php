<?php
/**
 * Template Name: Feedback Template
 */
get_header();

global $post;
?>
<div id="pushIt">
    <main class="main">
        <?php if(have_posts()): while(have_posts()) :the_post();?>
            <?php $back_image=(get_field('banner_image'))? get_field('banner_image'):get_bloginfo('template_directory')."/images/static-bg-1.jpg";?>
            <div class="static-bg relative fill" style="background-image:url('<?php echo $back_image;?>')">
                <div class="cover absolute">
                    <div class="mytable">
                        <div class="table-cell va-bottom">
                            <div class="sb-caption">
                                <div class="container">
                                    <h2><?php the_title();?></h2>
                                    <div class="vspace10px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cover absolute sb-overlay"></div>
            </div>
        <?php endwhile;  endif;?>
        <div class="vspace40px"></div>
        <div class="contacts">
            <div class="container">

                <!-- enquiry form -->
                <div class="enquiry-button text-center clearfix">
                    <a>
                        Please be kind enough to fill out the following form to reserve your accommodation.
                    </a>
                </div>
                <div class="vspace15px"></div>
            </div>
            <div class="vspace40px"></div>
        </div>
        <?php get_footer();?>
    </main>
</div>
<script>
    (function($) {
        var geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(-37.008620, 145.146963);
        var myOptions = {
            scrollwheel: false,
            zoom : 13,
            center : latlng,
            mapTypeId : google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map($('#shortcode_map_383')[0], myOptions);

        geocoder.geocode({
            'latLng' : latlng
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {

                var marker = new google.maps.Marker({
                    map : map,
                    position : latlng
                });

                marker.setPosition(latlng); map.setCenter(latlng);

            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
    })(jQuery);

</script>
</body>
</html>