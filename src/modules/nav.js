
/* Mobile Menu */
const mobileMenu = document.querySelector('.navbar-desktop');
const toggleButton = document.querySelector('.burger-menu');
const bar = document.querySelector('.bar');
const theMenu = document.querySelector('.nav-items');
const section = document.querySelector('.main-wrapper');
const theBody = document.body;
let menuOpen = false; 

function getScrollbarWidth() {
  return window.innerWidth - document.documentElement.clientWidth;
};
const X = getScrollbarWidth();

toggleButton.style.right = X + "px";

toggleButton.addEventListener("click", openBurgerMenu);


function openBurgerMenu(e) {
  e.preventDefault();
  menuOpen = !menuOpen;
  if(menuOpen == true) {
    toggleButton.style.right = X + X + "px";
    mobileMenu.style.left = "0"
    toggleButton.classList.add('opened');
    theMenu.classList.add('opened');
    theBody.classList.add('overflow-hidden');
    theBody.classList.add('noscroll');
  } else {
    toggleButton.style.right = X + "px";
    mobileMenu.style.left = "-100%"
    toggleButton.classList.remove('opened');
    theMenu.classList.remove('opened');
    theBody.classList.remove('overflow-hidden');
    theBody.classList.remove('noscroll');
  }
}

// intersection observer
let options = {
  root: null, //root
  rootMargin: '0px',
  threshold: 0,
};

var mouse = document.querySelector('.skipping-link');

// function onChange(changes, observer) {
//    changes.forEach(change => {
//       if (!change.intersectionRatio == 0) {
//          console.log('Intercection observed');
//          mouse.classList.add('hidden');
//        } else {
//         mouse.classList.remove('hidden');
//        }
//    });
//  }

//  let observer = new IntersectionObserver(onChange, options);

//  let target = document.querySelector('#one');
//  observer.observe(target);
// intersection observer

/* function selectNavColor() {
  const blue = document.querySelector('.blue');
  const blueNavBar = document.querySelector('.blueNavbar');
  const whiteNav = document.querySelector('.whiteNavbar');
  const nav = document.querySelector('#navbar');
  const logo = document.querySelector('.logo');

  if(blue) {
    if(!whiteNav) {
      nav.classList.add('blueNavbar');
    } else {
      nav.classList.remove('whiteNavbar');
      nav.classList.add('blueNavbar');
    }
  } else {
    if (blueNavBar) {
      nav.classList.remove('blueNavbar');
      nav.classList.add('whiteNavbar');
    }
    logo.src="http://localhost:10022/wp-content/uploads/2021/11/Logo_FRDL-01-BW-02.png";
  }

}

selectNavColor(); */

