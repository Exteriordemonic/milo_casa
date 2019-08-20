/* eslint-disable */

const CONFIG = {
    TRIGGER: '[data-color-index]',
    DATA: {
        INDEX: 'data-color-index',
        IMG: 'data-color-image'
    },
};

const shopColor = {
    init() {
        const { TRIGGER, DATA } = CONFIG;
        this.$trigger = document.querySelectorAll(TRIGGER);
        this.addEvent();

        this.data = DATA;

    },

    addEvent() {
        this.$trigger.forEach(element => {
            element.addEventListener('mouseover', (event) => {
                const $this = event.currentTarget;
                
                this.showColorImg($this);
            });

            element.addEventListener('mouseout', (event) => {
                const $this = event.currentTarget;
                
                this.hideColorImg($this);
            });
        });
    },

    showColorImg($this) {
        const $index = $this.dataset.colorIndex;

        const img = document.querySelector(`[${this.data.IMG}="${$index}"]`);
        img.classList.add('-is-active');

        console.log('mouse in')
    },

    hideColorImg($this) {
        const $index = $this.dataset.colorIndex;

        const img = document.querySelector(`[${this.data.IMG}="${$index}"]`);
        img.classList.remove('-is-active');

        console.log('mouse out')
    },
};

export default shopColor;