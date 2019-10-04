const CONFIG = {
  ELEM: 'data-header',
  CLASS: 'header--reverse',
}

const header = {
  init() {
    const { ELEM, CLASS } = CONFIG;

    this.elem = document.querySelector(`[${ELEM}]`);
    this.class = CLASS;

    if (document.querySelector('body').classList.contains('home')) {
      this.addEvents();
    }
  },

  addEvents() {
    window.addEventListener('scroll', () => {
      const height = window.innerHeight;
      const scroll = window.scrollY;

      if (scroll > height) {
        this.elem.classList.add(this.class);
      }

      else {
        if (this.elem.classList.contains(this.class)) {
          this.elem.classList.remove(this.class);
        }
      }
    })
  },
}

export default header;
