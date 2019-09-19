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

//Components
import hero from './components/hero';
import hamburger from './components/hamburger';
import wishlist from './components/wishlist';
import smoothScroll from './components/smooth-scroll';
import slider from './components/slider';
import moreContent from './components/more-content';
import variation from './components/variation';
import search from './components/search';
import miniCart from './components/mini-cart';
import addToCart from './components/add-to-cart';
import removeFromCart from './components/remove-from-cart';


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
  routes.loadEvents();
  hero.init();
  hamburger.init();
  wishlist.init();
  smoothScroll.init();
  slider.init();
  moreContent.init();
  variation.init();
  search.init();
  miniCart.init();
  addToCart.init();
  removeFromCart.init();
});

setTimeout(() => {
  slider.resize();
  hero.resize();
}, 100);

setTimeout(() => {
  slider.resize();
  hero.resize();
}, 300);
