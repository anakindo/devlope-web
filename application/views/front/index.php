<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <!-->
<html lang="en">
<!--
<![endif]-->


<!-- Mirrored from tidytheme.com/barry/html/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 13:38:28 GMT -->
<head>
    <!-- TITLE OF SITE -->
    <title>PT Asia Resource System - IT Solution Provider</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Berry - Multipage Business HTML Template" />
    <meta name="keywords" content="Berry, parallax, one page, multipage, responsive, landing, html template" />
    <meta name="author" content="TidyTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/images/apple-touch-icon-114x114.png">


    <!-- CSS Begins
================================================== -->
    <!-- FONT ICONS -->
    <!-- font-awesome -->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Elegant Icons -->
    <link href="<?php echo base_url() ?>assets/icon/elegant-icons/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/icon/etlinefont-bower-master/style.css" rel="stylesheet">
    <!--/ FONT ICONS -->

    <!--Animate Effect-->
    <link href="<?php echo base_url() ?>assets/css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css" rel="stylesheet">

    <!--Pretty Photo for Image Preview-->
    <link href="<?php echo base_url() ?>assets/css/prcss" rel="stylesheet">

    <!--Owl Carousel -->
    <link href="<?php echo base_url() ?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assests/css/owl.transitions.css" rel="stylesheet">

    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nivo-preview.css" type="text/css" media="screen" />

    <!--BootStrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/normalize.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet">

    <!--Replace Your Color-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/colors/default-color.css">
    <!--Replace Your Color Ends-->

    <!-- Switcher Styles-->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo base_url() ?>assets/css/switcher.css" media="all" />
    <!-- END Switcher Styles -->

    <!-- Template Color Demo Examples -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/colors/color_1.css" title="alternate" media="all" /><!--Moderate orangeColor-->  
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/colors/color_2.css" title="next" media="all" /><!--Green Color-->    
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/colors/color_3.css" title="bookmark" media="all" /><!--Yellow Color-->   
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/colors/color_4.css" title="colorfr" media="all" /><!--Yellow Color-->    
    <!-- END Template Color Demo Examples -->
    
        <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- ::::::::::::::::::::::::::: Start: Preloader section ::::::::::::::::::::::::::: -->
    <div id="preloader"></div>
    <!-- ::::::::::::::::::::::::::: End: Preloader section ::::::::::::::::::::::::::: -->

<!-- nav -->
<navbar>
    <?php $this->load->view('front/part/navbar'); ?>
</navbar>
<!-- end nav -->

<!-- slider -->
<slider>
    <?php $this->load->view('front/part/slider'); ?>
</slider>
<!-- end slider -->

<!-- about -->
<about>
    <?php $this->load->view('front/part/about'); ?>
</about>
<!-- end about -->

<!-- service -->
<service>
    <?php $this->load->view('front/part/service');?>
</service>
<!-- end service -->
  
<!-- work -->
<work>
    <?php $this->load->view('front/part/work'); ?>
</work>
 <!-- end work -->

 <!-- team -->
<team>
    <?php $this->load->view('front/part/team'); ?>
</team>
<!-- end team -->

<!-- testi -->
<testi>
    <?php $this->load->view('front/part/testi'); ?>
</testi>
<!-- end testi -->

<!-- blog -->
<blog>
    <?php $this->load->view('front/part/blog'); ?>
</blog>
<!-- end blog -->

<!-- client -->
<client>
    <?php $this->load->view('front/part/client'); ?>
</client>
<!-- end client -->

<!-- footer -->
<footer>
    <?php $this->load->view('front/part/footer'); ?>
</footer>
<!-- end footer -->
<!-- START : Switcher 
========================================-->
<div class="demo_changer">
  <div class="demo-icon"><i class="icon_cog"></i></div>
  <div class="form_holder">
     <div class="layout_styles">
     <p>LAYOUT STYLE</p>
        <ul>
          <li><a href="index.html">Multipurpose v1</a></li>
          <li><a href="index-two.html">Multipurpose v2</a></li>
          <li> <a href="index-onepage.html">Landingpage v1</a></li>
          <li> <a href="index-onepage_v2.html">Landingpage v2</a></li>
          <li> <a href="index-onepage_v3.html">Landingpage v3</a></li>
        </ul> 
      </div>
      <p>CHOOSE YOUR COLOR</p>
      <div class="predefined_styles"> 
          <a href="#" rel="author" class="styleswitch"><img src="<?php echo base_url() ?>assets/images/switcher/color_1.jpg" alt=""></a>
          <a href="#" rel="alternate" class="styleswitch"><img src="<?php echo base_url() ?>assets/images/switcher/color_2.jpg" alt=""></a>    
          <a href="#" rel="next" class="styleswitch"><img src="<?php echo base_url() ?>assets/images/switcher/color_3.jpg" alt=""></a>
          <a href="#" rel="bookmark" class="styleswitch"><img src="<?php echo base_url() ?>assets/images/switcher/color_0.jpg" alt=""></a>
          <a href="#" rel="colorfr" class="styleswitch"><img src="<?php echo base_url() ?>assets/images/switcher/color_4.jpg" alt=""></a>
      </div>
      <span><a rel="tag" class="styleswitch" href="index-onepagec392.html?default=true">RESET STYLE</a></span>
  </div>
</div>
<!-- END Switcher 
========================================-->



    <!-- Scripts
========================================-->
    <!-- jquery -->
    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- Modernizer -->
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.6.2.min.js" type="text/javascript"></script>
    <!-- plugins -->
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- Use For Animation -->
    <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
    <!-- Use For carousel -->
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <!-- Use For Image Peview -->
    <script src="<?php base_url() ?>assets/js/jquery.prettyPhoto.js"></script>
    <!-- Use For mixitup gallery -->
    <script src="<?php echo base_url() ?>assets/js/jquery.mixitup.min.js"></script>
    <!-- Use For nivo slider -->
    <script src="<?php echo base_url() ?>assets/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/nivo-home.js" type="text/javascript"></script>
    <!-- Use For jquery Easing -->
    <script src="<?php echo base_url() ?>assets/js/jquery.easing.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.easing.compatibility.js"></script>
    <!-- Use For single Page Nav -->
    <script src="<?php echo base_url() ?>assets/js/jquery.singlePageNav.min.js"></script>
    <!--fswit Switcher   -->
    <script src="<?php echo base_url() ?>assets/js/fswit.js"></script>
    
    <!-- Custom Scripts
========================================-->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>


<!-- Mirrored from tidytheme.com/barry/html/index-onepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 13:38:29 GMT -->
</html>