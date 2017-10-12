<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-center">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="failed-modal">
              <div class="alert alert-modal alert-danger alert-dismissible hidden" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p>Thank You for contacting us! We will be in touch with you very soon.</p>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <h2 class="modal-title text-center" id="myModalLabel">Get a Quote</h2>
                <form class="col-sm-6 col-sm-offset-3"  method="post" onsubmit="return validateFormModal()" enctype="text/plain" action="/index.php">
                  <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Name (Required)" name="nameModal" id="nameModal">
                  </div>

                  <div class="form-group">
                    <label class="sr-only" for="contact">Contact Information</label>
                    <input type="text" class="form-control" id="contactModal" placeholder="Phone Number or Email (Required)" name="email">
                  </div>


                  <div class="form-group">
                    <label class="sr-only" for="service">What Service Do You Need</label>
                    <select id="service" class="form-control" name="services">
                      <option value="">Service Required</option>
                      <option value="">Photography + Web Combo</option>
                      <option value="">Photography</option>
                      <option value="">Web Design</option>
                      <option value="">Other</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="sr-only" for="message">What Would You Like To Know</label>
                    <textarea type="text" id="message" class="form-control" placeholder="What Would You Like To Know" name="message"></textarea>
                  </div>
                  <input class="btn btn-lg btn-new" type="submit" name="" value="Inquire">
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
