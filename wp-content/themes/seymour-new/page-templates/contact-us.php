<?php
/**
 * Template Name: Contact Us
 */

get_header();?>
<div id="pushIt">
    <main class="main">
        <div class="static-bg relative fill" style="background-image:url('<?php echo bloginfo('template_directory');?>/images/static-bg.jpg')">
            <div class="cover absolute">
                <div class="mytable">
                    <div class="table-cell va-bottom">
                        <div class="sb-caption">
                            <div class="container">
                               <h2><?php echo ucwords(get_the_title());?></h2>
                                <div class="vspace10px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cover absolute sb-overlay"></div>
        </div>
        <div class="vspace40px"></div>
        <div class="contacts">
            <div class="container">

                <!-- enquiry form -->
                <div class="enquiry-button text-center clearfix">
                    <a>
                        Please contact us by filling out the following form if you need any information about our services.
                    </a>
                </div>
                <div class="row"><div class="col-md-6">
                    
                     <?php if (is_active_sidebar('address-statement')) : ?>
                    <address>
                        <?php dynamic_sidebar('address-statement'); ?>
                    </address>

                <?php endif; ?>
          <div class="gmap relative text-center">
                      <div class="gmap relative text-center">
              <div id="shortcode_map_383" style="height: 400px !important;" class="google-map"></div>
          </div>
                </div>
                </div>

                  <div class="col-md-6">
                        <?php echo do_shortcode('[contact-form-7 id="439" title="contactform"]');?>
             
                  </div>

                </div>
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
