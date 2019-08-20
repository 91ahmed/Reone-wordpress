<?php get_header(); ?>


<!-- Pre Loader -->
<!--<div id="loader"></div>-->

<div class="loading">
    <div class="loading_container">
      <div class="spinner"></div>
    </div>
</div>

<!--Header-->
<header id="home">
  <div class="header-top-area">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <!-- START LOGO -->
          <div class="logo"> <a href="<?= home_url(); ?>">REONE</a> </div>
          <!-- END LOGO -->
        </div>
        <div class="col-md-9">
          <!-- START MAIN MENU -->
          <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <!-- Logo -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a class="smoth-scroll" href="#home">Home</a></li>
                <li><a class="smoth-scroll" href="#aboutus-2">About Us</a></li>
                <li><a class="smoth-scroll" href="#services">Services</a></li>
                <li><a class="smoth-scroll" href="#team">Our Team</a></li>
                <li><a class="smoth-scroll" href="#portfolio">Portfolio</a></li>
                <li><a class="smoth-scroll" href="#pricing">Pricing</a></li>
                <li><a class="smoth-scroll" href="#blog">Blog</a></li>
                <li><a class="smoth-scroll" href="#contactus">Contact Us</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </nav>
          <!-- END MAIN MENU -->
        </div>
      </div>
    </div>
  </div>
  
  <!-- START REVOLUTION SLIDER 5.0 -->
  <div class="rev_slider_wrapper">
        <!-- START REVOLUTION SLIDER 5.0 auto mode -->
        <div id="rev_slider" class="rev_slider"  data-version="5.0">
        <ul>
          <!-- SLIDE-1  -->
        
        <li data-transition="fade"> 
        <!-- MAIN IMAGE --> 
        <img src="<?= get_template_directory_uri() ?>/images/sliders/01.jpg" alt=""  width="1920" height="820" > 
        
        <!-- LAYER .1 -->
        <div class="tp-caption  tp-resizeme rs-parallaxlevel-0" 
        id="slide-1-layer-1" 
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
        data-y="['center','center','center','center']" data-voffset="['-100','-70','-70','-70']" 
        data-fontsize="['62','62','42','32']"
        data-lineheight="['72','72','52','42']"
        data-width="900"
        data-height="none"
        data-color="#fff"
        data-transform_idle="o:1;tO:0% 50%;"
        data-transform_in="x:-50px;rY:-90deg;opacity:0;s:2000;e:Back.easeOut;" 
        data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-start="1000" 
        data-splitin="lines" 
        data-splitout="none" 
        data-responsive_offset="on" 
        data-elementdelay="0.05" 
        
        style="z-index: 7; font-weight:600; font-family: 'Roboto', sans-serif; text-align:center; text-transform:none; white-space: nowrap;">
        Welcome To
        
        </div>
        
        <!-- LAYER .2 -->
        <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
        id="slide-1-layer-2" 
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
        data-y="['center','center','center','center']" data-voffset="['-20','0','0','0']" 
        data-fontsize="['82','82','82','72']"
        data-lineheight="['82','82','82','72']"
        data-width="700"
        data-height="none"
        data-color="#fff"
        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
        data-start="1000" 
        data-splitin="lines" 
        data-splitout="none" 
        data-responsive_offset="on" 
        
        style="z-index: 7; font-weight:600; letter-spacing:1px; text-transform:uppercase; font-family: 'Roboto', sans-serif; text-align:center;  white-space: nowrap;">
		Our <span class="text-greendark">Studio!</span> 
        </div>
        
        <!-- LAYER .3 -->
        <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
        id="slide-1-layer-3" 
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
        data-y="['center','center','center','center']" data-voffset="['50','70','60','60']" 
        data-fontsize="['16','16','16','16']"
        data-lineheight="['18','18','18','18']"
        data-width="700"
        data-height="none"
        data-color="#fff"
        data-transform_idle="o:1;tO:0% 50%;"
        data-transform_in="x:-50px;rY:-90deg;opacity:0;s:2000;e:Back.easeOut;" 
        data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-start="1000" 
        data-splitin="lines" 
        data-splitout="none" 
        data-responsive_offset="on" 
        data-elementdelay="0.05" 
        
        style="z-index: 7; font-weight:500; letter-spacing:1px; text-transform:none; font-family: 'Roboto', sans-serif; text-align:center;  white-space: nowrap;">
        Reone is built for all kind of digital agencies. <br/>You can find everything you need in one template .
        </div>
        
    
        </li>
          
          
        
        <!-- SLIDE-2  -->
        <li data-transition="fade"> 
        <!-- MAIN IMAGE --> 
        <img src="<?= get_template_directory_uri() ?>/images/sliders/02.jpg" alt=""  width="1920" height="820" > 
        
        <!-- LAYER .1 -->
        <div class="tp-caption  tp-resizeme rs-parallaxlevel-0" 
        id="slide-2-layer-1" 
        data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
        data-y="['center','center','center','center']" data-voffset="['-90','-70','-70','-70']" 
        data-fontsize="['52','52','42','42']"
        data-lineheight="['62','62','42','42']"
        data-width="0"
        data-height="none"
        data-color="#fdc318"
        data-transform_in="x:500px;opacity:0;s:1500;e:Power4.easeInOut;" 
        data-transform_out="y:[175%];s:1500;e:Power2.easeInOut;s:1500;e:Power2.easeInOut;" 
        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
        data-start="1000" 
        data-splitin="none" 
        data-splitout="none" 
        data-responsive_offset="on" 
        
        style="z-index: 10;  font-weight:800; text-align:left; text-transform:uppercase; white-space: nowrap;">
        Reone Marketing <br/> Business Agency
 
        
        </div>
   
        
        
        <!-- LAYER .2 -->
        <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
        id="slide-2-layer-2" 
        data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
        data-y="['center','center','center','center']" data-voffset="['10','10','10','0']" 
        data-fontsize="['32','32','32','32']"
        data-lineheight="['32','32','32','32']"
        data-width="700"
        data-height="none"
        data-color="#fff"
        data-transform_idle="o:1;tO:0% 50%;"
        data-transform_in="x:-50px;rY:-90deg;opacity:0;s:2000;e:Back.easeOut;" 
        data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-start="1000" 
        data-splitin="lines" 
        data-splitout="none" 
        data-responsive_offset="on" 
        data-elementdelay="0.05"  
        
        style="z-index: 10; font-weight:600; text-transform:none; font-family: 'Roboto', sans-serif; text-align:left;  white-space: nowrap;">
		brand value<br/> can generate loyal customers
        </div>
        
        <!-- LAYER .3 -->
        <div class="tp-caption NotGeneric-CallToAction btn-1 rs-parallaxlevel-0" 
        id="slide-2-layer-3" 
        data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
        data-y="['middle','middle','middle','middle']" data-voffset="['90','90','90','90']" 
        data-width="none"
        data-height="none"
        data-whitespace="nowrap"
        data-transform_idle="o:1;"
        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
        data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(78, 75, 199, 0.00);cursor:pointer;"
        
        data-transform_in="y:top;s:1500;e:Power3.easeInOut;"
        data-transform_out="opacity:0;s:300;s:300;" 
        data-mask_in="x:0px;y:0px;" 
        data-mask_out="x:inherit;y:inherit;" 
        data-start="1250" 
        data-splitin="none" 
        data-splitout="none" 
        data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
        data-responsive_offset="on" 
        data-responsive="off"
        
        style="z-index: 10; white-space:  nowrap;outline:none;box-shadow:none; background-color:#fdc318; border-style:none;border-radius:4px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">More Details.. </div>
        
        
      
        
        </li>
        
          
        <!-- SLIDE-3  -->
        <li data-transition="fade"> 
        <!-- MAIN IMAGE --> 
        <img src="<?= get_template_directory_uri() ?>/images/sliders/03.jpg" alt=""  width="1920" height="820" > 
        
     
        
          <!-- LAYER .1 -->
        <div class="tp-caption  tp-resizeme rs-parallaxlevel-0" 
        id="slide-3-layer-1" 
        data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
        data-y="['center','center','center','center']" data-voffset="['-70','-70','-70','-70']" 
        data-fontsize="['52','52','42','42']"
        data-lineheight="['62','62','42','42']"
        data-width="none"
        data-height="none"
        data-color="#fff"
        data-transform_in="x:500px;opacity:0;s:1500;e:Power4.easeInOut;" 
        data-transform_out="y:[175%];s:1500;e:Power2.easeInOut;s:1500;e:Power2.easeInOut;" 
        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
        data-start="1000" 
        data-splitin="none" 
        data-splitout="none" 
        data-responsive_offset="on" 
        
        style="z-index: 10;  font-weight:800; text-align:left; text-transform:uppercase; white-space: nowrap;">
         Build Amazing Web  <br/>  Applications

        
        </div>
   
        
        
        <!-- LAYER .2 -->
        <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
        id="slide-3-layer-2" 
        data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
        data-y="['center','center','center','center']" data-voffset="['30','50','50','30']" 
        data-fontsize="['21','21','21','21']"
        data-lineheight="['32','32','32','32']"
        data-width="700"
        data-height="none"
        data-color="#fdc318"
        data-transform_in="x:-1000px;y:0px;opacity:0;s:1000;e:Power2.easeInOut;"
        data-transform_out="y:[175%];s:1500;e:Power2.easeInOut;s:1500;e:Power2.easeInOut;" 
        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
        data-start="1000" 
        data-splitin="none" 
        data-splitout="none" 
        data-responsive_offset="on" 
        
        style="z-index: 10; font-weight:600; text-transform:none; font-family: 'Roboto', sans-serif; text-align:left;  white-space: nowrap;">
        Bootstrap4 - PHP <br/> MySQl - Zurb Foundation
        </div>
        
        <!-- LAYER .3 -->
        <div class="tp-caption NotGeneric-CallToAction btn-1 rs-parallaxlevel-0" 
        id="slide-3-layer-3" 
        data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
        data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','90']" 
        data-width="none"
        data-height="none"
        data-whitespace="nowrap"
        data-transform_idle="o:1;"
        data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
        data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(78, 75, 199, 0.00);cursor:pointer;"
        
        data-transform_in="y:top;s:1500;e:Power3.easeInOut;"
        data-transform_out="opacity:0;s:300;s:300;" 
        data-mask_in="x:0px;y:0px;" 
        data-mask_out="x:inherit;y:inherit;" 
        data-start="1250" 
        data-splitin="none" 
        data-splitout="none" 
        data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
        data-responsive_offset="on" 
        data-responsive="off"
        
        style="z-index: 10; white-space:  nowrap;outline:none;box-shadow:none; background-color:#fdc318; border-style:none;border-radius:4px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">View Details ! </div>
        
        
      
        
        </li>
        
        
        
        </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
        </div>
  <!-- END OF SLIDER WRAPPER -->
