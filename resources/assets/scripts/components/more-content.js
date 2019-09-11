import 'jquery';

const CONFIG = {
  ELEM: 'data-show-more',
  TRIGGER: 'data-show-more-button',
};

const moreContent = {
  init() {
    const { TRIGGER, ELEM } = CONFIG;

    this.trigger = document.querySelectorAll(`[${TRIGGER}]`);

    // data
    this.dataTrigger = TRIGGER;
    this.dataElem = ELEM;

    this.addEvent();
  },

  addEvent() {
    this.trigger.forEach(element => {
      element.addEventListener('click', e => {
        const $this = e.currentTarget;
        const id = $this.dataset.showMoreButton;
        const isShow = $this.dataset.isShow;

        const elem = $(`[${this.dataElem}="${id}"]`);
        elem.slideToggle();

        if (isShow == 'false') {
          $this.innerText = $this.dataset.textShow;
          $this.dataset.isShow = 'true';
          console.log('show');
        }

        else {
          $this.innerText = $this.dataset.text;
          $this.dataset.isShow = 'false';
          console.log('hide');
        }

        console.log('test', isShow);
      });
    });
  },
};

export default moreContent;
