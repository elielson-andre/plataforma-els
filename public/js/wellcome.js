!function(){window;const e=document.documentElement;if(e.classList.remove("no-js"),e.classList.add("js"),document.body.classList.contains("has-animations")){(window.sr=ScrollReveal()).reveal(".feature, .pricing-table-inner",{duration:600,distance:"20px",easing:"cubic-bezier(0.5, -0.01, 0, 1.005)",origin:"bottom",interval:100}),e.classList.add("anime-ready"),anime.timeline({targets:".hero-figure-box-05"}).add({duration:400,easing:"easeInOutExpo",scaleX:[.05,.05],scaleY:[0,1],perspective:"500px",delay:anime.random(0,400)}).add({duration:400,easing:"easeInOutExpo",scaleX:1}).add({duration:800,rotateY:"-15deg",rotateX:"8deg",rotateZ:"-1deg"}),anime.timeline({targets:".hero-figure-box-06, .hero-figure-box-07"}).add({duration:400,easing:"easeInOutExpo",scaleX:[.05,.05],scaleY:[0,1],perspective:"500px",delay:anime.random(0,400)}).add({duration:400,easing:"easeInOutExpo",scaleX:1}).add({duration:800,rotateZ:"20deg"}),anime({targets:".hero-figure-box-01, .hero-figure-box-02, .hero-figure-box-03, .hero-figure-box-04, .hero-figure-box-08, .hero-figure-box-09, .hero-figure-box-10",duration:anime.random(600,800),delay:anime.random(600,800),rotate:[anime.random(-360,360),function(e){return e.getAttribute("data-rotation")}],scale:[.7,1],opacity:[0,1],easing:"easeInOutExpo"})}}();


const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["vida ☕","paixão ❤️!","DESAFIO 😎", "uma jornada eterna!", "a arte de CRIAR o que quiser 😉.","simplesmente fascinante."];
const typingDelay = 100;
const erasingDelay = 80;
const newTextDelay = 1000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  }
  else {
    cursorSpan.classList.remove("typing");
  	setTimeout(erase, newTextDelay);
  }
}

function erase() {
	if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  }
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});


//validacao de formulario cadastro

// var regPwd = document.getElementById(regPwd).value
// var regPwdConfirm = document.getElementById(regPwdConfirm).value


$( "#password" ).keyup(function() {
    var regPwd = document.getElementById('password').value
    if(regPwd.length <= 5){
        $('#pdwLevel').html('Senha fraca, dá pra melhorar?👆🏼')
    }else{
        $('#pdwLevel').html('')
    }
})


$( ".access-form" ).submit(function( event ) {
    $(".btn-access").css('background-color','transparent')
    $(".btn-access").html('Processando...')
    $(".btn-access").attr("disabled","disabled");
});
