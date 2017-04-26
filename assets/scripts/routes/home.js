import $ from 'jquery';

export default {
  init() {
    $(document).ready(function(){
      var mouseX, mouseY;
      var traX, traY;
      $(document).mousemove(function(e){
        mouseX = e.pageX;
        mouseY = e.pageY;
        traX = ((8 * mouseX) / 570) + 40;
        traY = ((8 * mouseY) / 570) + 50;
        // console.log(traX);
        $("#main-title").css({"background-position": traX + "%" + traY + "%"});
      });

      $(document).on('click', '.wpme_image > a', (e) => {
        e.preventDefault();
      });

      // _.each(document.querySelectorAll('.wp-post-image'), (img) => {
      //   let src = img.getAttribute('src')
      //   img.setAttribute('height', '1000')
      //   img.setAttribute('src', src.replace("-300x228", ""))
      // })
    });
  },
  finalize() {
    // document.addEventListener("DOMContentLoaded", function() {
    //   window.addEventListener('load', function(){
    //       changeImageSrc()
    //   }, false)
    // });


    // // $( window ).load(function() {
    //   $('.attachment-thumbnail.wp-post-image').ready(function(){
    //     /* eslint-disable no-console */
    //     console.log($(this), $(this).parent().attr('data-full-img'))
    //     /* eslint-enable no-console */
    //     // let src = $(this).attr('src')
    //     // $(this).attr('src', src.replace("-150x150", ""))
    //   })
    // // });
  },
};
