const CONFIG = {
  TRIGGER: '[data-toggle-menu]',
  ELEM: '[data-nav]',
  CLASS: '-is-active',
};

const toggleMenu = {
  init() {
    const { TRIGGER, ELEM } = CONFIG;
    this.$trigger = document.querySelector(TRIGGER);
    this.$elem = document.querySelector(ELEM);
    this.addEvent();
  },

  addEvent() {
    const { CLASS } = CONFIG;
    this.$trigger.addEventListener('click', (event) => {
        const $this = event.currentTarget;
        $this.classList.toggle(CLASS);
        this.toggleElem(CLASS);
    });
  },

  toggleElem(CLASS) {
    this.$elem.classList.toggle(CLASS);
  },
};

export default toggleMenu;