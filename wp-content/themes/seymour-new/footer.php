<div class="copyright">
  <div class="copyright__flex">
    <div class="copyright__flex-policy">
      <a href="#">Privacy Policy</a>
      <p class="text -center">&copy;<?php echo date('Y') - 1; ?> Seymour Motel. All Rights Reserved.</p>
    </div>
    <div class="copyright__flex-society">
      <i class="fab fa-instagram"></i>
      <i class="fab fa-facebook"></i>
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