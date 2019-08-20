import 'jquery';
import priceFormt from './price-format'
import shopColor from './shop-color'

const CONFIG = {
    TRIGGER: '[data-tag-link]',
    ELEM: {
        container: '#shop-content',
        elements: '#products',
    },
    CLASS: {
        active: '-is-active',
        loading: '-is-loading',
    },
};

const ajaxShop = {
    init() {
        const { TRIGGER, ELEM, CLASS } = CONFIG;
        this.$trigger = document.querySelectorAll(TRIGGER);
        this.$elem = $(ELEM.container);

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

        this.$elem.load(`${link} ${ELEM.elements}`, function() {
            priceFormt.init();
            shopColor.init();

            $(this).removeClass(CLASS.loading);
        });
    },
};

export default ajaxShop;
