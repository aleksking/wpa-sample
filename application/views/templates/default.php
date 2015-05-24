<!DOCTYPE HTML>

<head>

<title>WPA 2016</title>
<meta name="keywords" content="WPA Manila 2016">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!-- Google Fonts -->
    
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<!-- CSS Files -->

<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/wpa/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/wpa/simple_menu.css">

<!-- slider -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/wpa/nivo-slider.css" type="text/css" media="screen"/>
    
<!-- JS Files -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>js/wpa/jquery.tools.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/slides/slides.min.jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/cycle-slider/cycle.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/nivo-slider/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/tabify/jquery.tabify.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/prettyPhoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/twitter/jquery.tweet.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/scrolltop/scrolltopcontrol.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/portfolio/filterable.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/modernizr/modernizr-2.0.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/swfobject/swfobject.js"></script>

<!-- FancyBox -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/wpa/fancybox/jquery.fancybox.css" media="all">
<script type="text/javascript" src="<?php echo base_url(); ?>js/wpa/fancybox/jquery.fancybox-1.2.1.js"></script>
      
  <script type="text/javascript">
      $(function() {
      $("#prod_nav ul").tabs("#panes > div", {effect: 'fade', fadeOutSpeed: 400});
  });
  </script>
  
  <script type="text/javascript">
          $(document).ready(function(){
          $(".pane-list li").click(function(){
          window.location=$(this).find("a").attr("href");return false;
      });
  
  }); //close doc ready
  </script>

</head>

<body>

    <div class="header">
    
      <div id="site_title"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/wpa/logo.png" /></a></div>

      <!-- Main Menu -->  
      <ol id="menu">
        <li class="active_menu_item"><a href="<?php echo base_url(); ?>">HOME</a>

        <li><a href="<?php echo base_url(); ?>congress">CONGRESS INFORMATION</a>
          <!-- sub menu -->
          <ol>     
            <li><a href="<?php echo base_url(); ?>committees">Committees</a></li>
            <li><a href="<?php echo base_url(); ?>venue">Venue</a></li>
            <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
          </ol>
        </li><!-- END sub menu -->

        <li><a href="<?php echo base_url(); ?>registration">REGISTRATION</a>
          <!-- sub menu -->
          <ol>     
            <li><a href="<?php echo base_url(); ?>credit_card">Credit Card Payments</a></li>
            <li><a href="<?php echo base_url(); ?>refund_policy">Refund Policy</a></li>
          </ol>
        </li><!-- END sub menu -->
          
        <li><a href="<?php echo base_url(); ?>programme">PROGRAMME</a></li>

        <li><a href="<?php echo base_url(); ?>accommodation">HOTEL AND TRAVEL</a>
          <!-- sub menu -->
          <ol>     
            <li><a href="<?php echo base_url(); ?>travel_agency">Appointed Travel Agency</a></li>
            <li><a href="<?php echo base_url(); ?>alt_accommodation">Alternative Accommodations</a></li>
            <li><a href="<?php echo base_url(); ?>optional_tour">Optional Tours</a></li>
          </ol>
        </li><!-- END sub menu -->
        
        <li><a href="<?php echo base_url(); ?>contact_person">CONTACT PERSON</a></li>

      </ol>
    
    
  </div><!-- END header -->


  <div id="container">
   
    <?php echo $body; ?>

    <div style="clear:both; height: 20px"></div>
  </div>
  <!-- END container -->


  <div id="footer">

    
    <!-- <div class="one-fourth">
        <h3>Useful Links</h3>
            <ul class="footer_links">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Ellem Ciet</a></li>
                <li><a href="#">Currivitas</a></li>
                <li><a href="#">Salim Aritu</a></li>
            </ul>
    </div>

    <div class="one-fourth">
        <h3>Terms</h3>
            <ul class="footer_links">
                <li><a href="#">Lorem Ipsum</a></li>
                <li><a href="#">Ellem Ciet</a></li>
                <li><a href="#">Currivitas</a></li>
                <li><a href="#">Salim Aritu</a></li>
            </ul>
    </div>
    

    <div class="one-fourth">
        <h3>Information</h3>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum rhoncus a felis.
        
        <div id="social_icons">
        Theme by <a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a><br /> Photos © <a href="http://dieterschneider.net" title="Dieter Schneider Photography">Dieter Schneider</a>
        </div>
        
    </div>
    

    <div class="one-fourth last">
        <h3>Socialize</h3>
            <img src="img/icon_fb.png" alt="Facebook">
            <img src="img/icon_twitter.png" alt="Facebook">
            <img src="img/icon_in.png" alt="Facebook">
    </div> -->

    <div style="clear:both"></div>
  </div> <!-- END footer -->

</body>
</html>