</header>
<!--About Us Start-->
<section id="aboutus" class="aboutus">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
        <h5 class="margin-bottom-2 color-g">A quick &amp; transparent process</h5>
          <h2>We have a simple online application</h2>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        </div>
      </div>
    </div>
    <div class="space"></div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="sec">
        <div class="sec-box padding-1"> <i class="lnr lnr-star margin-bottom-1"></i>
          <h6 class="margin-bottom-1 font-weight color-g">Check your rates</h6>
          <p>It takes just a few minutes to provide us with your information</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="sec">
        <div class="sec-box padding-1"> <i class="lnr lnr-rocket margin-bottom-1"></i>
          <h6 class="margin-bottom-1 font-weight color-g">Sign your contract online</h6>
          <p>Using our secure application, you can e-sign your contract if pre-approved</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="sec">
        <div class="sec-box padding-1"> <i class="lnr lnr-layers margin-bottom-1"></i>
          <h6 class="margin-bottom-1 font-weight color-g">Great Studio</h6>
            <p>Money can be directly deposited into your bank account</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="sec">
        <div class="sec-box padding-1"> <i class="lnr lnr-map margin-bottom-1"></i>
          <h6 class="margin-bottom-1 font-weight color-g">Awesome Portfolio</h6>
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--About Us-2 Start-->
<section id="aboutus-2" class="aboutus-2">
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="display-table-cell vertical-align-middle">
                            <img src="<?= get_template_directory_uri() ?>/images/blog2.jpg" alt="" class="width-100">
                        </div>
                    </div>
                    <!--
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="display-table-cell vertical-align-middle">
                            <img src="/images/image-2.jpg" alt="" class="width-100">
                        </div>
                    </div>
                    -->
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="display-table-cell vertical-align-middle padding-twelve-lr">
                            <h1>Check your rates.</h1>
                            <h5>We always stay with our clients and respect their business. We deliver 100% and provide instant response.</h5>
                            <p class="margin-bottom-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem Ipsum has been the industry's standard dummy text since.</p>
                            <a href="javascript:{}" class="main-btn"><h6 class="font-weight">Read More</h6></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<div class="clearfix"></div>
