/* eslint-disable no-undef */
// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

//Woocommerce
import priceFormat from './woocommerce/price-format';
import miniCard from './woocommerce/mini-card';
import ajaxShop from './woocommerce/ajax-shop';
import ajaxColor from './woocommerce/ajax-single-product-color';
import addToCart from './woocommerce/add-to-cart';
import removeFromCart from './woocommerce/remove-from-cart';
import shopColor from './woocommerce/shop-color';

//Components
import gallery from './components/gallery';
import slider from './components/slider';
import sliderPost from './components/slider-post';
import preloader from './components/preloader';
import popup from './components/popup';
import footerForm from './components/footer-form';
import navigation from './components/navigation';
import hamburger from './components/hamburger';
import dropdown from './components/dropdownMenu';
import signInToNewsletter from './components/sign-in-to-newsletter';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {
  preloader.init();
  routes.loadEvents();
  priceFormat.init();
  gallery.init();
  slider.init();
  sliderPost.init();
  miniCard.init();
  popup.init();
  footerForm.init();
  ajaxShop.init();
  ajaxColor.init();
  addToCart.init();
  removeFromCart.init();
  navigation.init();
  hamburger.init();
  shopColor.init();
  dropdown.init();
  signInToNewsletter.init();
});

setTimeout(() => {
  slider.resize();
  sliderPost.resize();
}, 1000);

setTimeout(() => {
  slider.resize();
  sliderPost.resize();
}, 5000);



jQuery(document).ajaxComplete(function () {
  if (jQuery('body').hasClass('woocommerce-checkout') || jQuery('body').hasClass('woocommerce-cart')) {
    jQuery('html, body').stop();
    console.log('test');
  }
});

