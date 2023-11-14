let dark_light_switch = document.querySelector('#Layer_1');
let body = document.querySelector('body');
let logo = document.querySelector('.ndd_logo');
let dark_mode = false;
dark_light_switch.addEventListener("click", switchTheme);

/* set a coockie */
//Create the cookie object
var cookieStorage = {
    setCookie: function setCookie(key, value, time, path) {
        var expires = new Date();
        expires.setTime(expires.getTime() + time);
        var pathValue = '';
        if (typeof path !== 'undefined') {
            pathValue = 'path=' + path + ';';
        }
        document.cookie = key + '=' + value + ';' + pathValue + 'expires=' + expires.toUTCString();
    },
    getCookie: function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    },
    removeCookie: function removeCookie(key) {
        document.cookie = key + '=; Max-Age=0; path=/';
    }
};
/* set a coockie */

if (cookieStorage.getCookie('ndd_NightMode')) {
    dark_mode = true;
    dark_light_switch.classList.add('dark');
    body.classList.add('dark');
    logo.classList.add('dark');
}

let toggleTheme = true;

function switchTheme(e) {
    e.preventDefault();
    //Check Storage. Display user preference 
    if (cookieStorage.getCookie('ndd_NightMode')) {
        dark_light_switch.classList.add('dark');
        body.classList.add('dark');
        logo.classList.add('dark');
    }
    toggleTheme = !toggleTheme;
    toggleTheme === false ?  dark_light_switch.classList.add('dark') : dark_light_switch.classList.remove('dark');
    toggleTheme === false ?  body.classList.add('dark') : body.classList.remove('dark');
    toggleTheme === false ?  logo.classList.add('dark') : logo.classList.remove('dark');
    toggleTheme === false ?  cookieStorage.setCookie('ndd_NightMode', 'true', 2628000000, '/') : cookieStorage.removeCookie('ndd_NightMode');
    
    console.log(toggleTheme);
}