<!--About Us 2 End-->
<!--Service start-->
  <section id="services" class="services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <div class="section-title">
                  <h2 class="font-weight">OUR SERVICES</h2>
                  <span class="dots dt-theme margin-bottom-1"></span>
                  <p class="font-weight">Powerful integrity of pixel perfect design and inspiring ideas</p>
                  </div>
                  <div class="section">
                    <?php
                        $wp_options = array(
                            'post_type' => 'services',
                            'order' => 'DESC',
                        );
                        $query = new WP_Query($wp_options);

                        if($query->have_posts()):
                            while($query->have_posts()):
                            $query->the_post();
                    ?>
                  <!-- Single Service Start -->                  
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <i class="<?php the_field('service_icon') ?>"></i>
                        <h3 class="font-weight"><?= the_title() ?></h3>
                        <p class="line-height-1"><?php the_content() ?></p>
                     </div>
                  </div>
                  <!-- Single Service End -->
                    <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>        
               </div>
            </div>
         </div>
         </div>
      </section>
      <div class="clearfix"></div>
<!--Service end-->
 <!--Team-->
 <section id="team" class="team">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <div class="section-title">
                  <h2 class="font-weight">OUR TEAM</h2>
                  <span class="dots dt-theme margin-bottom-1"></span>
                  <p class="font-weight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                  </div>
                           <div class="our-team-three">
                        <div class="team-members row">

                    <?php
                        $wp_options = array(
                            'post_type' => 'team',
                            'order' => 'DESC',
                        );
                        $query = new WP_Query($wp_options);

                        if($query->have_posts()):
                            while($query->have_posts()):
                            $query->the_post();
                    ?>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-member bg-white">
                                    <div class="single-member-header pos-r">
                                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="img-responsive">
                                        <div class="single-member-overlay overlay t-center">
                                            <div class="overlay bg-orange alpha-50"></div>
                                            <ul class="social-icons social-icons--circle list-inline is-inline-block pos-tb-center">
                                                <li class="social-icons__item">
                                                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook bg-orange"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter bg-orange"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin bg-orange"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus bg-orange"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="single-member-content p-15">
                                        <h5 class="font-weight"><?= the_title() ?></h5>
                                        <p class="font-weight color-y"><?php the_field('job') ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>    
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                   
                </section>
