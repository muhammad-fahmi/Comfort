    // Preloader
    //$(window).on('load', function() {
      //if ($('#preloader').length) {
        //$('#preloader').delay(100).fadeOut('slow', function() {
          //$(this).remove();
          //return 0;
        //});
      //}
    //});


let bg = document.getElementById("bg");
let org = document.getElementById("org");
let text = document.getElementById("text");

window.addEventListener('scroll', function(){
    var value = window.scrollY;

    bg.style.top = value * 0.5 + 'px';
    org.style.left = value * 0.25+ 'px';
    text.style.right = value * 0.5 + 'px';
})

let container = document.getElementById("container");

window.addEventListener('')