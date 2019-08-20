<?php
	get_header();
?>

<!--Header-->
<header id="home">
  <div class="header-top-area" style="background-color:#FFF;">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <!-- START LOGO -->
          <div class="logo"> <a href="<?= home_url(); ?>" style="color:#fdc625;">REONE</a> </div>
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
                <li><a class="smoth-scroll" style="color:#333;" href="<?= home_url() ?>">Home</a></li>
                <li><a class="smoth-scroll" style="color:#333;" href="<?= home_url() ?>/#aboutus-2">About Us</a></li>
                <li><a class="smoth-scroll" style="color:#333;" href="<?= home_url() ?>/#services">Services</a></li>
                <li><a class="smoth-scroll" style="color:#333;" href="<?= home_url() ?>/#team">Our Team</a></li>
                <li><a class="smoth-scroll" style="color:#333;" href="<?= home_url() ?>/#portfolio">Portfolio</a></li>
                <li><a class="smoth-scroll" style="color:#333;" href="<?= home_url() ?>/#pricing">Pricing</a></li>
                <li><a class="smoth-scroll" style="color:#333;" href="<?= home_url() ?>/#blog">Blog</a></li>
                <li><a class="smoth-scroll" style="color:#333;" href="<?= home_url() ?>/#contactus">Contact Us</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </nav>
          <!-- END MAIN MENU -->
        </div>
      </div>
    </div>
  </div>
</header>

<!--Blog start-->
<?php
   if(have_posts()):
      while(have_posts()):
         the_post();
?>
	<section id="blog" class="blog-wrapper" style="padding:145px 0;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="font-weight" style="line-height:40px;"><?= the_title() ?></h2>
						<span class="dots dt-theme margin-bottom-1"></span>
						<ul class="post-meta">
							<li><a href="javascript:{}"><i class="fa fa-calendar"></i><?= get_the_date('M j, Y') ?></a> </li>
							<li><a href="javascript:{}"><i class="fa fa-comment"></i><?php comments_popup_link('0', '1', '%', 'comment-link', '0') ?> comment</a> </li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12">
					<p style="max-width:800px;margin:50px auto;"><?php the_content() ?></p>
				</div>
			</div>
		</div>
	</section>
<?php
   endwhile;
      endif;
?>
<div class="clearfix"></div>
<!--Blog end-->

<?php
	get_footer();
?>