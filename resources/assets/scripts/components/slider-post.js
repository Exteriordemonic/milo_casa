var Flickity = require('flickity');

const CONFIG = {
    ELEM : '.post-slider__wrapper',
    CELL : '.post-slider__cell',
};

const SliderPost = {
    init() {
        const { ELEM, CELL } = CONFIG;
        this.elem = document.querySelector(ELEM);
        if(this.elem) {
            this.slider =  new Flickity( ELEM, {
                pageDots: true,
                prevNextButtons: true,
                cellSelector: CELL,
                wrapAround: true,
                draggable: false,
                autoPlay: true,
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

export default SliderPost;
