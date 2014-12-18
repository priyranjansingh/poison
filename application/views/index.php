<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js gt-ie8">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>VIP</title>

<!--=================================
Meta tags
=================================-->

<meta name="description" content="">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

<!--=================================
Style Sheets
=================================-->
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<!--Plugins CSS Files-->
<link rel="stylesheet" type="text/css"
    href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.dialog.min.css'); ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/css/jplayer.pink.flag.css'); ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/css/jPlayer.css'); ?>"/>
<link rel="stylesheet" href="<?php echo base_url('assets/css/prettify-jPlayer.css'); ?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.theme.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.transitions.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.vegas.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animations.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fractionslider.css'); ?>">
<!--custom styles for Poison-->
<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">



<link rel="stylesheet" id="skin-css" type="text/css" href="<?php echo base_url('assets/css/colors/default.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/switcher.css'); ?>">
<script src="<?php echo base_url('assets/js/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
</head>


<body data-spy="scroll" data-target="#sticktop" data-offset="70">
<!--=====================================
Preloader
========================================-->
<div id="jSplash">
  <figure class="preload_logo">
    <img src="assets/img/basic/logo2.png" alt=""/>
  </figure>
</div>
<div class="wide_layout box-wide">
    <!--================
     Banner
    ====================-->
    <section id="section_1" class="banner fraction_wrapper">
    
        <div class="fractionSlide">
          <div data-delay="0" data-in="scrollLeft" class="slide">
                <img data-step="1" data-in="bottom" data-position="0,0" data-time="499" src="assets/img/slider/slide_circles.png" alt=""/>
                
                <img data-step="2" data-in="bottom" data-position="0,0" data-time="1499" src="assets/img/slider/slide1.png" alt=""/>
                
                <h1  data-delay="500" data-step="4" data-in="left" data-out="bottom" data-position="200,401" data-time="1000">Become a Member.</h1>
                
          </div>
          
          <div data-delay="0" data-in="scrollLeft" class="slide">
            <img data-step="1" data-in="bottom" data-position="0,0" data-time="499" src="assets/img/slider/slide_circles.png" alt=""/>
                 
                <img data-step="5" data-in="bottom" data-position="0,100" data-time="1499" src="assets/img/slider/slide2a.png" alt=""/>
                <img data-step="4" data-in="bottom" data-position="0,100" data-time="1499" src="assets/img/slider/slide2b.png" alt=""/>
                
                <img data-step="2" data-in="bottom" data-position="0,100" data-time="1499" src="assets/img/slider/slide2.png" alt=""/>
                
                <h1  data-delay="500" data-step="4" data-in="top" data-out="top" data-position="20,631" data-time="1000">HD Videos.</h1>
                <a href="#" class="btn btn-default" data-delay="500" data-step="5" data-in="right" data-out="top" data-position="149,799" data-time="1000">Enter Site</a>
                <a href="#" class="btn btn-white" data-delay="500" data-step="6" data-in="left" data-out="top" data-position="149,999" data-time="1000">Buy Membership</a>
                
          </div>
          
          
       </div>
    <!--=================================
    JPlayer (Audio Player)
    =================================-->
      <?php $this->load->view('tmpls/_playerTemplate');  ?>
    </section>
    <!--//banner--> 
    <!--=========================
     Header
    ===========================-->
    <header>
      <nav id="sticktop" class="navbar navbar-default" data-sticky="true">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#"><img src="assets/img/basic/logo.png" alt="logo"/></a> </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#section_3">News</a></li>
              <li><a href="#search">Search</a></li>
              <li><a href="#videos_section">Videos</a></li>
              <li><a href="#music_section">Songs</a></li>
              <li><a href="#section_12">About</a></li>
              <li><a href="#section_13">Connect</a></li>
            </ul>
          </div>
          <!--/.nav-collapse --> 
        </div>
      </nav>
    </header>
    
    <div class="sections_wrapper"> 
    <!--================
     Newsletter
    ====================-->
      <?php $this->load->view("tmpls/_newsTemplate") ?>
      <!--//Newsletter--> 
      
      <!--======================================
    Parallax/facebook page promotion Section
    ==========================================-->
      <section id="section_4" class="parallax parallax_one facebook_promo animatedParent " data-stellar-background-ratio="0.5">
        <div class="parallax_inner ">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1 class="animated fadeInUp">Poison music</h1>
                <h3 class="animated fadeInDown">"Like" If you love them! </h3>
                <a href="#" class="btn btn_fb">like us on facebook</a> </div>
              <!--column--> 
            </div>
            <!--row--> 
          </div>
          <!--container--> 
        </div>
        <!--parallax_inner--> 
      </section>
      <!--//parallax--> 
      <!--======================================
    Search Section
    ========================================-->
    <section id="search" class="tours_section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section_head_widget">
          <h2>Search</h2>
          <h5>whole library</h5>
          </div>
        </div>
      </div>
      <div class="tours_widget">
      <form id="searchForm">
        <div class="row">
          <div class="col-xs-12">
            <label>Search For</label>
            <br/>
            <input type="text" name="query" />
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <label>Filter By Artist Name or Song Name</label>
            <br/>
            <select name="filter">
              <option value="artist">Artist Name</option>
              <option value="song">Song Name</option>
              <option value="both">Both</option>
            </select>
          </div>
          <div class="col-xs-6">
            <label>Filter By Song or Video</label>
            <br/>
            <select name="type">
              <option value="1">Song</option>
              <option value="2">Video</option>
              <option value="0">Both</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4"></div>
          <div class="col-xs-4 text-center">
            <button id="search">Search</button>
          </div>
          <div class="col-xs-4"></div>
        </div>
      </form>
      <form id="bpmSearchForm">
        <div class="row">
          <div class="col-xs-6">
            <label>BPM From</label>
            <br/>
            <input type="text" name="bpmFrom" />
          </div>
          <div class="col-xs-6">
            <label>BPM To</label>
            <br/>
            <input type="text" name="bpmTo" />
          </div>
        </div>
        <div class="row">
          <div class="col-xs-4"></div>
          <div class="col-xs-4 text-center">
            <button id="bpm_search">Search By BPM</button>
          </div>
          <div class="col-xs-4"></div>
        </div>
      </form>
      </div>
    </div>
    </section>
    <!--======================================
    Search Section Ends
    ========================================-->


      <!-=======================================
        Video Starts
      =======================================--> 
      <?php 
      $data['videoGenres'] = $videoGenres;
      $data['videos'] = $videos;
        $this->load->view('tmpls/_videosTemplate',$data); 
      ?>
      <!-=======================================
        Video Ends
      =======================================--> 
    
      <!-=======================================
        Music Starts
      =======================================--> 

      <?php 
      $data['songGenres'] = $songGenres;
      $data['songs'] = $songs;
        $this->load->view('tmpls/_songsTemplate',$data); 
      ?>

      <!-=======================================
        Music Ends
      =======================================--> 

      <!--======================================
    About
    ==========================================-->
      <section id="section_12" class="about_section">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="section_head_widget animatedParent ">
                <h1 class="animated fadeInDown">Their amazing story</h1>
                <h4>how they came to be so famous.</h4>
              </div>
            </div>
            <!--section_head_widget--> 
          </div>
          <!--row-->
          
          <div class="row">
            <div class="col-xs-12">
              <div class="text_widget">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero ligula, mollis eget ipsum a, aliquet pellentesque nisi. Donec mollis vel orci eget consequat. Etiam ultrices eu erat eu facilisis. Morbi nec suscipit tortor. Sed eu est leo. Phasellus a enim a sem auctor sodales. Vestibulum interdum ultrices tincidunt. Vivamus suscipit odio id pretium commodo. Donec vitae pellentesque dui. Nullam a hendrerit mi, vel placerat neque. Nunc et nunc turpis. Mauris sed congue lectus, ut blandit diam. Sed pellentesque egestas magna in feugiat. Praesent in ipsum velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p>Quisque lacinia euismod lobortis. Pellentesque purus orci, consequat vel mi id, pretium accumsan urna. In hac habitasse platea dictumst. Aenean ut accumsan nunc. Nam ac bibendum mi. Maecenas ultricies blandit vehicula. Nullam posuere metus congue odio dictum vestibulum. Quisque pharetra, nisl sit amet fermentum dignissim, est felis consequat sapien, eu pellentesque nulla mi sed lacus. Aenean molestie condimentum consequat.</p>
                <p>Sed a lectus suscipit, blandit arcu a, vehicula nisi. Quisque faucibus elit ac mauris sodales auctor. Quisque scelerisque aliquam accumsan. Donec ullamcorper tortor nec nisl egestas, vitae interdum diam dignissim. Donec sollicitudin eu tellus in fermentum. Ut eu dui sit amet erat euismod euismod in non turpis. Pellentesque luctus dui massa.</p>
              </div>
            </div>
          </div>
        </div>
        <!--container--> 
      </section>
                
      <!--======================================
    Footer
    ==========================================-->
      <footer id="section_13" class="parallax parallax_five footer" data-stellar-background-ratio="0.5">
        <div class="parallax_inner">
          <div class="container">
            <ul class="channels_list row animatedParent " data-sequence="400">
              <li class="col-xs-12 col-sm-4 animated fadeInLeftShort" data-id="1"> <a href="#"><i class="fa fa-circular fa-music"></i>poison itunes</a></li>
              <li class="col-xs-12 col-sm-4 animated fadeInLeft" data-id="2"><a href="#"><i class="fa fa-soundcloud"></i>poison soundcloud</a></li>
              <li class="col-xs-12 col-sm-4  animated fadeInLeft" data-id="3"> <a href="#"><i class="fa fa-youtube"></i>poison youtube</a></li>
              <li class="col-xs-12 col-sm-4 animated fadeInLeft" data-id="4"> <a href="#"><i class="fa fa-instagram"></i>poison Instagram</a></li>
              <li class="col-xs-12 col-sm-4  animated fadeInLeft" data-id="5"> <a href="#"><i class="fa fa-flickr"></i>poison Flicker</a></li>
              <li class="col-xs-12 col-sm-4  animated fadeInLeft" data-id="6"> <a href="#"><i class="fa fa-pinterest"></i>poison pinterest</a></li>
            </ul>
            <div class="row">
              <div class="col-xs-12">
                <div class="copyrights">&copy; 2014 <a href="#">poison music</a>.</div>
              </div>
            </div>
          </div>
          <!--container--> 
        </div>
        <!--parallax_inner--> 
      </footer>
      <!--//parallax--> 
    </div>
