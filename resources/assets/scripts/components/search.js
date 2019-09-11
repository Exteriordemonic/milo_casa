const CONFIG = {
  ELEM: 'data-search-form',
  TRIGGER: 'data-search',
}

const search = {
  init() {
    const { ELEM, TRIGGER } = CONFIG;
    this.elem = document.querySelector(`[${ELEM}]`);
    this.trigger = document.querySelectorAll(`[${TRIGGER}]`);
    this.input = document.querySelector(`[${ELEM}] input`);

    console.log('init Search');
    this.addEvents();
  },

  addEvents() {
    this.trigger.forEach(element => {
      element.addEventListener('click', e => {
        e.preventDefault;

        if (window.innerWidth > 992) {
          if (this.input.value) {
            this.elem.submit();
          }

          else {
            this.elem.classList.toggle('-is-active');
          }

          console.log('test');
        }

        else {
          this.elem.submit();
        }
      })
    });
  },
}

export default search;
