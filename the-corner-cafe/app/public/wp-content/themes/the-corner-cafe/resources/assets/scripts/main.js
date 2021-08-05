// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import about from './routes/about';
import faqs from './routes/faqs';
import menu from './routes/menu';
import employment from './routes/employment';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About page
  about,
  //FAQs page
  faqs,
  //Employment page
  employment,
  //Menu Page
  menu,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
