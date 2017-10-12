//regular form validation
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

//form validation for modal
function validateFormModal() {
  var name = document.querySelector('#nameModal').value;
  var contact = document.querySelector('#contactModal').value;

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

    document.querySelector('.alert-modal').classList.toggle("hidden");
    document.querySelector('.alert-modal p').innerHTML = error;

    return false;
  }
}

//auto start carousel at start up
$(function(){
  //carousel auto start
  $('.carousel').carousel({
    interval: 10000,
    pause: false,
    /*auto warp to first, keyboard command
    warp: false,
    keyboard: false*/
  });


  //automately generate carousel indicator
  var slideqty = $('#featured .item').length;
  for (var i=0; i<slideqty; i++){
    var insertText = '<li data-target="#featured" data-slide-to="' + i + '"></li>';
    if (i==0) {
      var insertText = '<li data-target="#featured" data-slide-to="' + i + '" class="active"></li>';
    }
    $('#featured ol').append(insertText);
  }

  //full height
  var wheight = $(window).height(); //get height of window
  $('.fullheight').css('height', wheight);

  //convert image from hero to background image
  $('#featured .item img').each(function(){
    var imgSrc = $(this).attr('src');
    $(this).parent().css({'background-image': 'url('+imgSrc+')'});
    $(this).remove();
  });

  //adjust height of .fullheight elements on window resize
  $(window).resize(function(){
    wheight = $(window).height();
    $('.fullheight').css('height', wheight);
  });

  var landscape = $('.landscape');
  var street = $('.street');
  var arc = $('.arc');


  //hide groups
  $('.all-control').click(function(){
    if (landscape.is(":hidden")){
      landscape.slideDown();
    }
    if (street.is(":hidden")){
      street.slideDown();
    }
    if (arc.is(":hidden")){
      arc.slideDown();
    }
    $(this).addClass("activate");
    $('.landscape-control').removeClass("activate");
    $('.street-control').removeClass("activate");
    $('.arc-control').removeClass("activate");
  });

  $('.landscape-control').click(function(){
    if (landscape.is(":hidden")){
      landscape.slideDown("slow");
    }
    if (!street.is(":hidden")){
      street.slideUp("slow");
    }
    if (!arc.is(":hidden")){
      arc.slideUp("slow");
    }
    $(this).addClass("activate");
    $('.all-control').removeClass("activate");
    $('.street-control').removeClass("activate");
    $('.arc-control').removeClass("activate");
  });

  $('.street-control').click(function(){
    if (!landscape.is(":hidden")){
      landscape.slideUp("slow");
    }
    if (street.is(":hidden")){
      street.slideDown("slow");
    }
    if (!arc.is(":hidden")){
      arc.slideUp("slow");
    }
    $(this).addClass("activate");
    $('.all-control').removeClass("activate");
    $('.landscape-control').removeClass("activate");
    $('.arc-control').removeClass("activate");
  });

  $('.arc-control').click(function(){
    if (!landscape.is(":hidden")){
      landscape.slideUp("slow");
    }
    if (!street.is(":hidden")){
      street.slideUp("slow");
    }
    if (arc.is(":hidden")){
      arc.slideDown("slow");
    }
    $(this).addClass("activate");
    $('.all-control').removeClass("activate");
    $('.street-control').removeClass("activate");
    $('.landscape-control').removeClass("activate");
  });
})