<!--Portfolio start-->
 <section id="portfolio" class="portfolio">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <div class="section-title">
                  <h2 class="font-weight">OUR PORTFOLIO</h2>
                  <span class="dots dt-theme margin-bottom-1"></span>
                  <p class="font-weight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                  </div>
                  </div>
                  </div>
                  </div>
      <!-- Portfolio Filters -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul class="portfolio-filter">
          <li class="filter active" data-filter="*">All</li>
          <li class="filter" data-filter=".wordpress">UI/UX</li>
          <li class="filter" data-filter=".jquery">Laravel</li>
          <li class="filter" data-filter=".php">Wordpress</li>
          <li class="filter" data-filter=".css">Mobile</li>
        </ul>
        <!-- /Portfolio Filters -->
        <!-- Portfolio Wrap -->
        <div class="row portfolio-container">
          <!-- single portfolio -->
          <div class="col-md-4 col-sm-6 col-xs-12 work php wordpress html"> 
            <div class="portfolio-item-content">
                                <img src="<?= get_template_directory_uri() ?>/images/gallery-img1.jpg" class="img-responsive" alt="">
                                <div class="portfolio-item-description">
                                    <ul class="list-inline text-center">
                                        <li>
                                            <a class="preview-icon" href="#work_id-1" data-title="Project Title" title="Fullscreen">
                                                <i class="fa fa-arrow-circle-down"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:{}" title="Details">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <h6 class="font-weight">Project Title</h6>
                                </div>
                            </div>
            <div id="work_id-1" class="mfp-hide work-popup"> <img src="images/gallery-img1.jpg" alt=""> </div>
          </div>
          <!-- single portfolio -->
          <div class="col-md-4 col-sm-6 col-xs-12 work wordpress jquery">
           <div class="portfolio-item-content">
                                <img src="<?= get_template_directory_uri() ?>/images/gallery-img2.jpg" class="img-responsive" alt="">
                                <div class="portfolio-item-description">
                                    <ul class="list-inline text-center">
                                        <li>
                                            <a class="preview-icon" href="#work_id-2" data-title="Project Title" title="Fullscreen">
                                                <i class="fa fa-arrow-circle-down"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-details.html" title="Details">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <h6 class="font-weight">Project Title</h6>
                                </div>
                            </div>
            <div id="work_id-2" class="mfp-hide work-popup"> <img src="images/gallery-img2.jpg" alt=""> </div>
          </div>
          <!-- single portfolio -->
          <div class="col-md-4 col-sm-6 col-xs-12 work jquery php">
           <div class="portfolio-item-content">
                                <img src="<?= get_template_directory_uri() ?>/images/gallery-img3.jpg" class="img-responsive" alt="">
                                <div class="portfolio-item-description">
                                    <ul class="list-inline text-center">
                                        <li>
                                            <a class="preview-icon" href="#work_id-3" data-title="Project Title" title="Fullscreen">
                                                <i class="fa fa-arrow-circle-down"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-details.html" title="Details">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <h6 class="font-weight">Project Title</h6>
                                </div>
                            </div>
            <div id="work_id-3" class="mfp-hide work-popup"> <img src="images/gallery-img3.jpg" alt=""> </div>
          </div>
          <!-- single portfolio -->
          <div class="col-md-4 col-sm-6 col-xs-12 work php css wordpress">
           <div class="portfolio-item-content">
                                <img src="<?= get_template_directory_uri() ?>/images/gallery-img4.jpg" class="img-responsive" alt="">
                                <div class="portfolio-item-description">
                                    <ul class="list-inline text-center">
                                        <li>
                                            <a class="preview-icon" href="#work_id-4" data-title="Project Title" title="Fullscreen">
                                                <i class="fa fa-arrow-circle-down"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-details.html" title="Details">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <h6 class="font-weight">Project Title</h6>
                                </div>
                            </div>
            <div id="work_id-4" class="mfp-hide work-popup"> <img src="images/gallery-img4.jpg" alt=""> </div>
          </div>
          <!-- single portfolio -->
          <div class="col-md-4 col-sm-6 col-xs-12 work css php html">
           <div class="portfolio-item-content">
                                <img src="<?= get_template_directory_uri() ?>/images/gallery-img5.jpg" class="img-responsive" alt="">
                                <div class="portfolio-item-description">
                                    <ul class="list-inline text-center">
                                        <li>
                                            <a class="preview-icon" href="#work_id-5" data-title="Project Title" title="Fullscreen">
                                                <i class="fa fa-arrow-circle-down"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-details.html" title="Details">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <h6 class="font-weight">Project Title</h6>
                                </div>
                            </div>
            <div id="work_id-5" class="mfp-hide work-popup"> <img src="images/gallery-img5.jpg" alt=""> </div>
          </div>
          <!-- single portfolio -->
          <div class="col-md-4 col-sm-6 col-xs-12 work html css">
           <div class="portfolio-item-content">
                                <img src="<?= get_template_directory_uri() ?>/images/gallery-img6.jpg" class="img-responsive" alt="">
                                <div class="portfolio-item-description">
                                    <ul class="list-inline text-center">
                                        <li>
                                            <a class="preview-icon" href="#work_id-6" data-title="Project Title" title="Fullscreen">
                                                <i class="fa fa-arrow-circle-down"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-details.html" title="Details">
                                                <i class="fa fa-link"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <h6 class="font-weight">Project Title</h6>
                                </div>
                            </div>
            <div id="work_id-6" class="mfp-hide work-popup"> <img src="images/gallery-img6.jpg" alt=""> </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- /Portfolio Wrap -->
