import 'jquery';
import priceFormt from './price-format'
import shopColor from './shop-color'
import slider from '../components/slider'
import addToCart from './add-to-cart'

const CONFIG = {
    TRIGGER: '[data-color-single-product]',
    ELEM: {
        CONTAINER: '#product-single',
    },
    CLASS: {
        active: '-is-active',
        loading: '-is-loading',
    },
};

const ajaxColor = {
    init() {
        const { TRIGGER, ELEM, CLASS } = CONFIG;
        this.$trigger = document.querySelectorAll(TRIGGER);
        this.$elem = $(ELEM.CONTAINER);

        this.$class = CLASS;
        this.addEvent();
    },

    addEvent() {
        this.$trigger.forEach(element => {
            element.addEventListener('click', (event) => {
                event.preventDefault();

                const link = element.getAttribute('href');

                this.controlClass(element);
                this.loadContent(link);
            });
        });
    },

    controlClass(element) {
        this.$trigger.forEach(element => {
            element.classList.remove(this.$class.active);
        });

        element.classList.add(this.$class.active);

        this.$elem.addClass(this.$class.loading);
    },

    loadContent(link) {
        const { ELEM, CLASS } = CONFIG;

        this.$elem.load(`${link} ${ELEM.CONTAINER}>*`, function() {
            priceFormt.init();
            shopColor.init();
            ajaxColor.init();
            slider.init();
            addToCart.init();

            $(this).removeClass(CLASS.loading);
        });
    },
};

export default ajaxColor;
