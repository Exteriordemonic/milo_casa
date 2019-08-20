const CONFIG = {
  ELEM: '[data-gallery]',
  IMAGES: 'data-gallery-image',
  ZOOM: '[data-gallery-zoom]',
  CLASS: '-is-active',
};

const gallery = {
  init() {
    const { ELEM, ZOOM, IMAGES } = CONFIG;
    this.$elem = document.querySelector(ELEM);
    if (this.$elem) {
      this.$zoom = document.querySelector(ZOOM);
      this.$image = document.querySelector(`[${IMAGES}="0"]`);
      this.$bg = this.$image.getAttribute('src');

      this.$x = 0;
      this.$y = 0;

      this.addEvent();
      this.setImage();
    }

  },

  //Events
  addEvent() {
    this.mouseOver();
    this.mouseLeave();
    this.mouseMove();
  },

  mouseOver() {
    this.$image.addEventListener('mouseover', () => {
      this.showZoom();
    });
  },

  mouseLeave() {
    this.$image.addEventListener('mouseleave', () => {
      this.hideZoom();
    });
  },

  mouseMove() {
    this.$image.addEventListener('mousemove', (event) => {
      this.$x = this.calcX(event.screenX);
      this.$y = this.calcY(event.screenY);

      this.moveX();
      this.moveY();

      console.log('x', this.$x);
      console.log('xBG', this.calcBgPosition().left);
    });
  },

  //Display controll
  showZoom() {
    this.$zoom.classList.add('-is-active');
  },

  hideZoom() {
    this.$zoom.classList.remove('-is-active');
  },

  moveX() {
    const zoomX = this.$x - this.calcMoveFromCenter();
    this.$zoom.style.left = `${zoomX}px`;
    this.$zoom.style.backgroundPositionX = `${this.calcBgPosition().left}%`;
  },

  moveY() {
    const zoomY = this.$y + this.centerTopPosition();
    this.$zoom.style.top = `${zoomY}px`;
    this.$zoom.style.backgroundPositionY = `${this.calcBgPosition().top}%`;

    console.log(this.calcBgPosition().top);
  },

  setImage() {
    console.log(this.$bg);
    this.$zoom.style.backgroundImage = `url(${this.$bg})`;
  },

  //Calc
  calcX(x) {
    const elemLeft = this.$image.getBoundingClientRect().left;
    return x - elemLeft;
  },

  calcY(y) {
    const elemTop = this.$image.getBoundingClientRect().top;
    return y - elemTop;
  },

  calcMoveFromCenter() {
    return this.$zoom.offsetWidth / 2;
  },

  centerTopPosition() {
    return this.$zoom.offsetHeight * 0.6;
  },

  calcBgPosition() {
    return {
      top: (this.$y) / this.$image.offsetHeight * 100 - 40,
      left: (this.$x) / this.$image.offsetWidth * 100,
    }
  },
};

export default gallery;
