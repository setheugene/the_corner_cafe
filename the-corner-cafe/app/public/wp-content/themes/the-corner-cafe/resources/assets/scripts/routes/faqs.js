export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
      
    //ACCORDION EXPAND
    var acc = document.getElementsByClassName('accordion-question');
var i;


for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener('click', function () {
    $(this).children().toggleClass('plus');
    $(this).children().toggleClass('minus');
    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.height === '100%') {
        panel.style.height = '0px';
    } else {
        panel.style.height = '100%';
    }
  });
}

  },
};
