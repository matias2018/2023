/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
const config_file = 'wp-content/themes/nddbase/src/modules/particles-js/particlesjs-config.json';
particlesJS.load('particles-js', config_file, function() {
  console.log('callback - particles.js config loaded', config_file);
});