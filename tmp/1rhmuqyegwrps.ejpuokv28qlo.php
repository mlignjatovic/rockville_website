<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="/assets/icon.png">
    <meta name="description" content="Rockville Remodeling is full-service remodeling company, licensed and insured for work in Maryland and Washington, DC.">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/assets/css/foundation.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/slick-theme.css"/>
    <link rel="stylesheet" href="/assets/css/main.css">
     
  </head>
  <body>
  
    <?php echo $this->render('layout/header.html',$this->mime,get_defined_vars(),0); ?>


    <?php echo $this->render($content,$this->mime,get_defined_vars(),0); ?>



    <?php echo $this->render('layout/footer.html',$this->mime,get_defined_vars(),0); ?>

    <script src="/assets/js/vendor/jquery.js"></script>
    <script src="/assets/js/vendor/what-input.js"></script>
    <script src="/assets/js/vendor/foundation.js"></script>
    <script src="/assets/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="/assets/js/slick.min.js"></script>
    <script>
      $(document).foundation();
      $(".top-bar").sticky({topSpacing:0, zIndex:1000});
      $('.your-class').slick({
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 4000
      });
    </script>
     <?php if ($title=='Contact Us'): ?>
      <script>
      function initMap() {
        var uluru = {lat: 39.0938952, lng: -77.223252};
        var map = new google.maps.Map(document.getElementById('map'), {
          scrollwheel: false,
          zoom: 11,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
        </script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWYPAJcEXItYcNCTgP1PVVaxNEjQQ0oxM&callback=initMap">
        </script>
    <?php endif; ?>
  </body>
</html>
