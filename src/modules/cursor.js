let mouseCursor = document.querySelector('.cursor');
let openedNavBar = document.querySelector('.opened');
let navLinks = document.querySelectorAll('.nav-items-list li a');
let programLinks = document.querySelectorAll('.programs-list li a');
let anyLink = document.querySelectorAll('a');

window.addEventListener('mousemove', cursor);

function cursor(e) {
  // console.log(e);
  mouseCursor.style.top = e.pageY + 'px';
  mouseCursor.style.left = e.pageX + 'px';
  if(openedNavBar) {
    mouseCursor.classList.add('shiny');
    alert('openedNavBar');
  }
}

/* items navegacao */
navLinks.forEach(link => {
  link.addEventListener('mouseover', () => {
    mouseCursor.classList.add("link-grow");
    mouseCursor.classList.add("link-background");
    mouseCursor.classList.add("hovered");

  });
  link.addEventListener('mouseleave', () => {
    mouseCursor.classList.remove("link-grow");
    mouseCursor.classList.remove("link-background");
    mouseCursor.classList.remove("hovered");
  });
});

/* items dos premios */
programLinks.forEach(link => {
  link.addEventListener('mouseover', () => {
    mouseCursor.classList.add("link-grow");
    mouseCursor.classList.add("program-background");
    mouseCursor.classList.add("hovered");
  });
  link.addEventListener('mouseleave', () => {
    mouseCursor.classList.remove("link-grow");
    mouseCursor.classList.remove("program-background");
    mouseCursor.classList.remove("hovered");
  });
});