</section>
<!--Portfolio end-->
<!--Counter start-->
<div class="counters">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="counter">
          <div class="counter-icon-box"><i class="lnr lnr-clock"></i></div>
          <div class="number animateNumber" data-num="5325"> <span>4032</span></div>
          <h4 class="font-weight">PROJECT COMPLETE</h4>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="counter">
          <div class="counter-icon-box"><i class="lnr lnr-users"></i></div>
          <div class="number animateNumber" data-num="160"> <span>345</span></div>
          <h4 class="font-weight">HAPPY CLIENTS</h4>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="counter">
          <div class="counter-icon-box"><i class="lnr lnr-heart"></i></div>
          <div class="number animateNumber" data-num="530"> <span>120</span></div>
          <h4 class="font-weight">CUPS OF TEA</h4>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="counter">
          <div class="counter-icon-box"><i class="lnr lnr-thumbs-up"></i></div>
          <div class="number animateNumber" data-num="49"> <span>90</span></div>
          <h4 class="font-weight">AWARD WINS</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Counter end-->
<!--Pricing start-->
<section id="pricing" class="pricing">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <div class="section-title">
                  <h2 class="font-weight">PRICING TABLE</h2>
                  <span class="dots dt-theme margin-bottom-1"></span>
                  <p class="font-weight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                  </div>
                  </div>
                  </div>
                  </div>
