import Slider from './slider';

const CONFIG = {
  TRIGGER: 'data-variation-toggle',
  PRICE: 'data-variation-price',
  SIZE: 'data-size',
  ADD_TO_CART: 'data-add-to-cart-variations',
  SLIDER: 'data-variation-slide',
  ATTR_WRAPPER: 'data-attr-wrapper',
  CLASS: '-is-active',
}

const variation = {
  init() {
    const { TRIGGER, PRICE, SIZE, ADD_TO_CART, SLIDER, ATTR_WRAPPER, CLASS } = CONFIG;

    // Label elements
    this.trigger = document.querySelectorAll(`[${TRIGGER}]`);
    this.triggerSize = document.querySelectorAll(`[${SIZE}]`);
    this.price = document.querySelector(`[${PRICE}]`);
    this.addToCart = document.querySelector(`[${ADD_TO_CART}]`);
    this.slider = document.querySelectorAll(`[${SLIDER}]`);
    this.attrWrapper = document.querySelector(`[${ATTR_WRAPPER}]`);

    // store data
    this.class = CLASS;

    if(this.trigger.length) {
      this.addEvent();
    }
  },

  addEvent() {
    this.trigger.forEach(element => {
      element.addEventListener('click', (event) => {
        const $this = event.currentTarget;

        // label data
        const price =  $this.dataset.price;
        const id    =  $this.dataset.variationId;
        const size  =  $this.dataset.variationSize;
        const sizeChange  =  $this.dataset.size;
        const color =  $this.getAttribute('title');

        if (!sizeChange) {
         // RESET ACTIVE CLASS
         this.trigger.forEach(element => {
          element.classList.remove(this.class);
          });
        }
        // Add class for current button
        $this.classList.toggle(this.class);

        // Init functions
        this.changePrice(price);
        this.changeAddToCart(id);
        this.changeSlider(color);

        if (size) {
          this.showSizes(color, size)
        }

        if (sizeChange) {
          this.showSizes(color, sizeChange)
        }
      });
    });

    // trigger click for 1st elem
    this.trigger[0].click();
  },

  changePrice(price) {
    this.price.innerHTML = price;
  },

  changeAddToCart(id) {
    const link = window.location.href + `?add-to-cart=${id}`;
    this.addToCart.setAttribute('href', link);
  },

  changeSlider(color) {
    // RESET ACTIVE CLASS
    let active = false;
    this.slider.forEach(element => {
      if(element.dataset.variationSlide == color) {
        element.classList.add(this.class);
        active = true;
      }

      else {
        element.classList.remove(this.class);
      }
    })

    if(!active) {
      this.slider[0].classList.add(this.class);
    }

    Slider.init();
  },

  showSizes(color, size) {
    this.attrWrapper.classList.add(this.class);

    console.log(this.triggerSize);
    this.triggerSize.forEach(element => {
      if(element.dataset.color == color) {
        element.classList.add(this.class);
        element.parentNode.classList.add(this.class);
      }

      else {
        element.classList.remove(this.class);
        element.parentNode.classList.remove(this.class);
      }

      if(element.dataset.size == size) {
        element.classList.add(this.class);
      }

      else {
        element.classList.remove(this.class);
      }
    });
  },
}

export default variation;
