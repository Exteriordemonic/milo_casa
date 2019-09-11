const CONFIG = {
  OPEN: '[data-open-wishlist]',
  CLOSE: '[data-close-wishlist]',
  ELEM: '[data-wishlist]',
  CLASS: '-is-active',
};

const wishlist = {
  init() {
    const { OPEN, CLOSE, ELEM } = CONFIG;
    this.$open = document.querySelectorAll(OPEN);
    this.$close = document.querySelector(CLOSE);
    this.$elem = document.querySelector(ELEM);

    if (this.$open && this.$close && this.$elem) {
      this.addEvent();
    }
  },

  addEvent() {
    const { CLASS } = CONFIG;
    this.$open.forEach(element => {
      element.addEventListener('click', e => {
        e.preventDefault();
        this.$elem.classList.add(CLASS);
      });
    });

    this.$close.addEventListener('click', () => {
      this.$elem.classList.remove(CLASS);
    });
  },
};

export default wishlist;