<div class="pricing-area pricing-one pt-60 pb-30 bg-gray">
                    <div class="container">                     
                        <div class="row row-tb-0">
                            <div class="col-md-4 pt-20 mb-20">
                                <div class="pricing-plan ptb-30 prl-20">
                                    <div class="plan-header">
                                        <h4 class="t-uppercase mb-10 font-20 font-weight-h">standard</h4>
                                        <h2 class="price color-g font-40 mb-10">$29</h2>
                                        <p class="t-uppercase font-weight">Per month</p>
                                    </div>
                                    <div class="plan-main ptb-20">
                                        <ul>
                                            <li><i class="fa fa-check"></i>Branded Reports</li>
                                            <li><i class="fa fa-check"></i>25 Analytics Compaign</li>
                                            <li><i class="fa fa-close"></i>1,900 Keywords</li>
                                            <li><i class="fa fa-close"></i>4 Social Account</li>
                                        </ul>
                                    </div>
                                    <div class="plan-footer">
                                        <a href="javascript:{}" class="btn">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-20">
                                <div class="pricing-plan plan-recommended ptb-30 prl-20">
                                    <i class="fa fa-bookmark"></i>
                                    <div class="plan-header">
                                        <h3 class="t-uppercase mb-10 font-20 font-weight-h">Professional</h3>
                                        <h2 class="price color-green font-40 mb-10">$90</h2>
                                        <p class="t-uppercase font-weight">Per month</p>
                                    </div>
                                    <div class="plan-main ptb-20">
                                        <ul>
                                            <li><i class="fa fa-check"></i>Branded Reports</li>
                                            <li><i class="fa fa-check"></i>25 Analytics Compaign</li>
                                            <li><i class="fa fa-check"></i>1,900 Keywords</li>
                                            <li><i class="fa fa-close"></i>4 Social Account</li>
                                        </ul>
                                    </div>
                                    <div class="plan-footer">
                                        <a href="javascript:{}" class="btn">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pt-20 mb-20">
                                <div class="pricing-plan ptb-30 prl-20">
                                    <div class="plan-header">
                                        <h3 class="t-uppercase mb-10 font-20 font-weight-h">Entercprise</h3>
                                        <h2 class="price color-g font-40 mb-10">$300</h2>
                                        <p class="t-uppercase font-weight">Per month</p>
                                    </div>
                                    <div class="plan-main ptb-20">
                                        <ul>
                                            <li><i class="fa fa-check"></i>Branded Reports</li>
                                            <li><i class="fa fa-check"></i>25 Analytics Compaign</li>
                                            <li><i class="fa fa-check"></i>1,900 Keywords</li>
                                            <li><i class="fa fa-check"></i>4 Social Account</li>
                                        </ul>
                                    </div>
                                    <div class="plan-footer">
                                        <a href="javascript:{}" class="btn">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
