   <header class="header clearfix visible-lg">
       <div class="container-fluid nav-padding">
           <div class="mytable">
               <div class="logo table-cell va-middle">
                   <a href="<?php echo home_url('/'); ?>">
                       <img src="<?php bloginfo('template_directory'); ?>/icons/seymour-motel-logo-new.png" alt="Seymour Motel - Seymour Accommodation - Best Seymour Motel">
                   </a>
               </div>
               <div class="menu-btn">
                   <div class="menu-btn__burger"></div>
               </div>
               <div class="mynav nav-topic table-cell va-middle clearfix">
                   <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'floated-list clearfix pull-right', 'menu' => 'primary')); ?>
               </div>
               <div class="flex-button">
                   <div style="width:268px" class="tol_no mynav hidden-md hidden-lg un-danger">
                       <p>BOOK DIRECT +61 3 5792 1500</p>
                       <p>CALL US</p>
                   </div>
                   <div class="tol_no mynav hidden-md hidden-lg danger">
                       <a href="https://useross.com/booking.php?dialog=motel&motel_id=433">
                           <p>BOOK NOW</p>
                       </a>
                   </div>
               </div>
           </div>
           <div class="subMenu">
               <div>
                   <ul>
                       <li><a href="/how-to-book">How to book?</a></li>
                       <li><a href="/welcome">Welcome</a></li>
                       <li><a href="/facilities">Facilities</a></li>
                       <li><a href="/area">Area</a></li>
                   </ul>

               </div>
               <div class="sub-menu-description">
                   <div class="arrow"></div>
                   <p>Book direct to have the best price
                       +61 3 5792 1500 </p>
               </div>
           </div>
       </div>
   </header>