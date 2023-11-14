
// As soon as the user scrolls down 1px from the top of the document
window.onscroll = function() {scrollFunction()};
const blue = document.querySelector('.blue');

function scrollFunction() {
  if (document.documentElement.scrollTop) {
    document.querySelector(".navbar").classList.add('blue');
  } else {
    document.querySelector(".navbar").classList.remove('blue');
    document.getElementsByTagName('body')[0].style.paddingTop="0px";
  }
}
