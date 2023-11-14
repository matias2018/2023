const faq = document.querySelectorAll('.faq');

let f;

for(f = 0; f < faq.length; f++ ) {
  faq[f].addEventListener('click', function(){
    var rotator = this.childNodes[1];
    let panel = this.nextElementSibling;
    this.classList.toggle('show');
    panel.classList.toggle('show');
    
    if (panel.classList.contains('show')) {
      rotator.classList.add('show');
    } else {
      setTimeout(function(){ rotator.classList.remove('show'); }, 500);
    }
  })
}