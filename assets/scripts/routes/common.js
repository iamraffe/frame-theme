export default {
  init() {
    // JavaScript to be fired on all pages
    $(document).ready(() => {
      $(document).on('click', '#app-store-trigger', () => {
        window.open("http://google.com", '_blank' )
      });
      $(document).on('click', '#copy-trigger, #ih-trigger', () => {
        window.open("http://weareinhouse.com", '_blank' )
      });
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
