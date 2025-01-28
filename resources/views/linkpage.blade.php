<link rel="shortcut icon" href="images/favicon.ico" />
      <link rel="stylesheet" href="css/libs.min.css">
      <link rel="stylesheet" href="css/socialv.css?v=4.0.0">
      <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
      <link rel="stylesheet" href="vendor/font-awesome-line-awesome/css/all.min.css">
      <link rel="stylesheet" href="vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <body>
      @include('partials.header') 
      @include('partials.s-linking')
      <script>
      function toggleMenu(element) {
      const submenu = element.nextElementSibling;
      const arrow = element.querySelector('svg');

      if (submenu.classList.contains('open')) {
        submenu.classList.remove('open');
        arrow.style.transform = 'rotate(0deg)';
      } else {
        submenu.classList.add('open');
        arrow.style.transform = 'rotate(180deg)';
      }
    }

    function toggleNestedMenu(element) {
      const nestedMenu = element.querySelector('.unique-nested-menu');

      if (nestedMenu.style.display === 'block') {
        nestedMenu.style.display = 'none';
      } else {
        nestedMenu.style.display = 'block';
      }
    }
</script>
<script src="js/slider.js"></script>
    <!-- masonry JavaScript --> 
    <script src="js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="js/enchanter.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="js/sweetalert.js"></script>
    <!-- app JavaScript -->
    <script src="js/charts/weather-chart.js"></script>
    <script src="js/app.js"></script>
    <script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="js/lottie.js"></script>
      </body>
