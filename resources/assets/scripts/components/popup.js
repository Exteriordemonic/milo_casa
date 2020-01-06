import getCookie from '../helpers/getCookie'

const CONFIG = {
  ELEM: 'data-popup',
  TRIGGER: 'data-popup-close',
  CLASS: '-is-active',
}

const header = {
  init() {
    const { ELEM, CLASS, TRIGGER } = CONFIG;

    this.elem = document.querySelector(`[${ELEM}]`);
    this.trigger = document.querySelector(`[${TRIGGER}]`);
    this.class = CLASS;

    if (!getCookie('popup') && this.elem) {
      this.addEvents();
    }
  },

  addEvents() {
    window.addEventListener('scroll', () => {

      if (this.elem.dataset.popup !== 'open') {
        this.open();
      }
    })

    this.trigger.addEventListener('click', () => {
      this.close();
    })
  },

  open() {
    this.elem.classList.add(this.class);
    this.elem.dataset.popup = 'open';

    const date = new Date();
    const minutes = 10;
    date.setTime(date.getTime() + (minutes * 60 * 1000));
    document.cookie = `popup=true; expires=${date.toUTCString()}`;
  },

  close() {
    this.elem.classList.remove(this.class);
  },
}

export default header;
