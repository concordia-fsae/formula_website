//work in progress

const menu = document.querySelector('.menu');
const close = document.querySelector('.close');
const nav = document.querySelector('nav');

menu.addEventListener('click', () => {
    nav.classList.add('open-nav');
})
close.addEventListener('click', () => {
    nav.classList.remove('open-nav');
})


//when arrow1 or arrow2 is clicked the screen scrolls down
const arrow1 = document.querySelector('.arrow.one');
const arrow2 = document.querySelector('.arrow.two');

arrow1.addEventListener('click', () => {
    window.scrollTo(0, 740) ;
})
arrow2.addEventListener('click', () => {
    window.scrollTo(0, 1400) ;
})




//This makes header background appear white when scrolling down 20 px.
window.onscroll = function() {scrollFunction()};


function scrollFunction() {
  if (window.innerWidth > 680){
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.querySelector("header").style.background = "white";
    } 
    else {
      document.querySelector("header").style.background = "unset";
   }
  }
  else {
    document.querySelector("header").style.background = "unset";
  }
  
}

