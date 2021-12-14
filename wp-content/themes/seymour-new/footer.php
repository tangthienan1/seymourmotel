<div class="copyright">
  <div class="copyright__flex">
    <div class="copyright__flex-policy">
      <a href="/seymour-policy" style="text-decoration: underline !important">Privacy Policy</a>
      <p class="text -center">&copy;<?php echo date('Y') - 1; ?> Seymour Motel. All Rights Reserved.</p>
    </div>
    <div class="copyright__flex-society">
      <div class="text-center">
        <img class="mr-1" src="<?php bloginfo('template_directory'); ?>/icons/instagram.svg" />
        <img class="mr-1" src="<?php bloginfo('template_directory'); ?>/icons/facebook.svg" />
      </div>
    </div>
    <div class="copyright__flex-address">144 Goulburn Valley Hwy, Seymour, VIC 3660</div>
  </div>
  <div class="social clear clearfix">
    <div class="div-center">
      <?php dynamic_sidebar('social-links'); ?>
    </div>
  </div>
</div>
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
        375: {
          grid: {
            rows: 2,
            cols: 2,
            gap: {
              row: "1rem",
              col: "1rem",
            },
          },
        },
        1440: {
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