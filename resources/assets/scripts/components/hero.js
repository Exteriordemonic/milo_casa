var Flickity = require('flickity');

const CONFIG = {
  CAROUSEL: '.hero__carousel',
  CELL: '.hero__cell',
};

const HERO = {
  init() {
    const { CAROUSEL, CELL } = CONFIG;
    this.carousel = document.querySelector(CAROUSEL);

    if (this.carousel) {
      this.slider = new Flickity(CAROUSEL, {
        // options
        pageDots: true,
        autoPlay: 4000,
        prevNextButtons: false,
        wrapAround: true,
        cellSelector: CELL,
      });

      console.log(this.slider);
    }
  },

  resize() {
    if (this.carousel) {
      this.slider.resize();
    }
  },
}

export default HERO;
