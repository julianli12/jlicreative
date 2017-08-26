<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('_links.php'); ?>
    <title>JLi Creative </title>
</head>

<body>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-center">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <div class="container-fluid">
                <div class="row">
                  <h2 class="modal-title text-center" id="myModalLabel">Get a Quote</h2>
                  <form class="col-sm-6 col-sm-offset-3" action="/send_form_email.php" method="post" enctype="text/plain">
                    <div class="form-group">
                      <label class="sr-only" for="inputName">Name</label>
                      <input type="text" class="form-control"id="inputName" placeholder="Name (Required)" name="name">
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="inputContact">Contact Information</label>
                      <input type="text" class="form-control" id="inputContact" placeholder="Phone Number or Email (Required)" name="contact">
                    </div>


                    <div class="form-group">
                      <label class="sr-only" for="selectService">What Service Do You Need</label>
                      <select id="selectService" class="form-control" name="services">
                        <option value="">Service Required</option>
                        <option value="">Photography + Web Combo</option>
                        <option value="">Photography</option>
                        <option value="">Web Design</option>
                        <option value="">Other</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="sr-only" for="inputMessage">What Would You Like To Know</label>
                      <textarea type="text" id="inputMessage" class="form-control" placeholder="What Would You Like To Know" name="message"></textarea>
                    </div>
                    <input class="btn btn-lg btn-new" type="submit" name="" value="Inquire">
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    </div> <!-- modal -->

    <?php include_once('_navbar.php'); ?>


  <!--Landing Section-->
  <div class="container-fluid content">
    <div class="row space">
      <div class="col-xs-offset-1 col-xs-10 col-lg-offset-2 col-lg-8 text-center">
            <h1 >Get more with your story</h1>
            <p class="hidden-xs">We enhance your brand by capturing your story and taking you online. We offer professional photoshoots and custom websites for all your business needs.</p>
            <p class="visible-xs-block">We offer professional photoshoots and custom websites for all your business needs.</p>
            <br>
            <a class="btn btn-new btn-lg" type="button" data-toggle="modal" data-target="#myModal">Get a Quote</a>
      </div>
    </div>
    <div class="row space">
      <div class="col-sm-offset-1 col-sm-10">
        <img src='img/bg-hero.png' alt="" class="hero">
      </div>
    </div>
  </div>




  <!--photography Section-->
  <hr class="feature-divider " id="photography">
  <div class="container-fluid content">
    <div class="row" >
        <div class="col-xs-12 col-md-offset-1 col-md-6 text-center">
            <h2 class="feature-heading">
                Capture your story
            </h2>
            <p>We tell your story by capturing the perfect moments. Our photography deliver captivating, personal and professional content that resonates with viewers.  </p>
            <a class="btn btn-new btn-lg" type="button" href="/photography.php">Check out our work</a>
        </div>
        <div class="col-md-5">
            <img class="section-img frame" src="img/picture-frames.png" >
        </div>
    </div>
  </div>



  <!--web Section-->
  <hr class="feature-divider" id="web">
  <div class="container-fluid content">
    <div class="row" >
      <div class="col-md-5 hidden-xs hidden-sm">
          <img class="section-img" src="img/web.png" >
      </div>
      <div class="col-md-7 col-xs-12 text-center">
          <h2 class="feature-heading">
              Take you online
          </h2>
          <p>Personal, Elegant and Intuitive custom websites that’s appealing to any viewer, for business or personal needs.</p>
          <a class="btn btn-new btn-lg" type="button" href="/web.php">Check out our designs</a>
      </div>
      <div class="visible-xs-block visible-sm-block">
          <img class="section-img" src="img/web.png" >
      </div>
    </div>
  </div>


  <!--Quote Section-->
  <hr class="feature-divider" id="quote">
  <div class="container">
    <div class="row text-center content">
        <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <h2 class="question-heading">
                Get a Quote
            </h2>
            <p> You work hard for your money, to get you the best value we form the prices strictly based on your needs. Every project have different needs so drop us a line below or at <a href="mailto:info@jlicreative.com">info@jlicreative.com</a></p>
        </div>
    </div>

    <div class="row text-center">
      <form class="col-sm-6 col-sm-offset-3" action="/send_form_email.php" method="post" enctype="text/plain">
        <div class="form-group">
          <label class="sr-only" for="inputName">Name</label>
          <input type="text" class="form-control"id="inputName" placeholder="Name (Required)" name="name">
        </div>

        <div class="form-group">
          <label class="sr-only" for="inputContact">Contact Information</label>
          <input type="text" class="form-control" id="inputContact" placeholder="Phone Number or Email (Required)" name="contact">
        </div>

        <div class="form-group">
          <label class="sr-only" for="selectService">What Service Do You Need</label>
          <select id="selectService" class="form-control" name="services">
            <option value="">Service Required</option>
            <option value="">Photography + Web Combo</option>
            <option value="">Photography</option>
            <option value="">Web Design</option>
            <option value="">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label class="sr-only" for="inputMessage">What Would You Like To Know</label>
          <textarea type="text" id="inputMessage" class="form-control" placeholder="What Would You Like To Know" name="message"></textarea>
        </div>

        <input class="btn btn-lg btn-new" type="submit" name="" value="Inquire">
      </form>
    </div>
  </div>

  <hr class="feature-divider">
  <?php include_once('_footer.php'); ?>

