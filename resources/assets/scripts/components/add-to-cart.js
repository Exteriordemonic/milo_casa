import miniCart from './mini-cart';
import 'jquery';


const CONFIG = {
  ELEM: '[data-add-to-cart]',
};

const addToCart = {
  init() {
    const { ELEM } = CONFIG;

    this.$elem = document.querySelectorAll(ELEM);

    this.addEvent();
    this.$allow = true;
    console.log('test add to cart');
  },

  addEvent() {
    this.$elem.forEach((element) => {
      console.log('each add to cart');
      element.addEventListener('click', (event) => {
        event.preventDefault();

        console.log('click add to cart');

        if (this.$allow) {
          this.$allow = false;
          const link = element.getAttribute('href');

          this.loadBasket(element, link);
        }
      });
    });
  },

  loadBasket(link) {
    const $this = this;
    $('#mini-card').load(`${link} #mini-card > *`, function () {

      miniCart.init();
      miniCart.show();

      $this.$allow = true;

    });
  },
};

export default addToCart;
