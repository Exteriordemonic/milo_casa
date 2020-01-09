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

    this.addScroll();
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

  addScroll() {
    let s = 0;

    window.addEventListener('scroll', () => {
      console.log('scrolling');
      const ls = window.pageYOffset;


      if (ls > s) {
        this.elem.classList.add('header--hide');
      }

      else {
        this.elem.classList.remove('header--hide');
      }

      if (ls > 200) {
        this.elem.classList.add('header--bg');
      }

      else {
        this.elem.classList.remove('header--bg');
      }

      s = window.pageYOffset;
    });
  },
}

export default header;
