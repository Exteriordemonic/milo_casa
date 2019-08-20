import popup from './popup'

const CONFIG = {
    ELEM: '[data-footer-form]',
    EMAIL: '[data-newsletter-email]',
};

const footerForm = {
    init() {
        const { ELEM, EMAIL } = CONFIG;

        this.$elem = document.querySelector(ELEM);
        this.$email = document.querySelectorAll(EMAIL);

        this.addEvent();
    },

    addEvent() {
        this.$elem.addEventListener('submit', (event) => {
            event.preventDefault();

            this.toggleElem();
            this.fillEmail();
        });

    },

    toggleElem() {
        popup.toggleElem();
    },

    fillEmail() {
        const { EMAIL } = CONFIG;

        const val = this.$elem.querySelector(EMAIL).value
        this.$email.forEach(element => {
            element.value = val;
        });
    },
};

export default footerForm;