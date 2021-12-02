<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>
<div id="pushIt">
    <main class="main">
    
            <?php $back_image=get_bloginfo('template_directory')."/images/static-bg-1.jpg";?>
            <div class="static-bg relative fill" style="background-image:url('<?php echo $back_image;?>')">
                <div class="cover absolute">
                    <div class="mytable">
                        <div class="table-cell va-bottom">
                            <div class="sb-caption">
                                <div class="container">
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cover absolute sb-overlay"></div>
        </div>

<div class="vspace40px"></div>

        <div class="accomodations accomodations-detail attraction" style="height:193px">
            <div class="container">
                <div class="row">
               <p class="text-center"><span class="pv">" <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?> "</span></p>
        </div>
    </div>
</div>
<div class="vspace40px"></div>
</main>
<?php get_footer();?>

</div>
</body>
</html>