<!--Pricing end-->
<!--Testimonials start-->
<section id="testimonials" class="testimonials-wrapper">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2>Client <span>Testimonials</span></h2>
        <span class="heading-line"></span> </div>
      <div class="col-sm-8 col-sm-offset-2">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
          <!-- Testimonials Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel1" data-slide-to="1"></li>
            <li data-target="#myCarousel1" data-slide-to="2"></li>
          </ol>
          <!-- Testimonials slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <blockquote>
                <h3>Qulaity Support</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="test-img"> <img src="<?= get_template_directory_uri() ?>/images/testimonials1.png" alt=""></div>
                <div class="client-name">
                  <p><b>Michal Marek</b></p>
                  <p>Sales Manager</p>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote>
                <h3>Qulaity Support</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="test-img"> <img src="<?= get_template_directory_uri() ?>/images/testimonials2.png" alt=""></div>
                <div class="client-name">
                  <p><b>Michal Marek</b></p>
                  <p>Sales Manager</p>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote>
                <h3>Qulaity Support</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="test-img"> <img src="<?= get_template_directory_uri() ?>/images/testimonials3.png" alt=""></div>
                <div class="client-name">
                  <p><b>Michal Marek</b></p>
                  <p>Sales Manager</p>
                </div>
              </blockquote>
            </div>
          </div>
          <!-- Left and right controls -->
        </div>
      </div>
    </div>
  </div>
</section>
<!--Testimonials end-->
<!--Blog start-->
<section id="blog" class="blog-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <div class="section-title">
                  <h2 class="font-weight">OUR BLOG</h2>
                  <span class="dots dt-theme margin-bottom-1"></span>
                  <p class="font-weight">Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
                  </div>
                  </div>

<?php
    $wp_options = array(
        'posts_per_page' => 6,
        'order' => 'DESC',
    );
    $query = new WP_Query($wp_options);

    if($query->have_posts()):
        while($query->have_posts()):
        $query->the_post();
