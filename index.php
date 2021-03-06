<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once('_links.php'); ?>
    <title>JLi Creative </title>
</head>


<body>

  <?php include_once('_navbar.php'); ?> 
  <!-- Modal -->
  <?php include_once('_modal.php'); ?>
  <?php include_once('_send_form_email.php'); ?>

  <div class="failed">
    <div class="alert alert-danger alert-dismissible hidden" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <p>Thank You for contacting us! We will be in touch with you very soon.</p>
    </div>
  </div>



  <!--Landing Section-->
  <div class="container-fluid room">
    <div class="row">
      <div class="col-xs-offset-1 col-xs-10 col-lg-offset-2 col-lg-8 text-center">
            <h1 class="feature-heading font-feel">Get more with your story</h1>
      </div>

      <!-- flexible size
      require a fullheight class in parent parent element
      <div class="col-xs-12 col-xs-offset-0 text-center hero-image hidden-md hidden-lg">
        <img src="/img/bg-hero-lg.png" alt="hero image">
      </div>-->
      <div class="col-lg-12 col-lg-offset-0 text-center hidden-sm hidden-md hidden-lg">
        <img src="img/bg-hero-xs.png" alt="">
      </div>
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center hidden-xs hidden-md hidden-lg">
        <img src="img/bg-hero.png" alt="">
      </div>
      <div class="col-lg-12 col-lg-offset-0 text-center hidden-xs hidden-sm">
        <img src="img/bg-hero-lg.png" alt="">
      </div>



    </div>
    <div class="row">
      <div class="col-xs-offset-1 col-xs-10 col-lg-offset-2 col-lg-8 text-center">
        <p class="hidden-xs">We enhance your brand by capturing your story and taking you online. We offer professional <b>photography</b> sevices and build custom <b>websites designs</b> for all your business needs.</p>
        <p class="visible-xs-block">We offer professional <b>photography</b> services and build custom <b>website designs</b> for all your business needs.</p>
      </div>
      <div class="col-xs-12 text-center room">
        <a class="btn btn-new btn-lg" type="button" data-toggle="modal" data-target="#myModal">Get a Quote</a>
      </div>
    </div>
  </div>



  <!--photography Section-->
  <hr class="feature-divider " id="photography">
  <div class="container-fluid">
    <div class="row" >
        <div class="col-xs-12 col-md-offset-1 col-md-6 smallcenter">
            <p>Photography</p>
            <h1 class="feature-heading font-feel">we capture your story</h1>
            <!-- <h1 class="feature-heading">
                PERSONAL <br>
                MEMORABLE <br>
                CAPTIVATING
            </h1> -->
        </div>
        <div class="col-xs-12 hidden-xs">
            <img class="section-img frame" src="img/picture-frames.png" >
        </div>
        <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl">
            <img class="section-img frame" src="img/picture-frames-small.png" >
        </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-2">
          <!-- <h2>Capture your story</h2> -->
          <p>We tell your story by capturing the perfect moments. Our photography deliver captivating, personal and professional content that resonates with viewers.  </p>
      </div>
      <div class=" col-sm-2 smallcenter text-right">
        <a class="btn btn-new btn-lg v-center" type="button" href="/photography.php">Check out our work</a>
      </div>
    </div>
  </div>



  <!--web Section-->
  <hr class="feature-divider" id="web">

  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-offset-1 col-md-6 smallcenter">
        <p>Web Design</p>
        <h1 class="feature-heading font-feel">
           a design for anyone
        </h1>
      </div>
      <div class="col-sm-10 col-sm-offset-2">
          <img class="section-img" src="img/web.png" >
      </div>
    </div>
    <div class="row">
      <div class="col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-2">
        <p>Take your story online by letting us build your voice. We deliver personal, elegant and intuitive custom websites that’s appealing to any audience. Well suited for business or personal needs. </p>
      </div>
      <div class=" col-sm-2 smallcenter text-right">
        <a class="btn btn-new btn-lg v-center" type="button" href="/web.php">Check out our designs</a>
      </div>
    </div>
  </div>

  <!--Quote Section-->
  <hr class="feature-divider">

  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-offset-1 col-md-6 smallcenter">
        <p>Questions</p>
        <h1 class="feature-heading font-feel">
            contact
        </h1>
      </div>
    </div>
    <div class="row text-center">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
          <p> You work hard for your money, to get you the best value we tailor our packages strictly around your needs. Every project is different so drop us a line below or at <a href="mailto:info@jlicreative.com">info@jlicreative.com</a>.</p>
        </div>
    </div>
    <div class="row text-center">
      <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">

        <!--form-->
        <h2 class="font-feel hidden-xs">get an quote</h2>
        <form name="contactform" method="post" onsubmit="return validateForm()" action="index.php">
          <div class="form-group">
            <label class="sr-only" for="name">Name</label>
            <input type="text" class="form-control" placeholder="Name (Required)" name="name" id="name">
          </div>

          <div class="form-group">
            <label class="sr-only" for="contact">Contact Information</label>
            <input type="text" class="form-control" placeholder="Phone Number or Email (Required)" name="contact" id="contact" >
          </div>

          <div class="form-group">
            <label class="sr-only" for="services">What Service Do You Need</label>
            <select  class="form-control" name="services" id="services">
              <option value="">Service Required</option>
              <option value="Photography + Web Combo">Photography + Web Combo</option>
              <option value="Photography">Photography</option>
              <option value="Web Design">Web Design</option>
              <option value="Other">Other</option>
            </select>
          </div>

          <div class="form-group">
            <label class="sr-only" for="message">What Would You Like To Know</label>
            <textarea type="text"  class="form-control" placeholder="What Would You Like To Know" name="message" id="message"></textarea>
          </div>

          <input class="btn btn-lg btn-new" type="submit" name="" value="Inquire">
        </form>


      </div>
    </div>

  </div>

  <hr class="feature-divider">
  <?php include_once('_footer.php'); ?>

</body>

</html>
