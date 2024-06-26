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
import './next/NxTabs';

//Next initialize plugins
import AutoSizeTextarea from './plugins/AutoSizeTextarea';
import Modal from './plugins/Modal';
import NumberAnimate from "./plugins/NumberAnimate";
import SelectCustom from "./plugins/SelectCustom";
import Tabs from "./plugins/Tabs";
import ScrollTop from "./modules/ScrollTop";
import UploadField from "./plugins/UploadField";

//Custom modules
import ShowModal from './modules/ShowModal';
import ListSlider from "./plugins/ListSlider";
import ShowPopup from "./modules/ShowPopup";
import Order from "./modules/Order";
import Calculator from "./modules/Calculator";

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
new SelectCustom();
new Tabs();
new ScrollTop();
new UploadField();
new Calculator();
$.order = new Order();


const spoilers = document.querySelectorAll( '.spoiler');

for (let spoiler of spoilers) {
    spoiler.addEventListener( 'click', () => {
        spoilerButtonClick(spoiler);
    })
}

function spoilerButtonClick(element) {
    if (element.parentElement.classList.contains('active')) {
        element.parentElement.classList.remove('active');
    } else {
        element.parentElement.classList.add('active')
    }
}

const videoPlayButtons = document.querySelectorAll( '.video-play');

for (let button of videoPlayButtons) {
    button.addEventListener( 'click', () => {
        pauseVideo(button);
    })
}
function pauseVideo(element) {
    const iframe = element.getElementsByTagName('iframe')[0];
    let temp = iframe.src;
    iframe.src = temp;
}