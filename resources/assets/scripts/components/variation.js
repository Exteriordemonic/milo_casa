import Slider from './slider';

const CONFIG = {
  TRIGGER: 'data-variation-toggle',
  PRICE: 'data-variation-price',
  ADD_TO_CART: 'data-add-to-cart-variations',
  SLIDER: 'data-variation-slide',
  CLASS: '-is-active',
}

const variation = {
  init() {
    const { TRIGGER, PRICE, ADD_TO_CART, SLIDER, CLASS } = CONFIG;

    // Label elements
    this.trigger = document.querySelectorAll(`[${TRIGGER}]`);
    this.price = document.querySelector(`[${PRICE}]`);
    this.addToCart = document.querySelector(`[${ADD_TO_CART}]`);
    this.slider = document.querySelectorAll(`[${SLIDER}]`);

    // store data
    this.class = CLASS;

    if(this.trigger.length) {
      this.addEvent();
    }
  },

  addEvent() {
    this.trigger.forEach(element => {
      element.addEventListener('click', (event) => {

        // RESET ACTIVE CLASS
        this.trigger.forEach(element => {
          element.classList.remove(this.class);
        });

        // Add class for current button
        const $this = event.currentTarget;
        $this.classList.toggle(this.class);

        // label data
        const price =  $this.dataset.price;
        const id    =  $this.dataset.variationId;
        const color =  $this.getAttribute('title');

        // Init functions
        this.changePrice(price);
        this.changeAddToCart(id);
        this.changeSlider(color);
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
}

export default variation;
