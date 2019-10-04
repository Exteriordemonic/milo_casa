import 'jquery';

const CONFIG = {
  OPEN: '[data-open-wishlist]',
  CLOSE: '[data-close-wishlist]',
  ELEM: '[data-wishlist]',
  TRIGGER: '[data-wishlist-trigger]',
  CLASS: '-is-active',
};

const wishlist = {
  init() {
    const { OPEN, CLOSE, ELEM, TRIGGER } = CONFIG;
    this.$open = document.querySelectorAll(OPEN);
    this.$close = document.querySelector(CLOSE);
    this.$elem = document.querySelector(ELEM);
    this.$trigger = document.querySelectorAll(TRIGGER);

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

    this.$trigger.forEach(element => {

      if(element.dataset.wishlistTrigger != 'on') {
        element.dataset.wishlistTrigger='on';

        element.addEventListener('click', e => {
          e.preventDefault();

          const $this = e.currentTarget;
          const groupTrigger = document.querySelectorAll(`[href="?${$this.href.split('?')[1]}"]`);

          groupTrigger.forEach(element => {
            element.classList.toggle(CLASS);
          });

          this.loadWishlsit($this.href);
        });
      }
    });

    this.$close.addEventListener('click', () => {
      this.$elem.classList.remove(CLASS);
    });
  },

  loadWishlsit(link) {
    const $this = this;
    $('#wishlist').load(`${link} #wishlist > *`, function () {

      $this.init();
    });
  },
};

export default wishlist;
