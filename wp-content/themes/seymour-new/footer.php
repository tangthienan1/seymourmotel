<footer class="footer px-6" style="min-height: 112px">
  <div class="row align-items-center mx-0 justify-content-between" style="padding: 24px 0px; border-top: 1px solid #c0bcb7">
    <div class="
            text-center
            col-12
            d-block d-md-none
            pb-5
            copyright__flex-society
          ">
      <img class="mr-1" src="<?php bloginfo('template_directory'); ?>/icons/instagram.svg" />
      <img class="mr-1" src="<?php bloginfo('template_directory'); ?>/icons/facebook.svg" />
    </div>
    <div class="d-none d-md-block col-6 col-md-5">
      <a href="/seymour-policy">
        <p style="text-decoration: underline; color: #222222">
          Privacy policy
        </p>
      </a>
      <p style="color: #c0bcb7">
        ©2020 Seymour Motel. All Rights Reserved.
      </p>
    </div>
    <div class="text-center col-3 d-none d-md-block copyright__flex-society">
      <img class="mr-1" src="<?php bloginfo('template_directory'); ?>/icons/instagram.svg" />
      <img class="mr-1" src="<?php bloginfo('template_directory'); ?>/icons/facebook.svg" />
    </div>
    <div class="footer-tab col-7 col-md-4 px-0 d-flex justify-content-end">
      <p style="color: #c0bcb7; width: 50%; text-align: left">
        144 Goulburn Valley Hwy, Seymour, VIC 3660
      </p>
    </div>
    <div class="footer-mob col-7 col-md-4 px-0 d-flex">
      <p style="color: #c0bcb7;text-align: left">
        144 Goulburn Valley Hwy, Seymour, VIC 3660
      </p>
    </div>
    <div class="d-block d-md-none col-5 text-right px-0">
      <a href="tel:+61 3 5792 1500 ">
        <p style="text-decoration: underline; color: #222222">
          Call +61 3 5792 1500
        </p>
      </a>
      <a href="/privacy">
        <p style="text-decoration: underline; color: #222222">
          Privacy Policy
        </p>
      </a>
    </div>
  </div>
  <div class="text-center d-block d-md-none" style="color: #c0bcb7">
    <p style="padding: 24px 0px; border-top: 1px solid #c0bcb7">
      ©2020 Seymour Motel. All Rights Reserved.
    </p>
  </div>
</footer>

<?php wp_footer(); ?>

<script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-773976-8', 'auto');
  ga('send', 'pageview');
</script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var galley = document.getElementById("gallery");
    if (galley) {
      var viewer = new Viewer(galley, {
        title: function(image) {
          return (
            image.alt + " (" + (this.index + 1) + "/" + this.length + ")"
          );
        },
      });
    }
    new WOW().init();


    var splide3 = new Splide(".splide-gallery", {
      arrows: false,
      type: "loop",
      pagination: false,
      autoplay: true,
      grid: {
        rows: 2,
        cols: 2,
        gap: {
          row: "1rem",
          col: "1rem",
        },
      },
      breakpoints: {
        425: {
          grid: {
            rows: 2,
            cols: 2,
            gap: {
              row: "1rem",
              col: "1rem",
            },
          },
        },
        2560: {
          grid: false,
          perPage: 3,
        },
      },
    });
    splide3.mount(window.splide.Extensions);
    $(".splide-gallery .slide__btn-prev").on("click", () => {
      splide3.go("<");
    });
    $(".splide-gallery .slide__btn-next").on("click", () => {
      splide3.go(">");
    });


  });
</script>
<script>
  let accommodation_node = document.getElementsByClassName('menu-item-has-children')[0]
  let about_node = document.getElementsByClassName('menu-item-has-children')[1]
  let poly1 = document.createElement('img')
  poly1.src = "<?php bloginfo('template_directory'); ?>/icons/poly.png";
  poly1.className = "nav-poly"
  let poly2 = document.createElement('img')
  poly2.src = "<?php bloginfo('template_directory'); ?>/icons/poly.png";
  poly2.className = "nav-poly"
  accommodation_node.firstChild.appendChild(poly1)
  about_node.firstChild.appendChild(poly2)
</script>
<script>
  const subMenuBtn = document.querySelector('.subMenu');
  const menuBtn = document.querySelector('.menu-btn');
  console.log('asdf', subMenuBtn)
  let menuOpen = false;
  menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
      subMenuBtn.classList.add('subOpen');
      menuBtn.classList.add('open');
      menuOpen = true;
    } else {
      subMenuBtn.classList.remove('subOpen');
      menuBtn.classList.remove('open');
      menuOpen = false;
    }
  });
</script>