import miniCart from './mini-card';
import 'jquery';


const CONFIG = {
    ELEM: '[remove-from-cart]',
};

const addToCart = {
    init() {
        const { ELEM, QAN } = CONFIG;

        this.$elem = document.querySelectorAll(ELEM);
        this.$qan = document.querySelector(QAN);
        console.log(this.$elem);
        this.addEvent();
        this.$allow = true;
    },

    addEvent() {
        this.$elem.forEach((element) => {
            element.addEventListener('click', (event) => {
                event.preventDefault();

                if (this.$allow) {
                    this.$allow = false;
                    const link = element.getAttribute('href');
                    console.log(link);
                    this.loadBasket(element, link);
                }
            });
        });
    },

    loadBasket(link) {
        const $this = this;

        if (miniCart.countItems() === 1) {
            miniCart.hide();
        }

        $('#mini-card').load(`${link} #mini-card > *`, function () {
            miniCart.init();


            $this.$allow = true;
        });

        $('#basket-count').load(`${link} #basket-count > *`);
    },

    changeQuantity() {
        this.$qan.innerText = Number(this.$qan.innerText) + 1;
    },

};

export default addToCart;
