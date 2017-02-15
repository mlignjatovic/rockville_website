<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="icon.png">
    <meta name="description" content="Rockville Remodeling is full-service remodeling company, licensed and insured for work in Maryland and Washington, DC.">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rockville Remodeling</title>
    <link rel="stylesheet" href="/css/foundation.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
    <link rel="stylesheet" href="/css/main.css">
     
  </head>
  <body>
  
    <?php echo $this->render('header.html',$this->mime,get_defined_vars(),0); ?>


    <?php echo $this->render($content,$this->mime,get_defined_vars(),0); ?>



    <?php echo $this->render('footer.html',$this->mime,get_defined_vars(),0); ?>

    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/vendor/what-input.js"></script>
    <script src="/js/vendor/foundation.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="/js/slick.min.js"></script>
    <script>
      $(document).foundation();
      $(".top-bar").sticky({topSpacing:0, zIndex:1000});
      $('.your-class').slick({
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 4000
      });
    </script>
  </body>
</html>