?>
      <!-- Start Single Blog Post -->
      <div class="col-md-4 col-sm-6">
        <div class="single-blog-post">
          <div class="single-blog-thumb"> <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="img-responsive"> </div>
          <div class="single-post-content">
            <ul class="post-meta">
              <li><a href="javascript:{}"><i class="fa fa-calendar"></i><?= get_the_date('M j, Y') ?></a> </li>
              <li><a href="javascript:{}"><i class="fa fa-comment"></i><?php comments_popup_link('0', '1', '%', 'comment-link', '0') ?> comment</a> </li>
            </ul>
            <h4><a href="<?php the_permalink() ?>"><?= the_title() ?></a></h4>
            <p class="font-weight"><?php the_excerpt() ?></p>
            <a class="blog-btn" href="<?php the_permalink() ?>">read more</a> </div>
        </div>
      </div>
      <!-- End Single Blog Post --> 
<?php
        endwhile;
    endif;
    wp_reset_postdata();
?>

  </div>
</section>
<div class="clearfix"></div>
<!--Blog end-->
<!--Client start-->
<div class="client">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="client-img">
<img src="images/c1.png" alt="" class="img-responsive">
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="client-img">
<img src="images/c2.png" alt="" class="img-responsive">
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="client-img">
<img src="images/c3.png" alt="" class="img-responsive">
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="client-img">
<img src="images/c4.png" alt="" class="img-responsive">
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="client-img">
<img src="images/c5.png" alt="" class="img-responsive">
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="client-img">
<img src="images/c6.png" alt="" class="img-responsive">
</div>
</div>
</div>
</div>
</div>
</div>
<!--Client end-->
<!--Contact start-->
<section id="contactus" class="contactus">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <div class="section-title">
                  <h2 class="font-weight">Contact Us</h2>
                  <span class="dots dt-theme margin-bottom-1"></span>
                  <p class="font-weight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                  </div>
                  </div>
                  </div>
                  </div>
  <div class="section contact-us">
         <div class="container">
            <div class="outer-box">
               <div class="company-data">
                  <ul class="row">
                     <li class="col-md-4 col-sm-4 col-xs-12">
                        <div class="box">
                           <span class="lnr lnr-location"></span>
                           4567 Matar<br>
                           St. nasr, Egypt Cairo 55337
                        </div>
                     </li>
                     <li class="col-md-4 col-sm-4 col-xs-12">
                        <div class="box">
                           <span class="lnr lnr-phone"></span>
                           (+20)1052344563<br>(+20)1082366475
                        </div>
                     </li>
                     <li class="col-md-4 col-sm-4 col-xs-12">
                        <div class="box">
                           <span class="lnr lnr-bubble"></span>
                           reone@gmail.com<br>
                           reone@yahoo.com
                        </div>
                     </li>
                  </ul>
               </div>
               <!-- Contact Form Start -->
               <div class="form-box clearfix">
                  <form id="contactform" data-toggle="validator" class="shake scroll-reveal">
                     <div class="form-group col-sm-6">
                        <input type="text" class="form-control" id="name" placeholder="Your name" required data-error="Name missing">
                        <div class="help-block with-errors"></div>
                     </div>
                     <div class="form-group col-sm-6">
                        <input type="email" class="form-control" id="email" placeholder="Your email" required>
                        <div class="help-block with-errors"></div>
                     </div>
                     <div class="form-group col-sm-12">
                        <textarea id="message" class="form-control" rows="6" placeholder="Write your message here" required></textarea>
                        <div class="help-block with-errors"></div>
                     </div>
                     <div class="col-sm-12">
                        <a class="btn" href="javascript:{}">Send Meaasage</a>
                        <div id="msgSubmit"></div>
                     </div>
                  </form>
               </div>
            <!-- Contact Form End -->
            </div>
         </div>
      </div>
</section>
<!--Contact end-->




<?php get_footer(); ?>