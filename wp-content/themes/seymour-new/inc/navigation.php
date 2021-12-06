   <header class="header clearfix visible-lg">
       <div class="container-fluid nav-padding">
           <div class="mytable">
               <div class="logo table-cell va-middle">
                   <a href="<?php echo home_url('/'); ?>">
                       <img src="<?php bloginfo('template_directory'); ?>/icons/seymour-motel-logo-new.png" alt="Seymour Motel - Seymour Accommodation - Best Seymour Motel">
                   </a>
               </div>
               <div class="mynav nav-topic table-cell va-middle clearfix">
                   <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'floated-list clearfix uppercase pull-right', 'menu' => 'primary')); ?>
               </div>
               <div class="flex-button">
                   <div style="width:268px" class="tol_no mynav hidden-md hidden-lg un-danger">
                       <p>CALL US +61 3 5792 15000</p>
                   </div>
                   <div class="tol_no mynav hidden-md hidden-lg danger">
                       <p>Book now</p>
                   </div>
               </div>
           </div>
       </div>
   </header>