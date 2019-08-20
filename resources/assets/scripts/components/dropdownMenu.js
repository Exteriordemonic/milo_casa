const CONFIG = {
  TRIGGER: '[data-dropdown]',
  ELEM: '[data-toggle-button]',
  CLASS: '-is-active',
};

const dropdown = {
  init() {
    const { TRIGGER, ELEM, CLASS } = CONFIG;
    this.$elem = document.querySelectorAll(TRIGGER);

    this.$button = ELEM;
    this.$class = CLASS;
    this.addEvent();
  },

  addEvent() {
    this.$elem.forEach(element => {
      element.addEventListener('click', (event) => {
        const $this = event.currentTarget;
        const button = $this.querySelector(this.$button);

        button.classList.toggle(this.$class);
        button.classList.toggle('icon--special');
        $this.classList.toggle(this.$class);
      });
    });
  },

  hideAll() {
    this.$elem.forEach(element => {
      const $this = element;
      const button = $this.querySelector(this.$button);

      button.classList.remove(this.$class);
      button.classList.remove('icon--special');
      $this.classList.remove(this.$class);
    });
  },
};

export default dropdown;
