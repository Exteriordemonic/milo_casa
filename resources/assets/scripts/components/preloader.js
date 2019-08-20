const CONFIG = {
  ELEM: 'preloader',
  CLASS: {
    hide: 'is-hidden',
    active: 'is-active',
  },
};

const preloader = {
  init() {
    const { ELEM, CLASS } = CONFIG;

    this.elem = document.querySelector(`[${ELEM}]`);
    this.class = CLASS;

    this.hide();
  },

  hide() {
    this.elem.classList.add(this.class.hide);
  },

  activ() {
    this.elem.classList.add(this.class.active);
  },
};

export default preloader;
