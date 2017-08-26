function validateForm() {
  var name = document.querySelector('#name').value;
  var contact = document.querySelector('#contact').value;

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

    document.querySelector('.alert-danger').classList.toggle("hidden");
    document.querySelector('.alert-danger p').innerHTML = error;

    return false;
  }
}
