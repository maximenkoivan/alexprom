import 'core-js/stable';
import 'regenerator-runtime/runtime';
import elementClosest from 'element-closest';
import objectFitImages from 'object-fit-images';
import 'whatwg-fetch';

//Vendors
require('fslightbox');

//Next modules
import Nx from './next/Nx';
import NxRequest from './next/NxRequest';
import NxDynamicFormLabel from './next/NxDynamicFormLabel';
import NxPhoneMask from './next/NxPhoneMask';
//import './next/NxMenu';
import './next/NxTabs';

//Next initialize plugins
import AutoSizeTextarea from './plugins/AutoSizeTextarea';
import Modal from './plugins/Modal';
import NumberAnimate from "./plugins/NumberAnimate";

//Custom modules
import ShowModal from './modules/ShowModal';
import ListSlider from "./plugins/ListSlider";
import ShowPopup from "./modules/ShowPopup";
import Order from "./modules/Order";

objectFitImages();
elementClosest(window);

$.nx = new Nx();

$.nx.addPlugin([
    new ListSlider()
])

document.addEventListener( "DOMContentLoaded", function() {
    document.querySelectorAll('[data-dynamic-inp]').forEach(($el) => {
        let dynamicFormLabel = new NxDynamicFormLabel($el);
    });
});

new NxRequest();
new NxPhoneMask();
new AutoSizeTextarea()
new ShowModal();
new Modal();
new ShowPopup();
new NumberAnimate();
$.order = new Order();
