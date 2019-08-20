//TO DO : PUT CLASS NAMES TO CONFIG OBJECT

const CONFIG = {
    TRIGGER: '[data-toggle-popup]',
    FORM: '[data-sign-in-to-newsletter]',
    ELEM: '[data-popup]',
    CLASS: '-is-active',
};

const popup = {
    init() {
        const { TRIGGER, ELEM, CLASS, FORM } = CONFIG;

        this.$trigger = document.querySelectorAll(TRIGGER);
        this.$elem = document.querySelector(ELEM);
        this.$form = document.querySelector(FORM);

        this.$class = CLASS;

        this.addEvent();
    },

    addEvent() {
        const toggleElem = () => this.toggleElem();

        this.$trigger.forEach(element => {
            element.addEventListener('click', (event) => {
                event.preventDefault();
                
                toggleElem();
            });
        });
    },

    toggleElem() {
      this.$elem.classList.toggle(this.$class);
      this.$form.reset();
      this.$form.classList.remove('-succes');
      this.$form.classList.remove('-fail');
    },
};

export default popup;