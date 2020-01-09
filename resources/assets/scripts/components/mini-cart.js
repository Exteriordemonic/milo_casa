import RemoveFromCart from './remove-from-cart'

const CONFIG = {
  ELEM: '[data-mini-card]',
  OPEN: '[data-mini-card-open]',
  CLOSE: '[data-close-mini-cart]',
  CLASS: '-is-active',
};

const miniCart = {
  init() {
    const { ELEM, OPEN, CLOSE, CLASS } = CONFIG;

    // label data
    this.elem = document.querySelector(ELEM);
    this.open = document.querySelectorAll(OPEN);
    this.close = document.querySelectorAll(CLOSE);

    this.class = CLASS;

    this.addEvents();
    RemoveFromCart.init();
  },

  addEvents() {
    this.open.forEach(element => {
      element.addEventListener('click', e => {
        e.preventDefault();
        this.show();
      });
    });

    this.close.forEach(element => {
      element.addEventListener('click', e => {
        e.preventDefault();
        this.hide();
      });
    });
  },

  show() {
    this.elem.classList.add(this.class);
  },

  hide() {
    this.elem.classList.remove(this.class);
  },

  countItems() {
    return this.elem.querySelectorAll('li').length;
  },
}

export default miniCart;
