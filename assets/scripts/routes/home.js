import $ from 'jquery';

export default {
  init() {
    // JavaScript to be fired on the home page
    // document.getElementById('main-title').style.background = "red"
    $(document).ready(function(){
      var mouseX, mouseY;
      // var ww = $( window ).width();
      // var wh = $( window ).height();
      var traX, traY;
      $(document).mousemove(function(e){
        mouseX = e.pageX;
        mouseY = e.pageY;
        traX = ((4 * mouseX) / 570) + 40;
        traY = ((4 * mouseY) / 570) + 50;
        // console.log(traX);
        $("#main-title").css({"background-position": traX + "%" + traY + "%"});
      });
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
