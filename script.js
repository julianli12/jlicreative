function validateForm() {
  var name = document.querySelector('#name').value;
  var contact = document.querySelector('#contact').value;
  var services = document.querySelector('#services').value;
  var message = document.querySelector('#message').value;

  var danger = document.querySelector('.alert-danger p').innerHTML;
  var error ="";
  var proceed = true;

  //name check
  if (name == "") {
    error = "Please include your name";
    proceed = false;
  }

  //contact check
  if (contact ==""){
    if (error =="" ) {
      error = "Please include your contact information";
    }else{
      error += " and contact information";
    }
    proceed = false;
  }

  if (proceed) {
    return true;
  }else{
    danger = error;
    document.querySelector('.alert-danger').classList.toggle("hidden");

    return false;
  }
}
