import Alpine from 'alpinejs'

window.Alpine = Alpine
// import * from


// core version + navigation, pagination modules:
import Swiper from 'swiper';
import {Navigation, Pagination} from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// If you want to import Swiper with all modules (bundle) then it should be imported from swiper/bundle:
// import 'swiper/css/bundle';

window.Swiper = Swiper
window.SwiperNavigation = Navigation
window.Pagination = Navigation
window.SwiperPagination = Pagination
window.Pagination = Pagination
// init Swiper:
// const swiper = new Swiper('.swiper', {
//     // configure Swiper to use modules
//     modules: [Navigation, Pagination],
//     ...
// });

// todo sperate leaflet
// import * as leaflet from 'leaflet/src/Leaflet.js'
// L.tileLayer()
// window.leaflet = leaflet;
// console.log(leaflet)


Alpine.start()
