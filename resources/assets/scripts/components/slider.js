var Flickity = require('flickity');

const CONFIG = {
    ELEM : '.slider__wrapper',
};

const Slider = {
    init() {
        const { ELEM } = CONFIG;
        this.elem = document.querySelector(ELEM);
        if(this.elem) {
            this.slider =  new Flickity( ELEM, {
                pageDots: false,
                prevNextButtons: false,
            });

            this.slider.resize();
        }
    },

    resize() {
        if(this.elem) {
          console.log('resize');

            this.slider.resize();
        }
    },
};

export default Slider;
