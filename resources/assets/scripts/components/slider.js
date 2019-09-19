var Flickity = require('flickity-as-nav-for');

const CONFIG = {
  ELEM: '.-is-active .flickity-main-slider',
  NAV: '.-is-active .flickity-slider-nav',
};

const Slider = {
  init() {
    const { ELEM, NAV } = CONFIG;
    this.elem = document.querySelector(ELEM);
    this.nav = document.querySelector(NAV);

    if (this.elem) {
      this.slider = new Flickity(ELEM, {
        pageDots: false,
        prevNextButtons: false,
        contain: true,
        cellSelector: '.slider__cell',
        wrapAround: true,
        draggable: false,
      });

      this.nav = new Flickity(NAV, {
        cellSelector: '.slider__cell',
        asNavFor: document.querySelector(ELEM),
        contain: true,
        pageDots: false,
        prevNextButtons: false,
      });

      this.slider.resize();
      this.nav.resize();

      setTimeout(() => {
        this.resize();
      }, 100);
    }
  },

  resize() {
    if (this.elem) {
      console.log('resize');

      this.slider.resize();
      this.nav.resize();
    }
  },
};

export default Slider;
