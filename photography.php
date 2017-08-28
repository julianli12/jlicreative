<!DOCTYPE html>
<html lang="en">
<head>

  <title>JLi Photography</title>
  <?php include_once('_links.php'); ?>

</head>
<body>

  <?php include_once('_navbar.php'); ?>

  <!-- <div class="container-fluid content">
    <div class="row space">
      <div class="col-xs-offset-1 col-xs-10 col-lg-offset-2 col-lg-8 text-center">
            <h1 >Get more with your story</h1>
            <p class="hidden-xs">We enhance your brand by capturing your story and taking you online. We offer professional photoshoots and custom websites for all your business needs.</p>
            <p class="visible-xs-block">We offer professional photoshoots and custom websites for all your business needs.</p>
            <a class="btn btn-new btn-lg" type="button" data-toggle="modal" data-target="#myModal">Get a Quote</a>
      </div>
    </div>
    <div class="row space">
      <div class="col-sm-offset-1 col-sm-10">
        <img src='img/bg-hero.png' alt="" class="hero">
      </div>
    </div>
  </div> -->

  <!-- carousel data-ride = auto start -->
  <div class="container-fluid room">
    <div class="row">
      <div class="col-xs-offset-1 col-xs-10 col-lg-offset-2 col-lg-8 text-center">
            <h1 class="feature-heading font-feel">Photography Service</h1>
      </div>
      <div class="carousel fade" data-ride="carousel" id="featured">

      <ol class="carousel-indicators">

      </ol>

      <div class="carousel-inner">
        <div class="item active text-center">
          <h2 >Personal.</h2>
          <img src="/img/carousel/portrait.jpg" alt="Location photos">
        </div>
        <div class="item text-center">
          <h2>Powerful.</h2>
          <img src="/img/carousel/location.jpg" alt="Location photos">
        </div>
        <div class="item text-center">
          <h2>Captivating.</h2>
          <img src="/img/carousel/product.jpg" alt="Location photos">
        </div>
      </div> <!-- carousel inner -->

    <!-- Controls
    <a href="#featured" class="left carousel-control"role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#featured" class="right carousel-control"role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a> -->
  </div>

  <div class="container-fluid content">
    <div class="row">
      <div class="col-lg-12 text-center">
          <h1 class="featuer-heading font-feel">gallery</h1>

          <div class="list-inline hidden-xs hidden-sm hidden-md hidden-lg space" id="filters">

                  <button data-filter="*" type="button" class="btn btn-new btn-square btn-raised">All</button>

                  <button data-filter=".prototype" type="button" class="btn btn-new btn-square btn-raised">Landscape</button>

                  <button data-filter=".mock" type="button" class="btn btn-new btn-square btn-raised">Portrait</button>

                  <button data-filter=".graphics" type="button" class="btn btn-new btn-square btn-raised">Action</button>

                  <button data-filter=".photography" type="button" class="btn btn-new btn-square btn-raised">City</button>

          </div>
      </div>
    </div>


    <div class="row">
        <div class="all">
            <button type="button" class="btn btn-default" id="all">
              all
            </button>
        </div>
        <div>
          <button type="button" class="btn btn-default" id="landscape">
            landscape
          </button>
        </div>
        <div>
          <a id="street">street</a>
        </div>
        <div>
          <a id="arc">arc</a>
        </div>
      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
        <div class="m-p-g">
        	<div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
            <div class="landscape">
              <img src="/img/landscape/l1.jpg" data-full="/img/landscape/l1.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l10.jpg" data-full="/img/landscape/l10.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l3.jpg" data-full="/img/landscape/l3.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l4.jpg" data-full="/img/landscape/l4.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l14.jpg" data-full="/img/landscape/l14.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l7.jpg" data-full="/img/landscape/l7.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l8.jpg" data-full="/img/landscape/l8.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l2.jpg" data-full="/img/landscape/l2.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l6.jpg" data-full="/img/landscape/l6.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l12.jpg" data-full="/img/landscape/l12.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l19.jpg" data-full="/img/landscape/l19.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l11.jpg" data-full="/img/landscape/l11.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l15.jpg" data-full="/img/landscape/l15.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l17.jpg" data-full="/img/landscape/l17.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l13.jpg" data-full="/img/landscape/l13.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/landscape/l20.jpg" data-full="/img/landscape/l20.jpg" class="m-p-g__thumbs-img" />
            </div>

            <div class="street">
              <img src="/img/street/s1.jpg" data-full="/img/street/s1.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s2.jpg" data-full="/img/street/s2.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s3.jpg" data-full="/img/street/s3.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s4.jpg" data-full="/img/street/s4.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s5.jpg" data-full="/img/street/s5.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s7.jpg" data-full="/img/street/s7.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s8.jpg" data-full="/img/street/s8.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s9.jpg" data-full="/img/street/s9.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s10.jpg" data-full="/img/street/s10.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s11.jpg" data-full="/img/street/s11.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s14.jpg" data-full="/img/street/s14.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s16.jpg" data-full="/img/street/s16.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/street/s18.jpg" data-full="/img/street/s18.jpg" class="m-p-g__thumbs-img" />
            </div>

            <div class="arc">
              <img src="/img/arc/b8.jpg" data-full="/img/arc/b8.jpg" class="m-p-g__thumbs-img" />
              <img src="/img/arc/b2.jpg" data-full="/img/arc/b2.jpg" class="m-p-g__thumbs-img" />

            </div>

        	</div>

        	<div class="m-p-g__fullscreen"></div>
        </div>
      </div>
    </div>
  </div>


  <script>
  	var elem = document.querySelector('.m-p-g');
  	document.addEventListener('DOMContentLoaded', function() {
  		var gallery = new MaterialPhotoGallery(elem);
  	});
  </script>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/45226/material-photo-gallery.min.js'></script>

  <?php include_once('_footer.php'); ?>

</body>
</html>