</div>
<!--===================================================================
Scripts
====================================================================--> 
<script>
var videoPages = <?php echo $videoCount; ?>;
var songPages = <?php echo $songCount; ?>;
var base_url = "<?php echo base_url(); ?>";
var songGenre = "";
var songSubGenre = "";
var videoGenre = "";
var videoSubGenre = "";
</script>
<script src="<?php echo base_url('assets/js/jquery-1.11.0.min.js'); ?>"></script> 
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="<?php echo base_url('assets/js/jpreloader.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.mousewheel.min.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.easing-1.3.pack.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.stellar.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.carouFredSel-6.2.1-packed.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.sticky.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.dialog.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/jPlayer/jquery.jplayer.min.js'); ?>"></script> 
<!--script src="<?php echo base_url('assets/js/jquery.jplayer.inspector.js'); ?>"></script--> 
<script src="<?php echo base_url('assets/js/prettify-jPlayer.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.vegas.min.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/css3-animate-it.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.fractionslider.min.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.min.js'); ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.waitforimages.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.twbsPagination.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>  
<script src="<?php echo base_url('assets/js/vip.js'); ?>"></script>  
<script>

$('body').jpreLoader({
    splashID: "#jSplash",
    loaderVPos: '50%',
    autoClose: true,
});

/*====================================================================
Put Your Google Tracker Code here
===================================================================*/
</script>
</body>
</html>
