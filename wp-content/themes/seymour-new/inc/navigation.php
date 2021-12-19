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
                   <div class="tol_no mynav hidden-md hidden-lg un-danger">
                       <p>BOOK DIRECT +61 3 5792 1500</p>
                       <p>CALL US</p>
                   </div>
                   <div data-toggle="modal" data-target="#book-modal-wrapper" class="tol_no mynav hidden-md hidden-lg danger">
                       <p>BOOK NOW</p>
                   </div>
               </div>
               <div class="phone">
                   <img src="<?php bloginfo('template_directory'); ?>/icons/phone.png">
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
   <div class="modal fade" id="book-modal-wrapper" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg modal-dialog-centered">
           <div class="modal-content">
               <div class="book__popup-wraper modal-body">
                   <p>
                       Remember! It’s <span style="color: #b52804">cheaper</span> to
                       book direct <br />
                       than anywhere else online!
                   </p>
                   <p style="opacity: 0.7" class="mt-3">
                       If you find a cheaper rate call us direct on +61 3 5792 1500
                       <br />
                       and we’ll beat the price!
                   </p>
                   <a href="tel:+61357921500" class="btn btn-primary btn-lg w-100 mt-4">
                       DIRECT BOOKING +61 3 5792 1500
                   </a>
                   <a href="https://useross.com/booking.php?dialog=motel&motel_id=433">
                       <p class="book__popup-btn-online mt-2">BOOK ONLINE ANYWAY</p>
                   </a>
               </div>
           </div>
       </div>
   </div>