</body>

</html>


<!-- <hr class="feature-divider"> -->

    <!--fourth Section-->
    <!-- <div class="row" id="pay">
        <div class="col-md-12">
            <h2 class="feature-heading-pricing">
                Enjoyable experiences for everyone
            </h2>
            <br>
            <br>
        </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption">
            <h3>SoundCloud Free<br>$0</h3>
            <hr>
            <div class="pcontent">
                <ul class="marked">
                    <li class="included">Discover, stream and share a constantly expanding mix of music from established and emerging artists</p>
                    <li class="included">120M+ tracks</p>
                </ul>
                <ul>
                    <li>Offline listening</p>
                    <li>No ads</p>
                    <li>Millions of premium SoundCloud Go+ tracks</p>
                    <li>No previews</p>
                </ul>
            </div>
            <hr>
            <div class="btncenter">
                <p><a href="#" class="btn btn-menu buy wordcolor" data-toggle="modal" data-target="#myModal" role="button">Get Your Free Account</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption">
            <h3 class="special">SoundCloud Go<br>$4,99/month</h3>
            <hr>
            <div class="pcontent">
                <ul class="marked">
                    <li class="included">Discover, stream and share a constantly expanding mix of music from established and emerging artists</p>
                    <li class="included">120M+ tracks</p>
                    <li class="included">Offline listening</p>
                    <li class="included">No ads</p>
                </ul>
                <ul>
                    <li>Millions of premium SoundCloud Go+ tracks</p>
                    <li>No previews</p>
                </ul>
            </div>
            <hr>
            <div class="btncenter">
                <p><a class="btn btn-menu buy" id='hideshow' value='hide/show' role="button">Start Your Go Trial</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail" style="border-color:#c14900">
          <div class="caption">
            <h3 class="special">SoundCloud Go+<br>$9,99/month</h3>
            <hr>
               <div class="pcontent">
                <ul class="marked">
                    <li class="included">Discover, stream and share a constantly expanding mix of music from established and emerging artists</p>
                    <li class="included">120M+ tracks</p>
                    <li class="included">Offline listening</p>
                    <li class="included">No ads</p>
                    <li class="included">Millions of premium SoundCloud Go+ tracks</p>
                    <li class="included">No previews</p>
                </ul>
            </div>
            <hr>
            <div class="btncenter">
                <p><a class="btn btn-new buy" type='button' id='hideshow2' value='hide/show'>Start Your Go+ Trial</a> </p>
            </div>
          </div>
        </div>
      </div>
    </div> -->



    <!-- <div class="paycenter" id="content">
        <hr class="feature-divider" >
        <form class="form-horizontal pay-divider" role="form">
        <fieldset>
          <h1>Payment</h1>
          <p>We accept the following credit cards: <img class="cards" src="img/credit.jpeg"></p>
          <br >
          <div class="form-group">
            <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="card-number">Card Number</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="card-number" id="card-number" placeholder="fCredit Card Number">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
            <div class="col-sm-9" style="margin-left:-35px">
              <div class="row">
                <div class="col-xs-3">
                  <select class="form-control col-sm-2"  name="expiry-month" id="expiry-month">
                    <option>Month</option>
                    <option value="01">Jan (01)</option>
                    <option value="02">Feb (02)</option>
                    <option value="03">Mar (03)</option>
                    <option value="04">Apr (04)</option>
                    <option value="05">May (05)</option>
                    <option value="06">June (06)</option>
                    <option value="07">July (07)</option>
                    <option value="08">Aug (08)</option>
                    <option value="09">Sep (09)</option>
                    <option value="10">Oct (10)</option>
                    <option value="11">Nov (11)</option>
                    <option value="12">Dec (12)</option>
                  </select>
                </div>
                <div class="col-xs-3">
                  <select class="form-control" name="expiry-year">
                    <option value="13">2013</option>
                    <option value="14">2014</option>
                    <option value="15">2015</option>
                    <option value="16">2016</option>
                    <option value="17">2017</option>
                    <option value="18">2018</option>
                    <option value="19">2019</option>
                    <option value="20">2020</option>
                    <option value="21">2021</option>
                    <option value="22">2022</option>
                    <option value="23">2023</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="button" class="btn btn-menu btn-lg" id='hideshow3' value='hide/show'>Cancel</button>
                <button type="button" class="btn btn-success btn-lg">Pay Now</button>

                <p class="sentence"> By submitting your payment information and clicking “Start your free trial”, you agree to the <u>SoundCloud Go Terms of Use.</u></p>
            </div>
          </div>
        </fieldset>
        </form>
    </div> -->
