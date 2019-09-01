import 'jquery';

const CONFIG = {
  TRIGGER: '[data-smooth-scroll]',
};

const smoothScroll = {
  init() {
    const { TRIGGER } = CONFIG;
    this.$trigger = document.querySelectorAll(TRIGGER);
    this.addEvent();
  },

  addEvent() {
    this.$trigger.forEach(element => {
      element.addEventListener('click', (event) => {
          event.preventDefault();
          const $this = event.currentTarget;
          const item = $this.href.split('#')[1];
          console.log($this);

          $('html, body').animate(
            {
              scrollTop: $(`#${item}`).offset().top,
            },
            500,
            'linear'
          )
      });
    });
  },
};

export default smoothScroll;
