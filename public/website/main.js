AOS.init({ once: true });

// swiper
const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30
    },
  },
});


// GHAZALI JS

document.addEventListener("DOMContentLoaded", () => {
  function counter(id, start, end, duration) {
   let obj = document.getElementById(id),
    current = start,
    range = end - start,
    increment = end > start ? 1 : -1,
    step = Math.abs(Math.floor(duration / range)),
    timer = setInterval(() => {
     current += increment;
     obj.textContent = current;
     if (current == end) {
      clearInterval(timer);
     }
    }, step);
  }
  counter("count1", 0, 1240, 100);
  counter("count2", 0, 1750, 100);
  const toggleMenu = document.querySelector('.toggle-menu-container');
  const mobileMenu = document.createElement('div');
  mobileMenu.className = 'mobile-menu';

  const navItems = document.querySelector('.side-nav-mobi ul').cloneNode(true);
  mobileMenu.appendChild(navItems);
  document.body.appendChild(mobileMenu);

  toggleMenu.addEventListener('click', function() {
      mobileMenu.classList.toggle('show');
  });

  const closeMenu = document.querySelector('.mobile-menu');
  closeMenu.addEventListener('click', function(e) {
      if (e.target.tagName === 'A') {
          mobileMenu.classList.remove('show');
      }
  })
 });
 


let active = false;
// First we'll have to set up our event listeners
// We want to watch for clicks on our scroller
document.querySelector('.scroller').addEventListener('mousedown',function(){
  active = true;
  // Add our scrolling class so the scroller has full opacity while active
  document.querySelector('.scroller').classList.add('scrolling');
});
// We also want to watch the body for changes to the state,
// like moving around and releasing the click
// so let's set up our event listeners
document.body.addEventListener('mouseup',function(){
  active = false;
  document.querySelector('.scroller').classList.remove('scrolling');
});
document.body.addEventListener('mouseleave',function(){
  active = false;
  document.querySelector('.scroller').classList.remove('scrolling');
});

// Let's figure out where their mouse is at
document.body.addEventListener('mousemove',function(e){
  if (!active) return;
  // Their mouse is here...
  let x = e.pageX;
  // but we want it relative to our wrapper
  x -= document.querySelector('.wrappar').getBoundingClientRect().left;
  // Okay let's change our state
  scrollIt(x);
});

// Let's use this function
function scrollIt(x){
  let transform = Math.max(0,(Math.min(x,document.querySelector('.wrappar').offsetWidth)));
  document.querySelector('.after').style.width = transform+"px";
  document.querySelector('.scroller').style.left = transform-25+"px";
}

// Let's set our opening state based off the width, 
// we want to show a bit of both images so the user can see what's going on
scrollIt(150);

// And finally let's repeat the process for touch events
// first our middle scroller...
document.querySelector('.scroller').addEventListener('touchstart',function(){
  active = true;
  document.querySelector('.scroller').classList.add('scrolling');
});
document.body.addEventListener('touchend',function(){
  active = false;
  document.querySelector('.scroller').classList.remove('scrolling');
});
document.body.addEventListener('touchcancel',function(){
  active = false;
  document.querySelector('.scroller').classList.remove('scrolling');
});
// GHAZALI JS

// dropdown of imageuploder page
