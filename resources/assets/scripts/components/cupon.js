const CONFIG = {
  ELEM: '.showcoupon',
}

const header = {
  init() {
    const { ELEM } = CONFIG;

    this.elem = document.querySelector(ELEM);

    if(this.elem) {
      this.elem.click();
    }
  },
}

export default header;
