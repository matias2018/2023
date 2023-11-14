let res = false;
const display = document.querySelector('#resolution');

document.addEventListener('keyup', (event) => {
    let name = event.key;
    
    if(name === 'Control') {
        res = !res;
        if(res === true) {
            get_screen_resolution();
        } 
        if(res === false) {
            off_screen_resolution();
        }
    }
})

function get_screen_resolution() {
    let myScreenHeight = window.screen.availHeight
    let myScreenWidth = window.screen.availWidth
  
    display.style.display = 'flex';
    display.innerHTML = 'my resolution- H:' + myScreenHeight + ' W:' + myScreenWidth + '<br>' + 'my viewport- H:' + window.innerHeight + ' W ' + window.innerWidth;
  }

  function off_screen_resolution() {
    display.style.display = 'none';
  }
  
  /* https://codepen.io/marco_fugaro/pen/MwBWwW */