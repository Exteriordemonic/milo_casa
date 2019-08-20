import RemoveFromCart from './remove-from-cart'

const CONFIG = {
  CLOSE: '[data-close-mini-card]',
  OPEN: '[data-open-mini-card]',
  ELEM: '[data-mini-card]',
  CLASS: '-is-active',
  CART: '.cart',
};

const miniCard = {
  init() {
    const { CLOSE, OPEN, ELEM, CLASS, CART } = CONFIG;
    this.$close = document.querySelector(CLOSE);
    this.$open = document.querySelector(OPEN);
    this.$elem = document.querySelector(ELEM);
    this.$cart = document.querySelector(CART);
    this.$class = CLASS;

    this.addEvent();

    RemoveFromCart.init();
  },

  addEvent() {
    this.$close.addEventListener('click', () => {
      this.hide();
    });

    this.$open.addEventListener('click', (event) => {
      event.preventDefault();
      this.show();
    });
  },


  hide() {
    this.$elem.classList.toggle(this.$class);
  },

  show() {
    if(!this.$cart && this.countItems() !== 0) {
      this.$elem.classList.add(this.$class);
    }
  },

  countItems() {
    return this.$elem.querySelectorAll('li').length;
  },
};

export default miniCard;
