let bg = document.getElementById("bg");
let org = document.getElementById("org");
let text = document.getElementById("text");

window.addEventListener('scroll', function(){
    var value = window.scrollY;

    bg.style.top = value * 0.5 + 'px';
    org.style.left = value * 0.25+ 'px';
    text.style.right = value * 0.5 + 'px';
})