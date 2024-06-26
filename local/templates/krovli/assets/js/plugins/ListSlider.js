"use strict";
/**
 * Слайдер с несколькими элементами
 */
import Swiper from "swiper";
import {Autoplay, EffectFade, Pagination, Navigation} from "swiper/modules";

class ListSlider {
    constructor() {
        this.dataName = {
          listSlider: 'list-slider',
          listSliderNext: 'list-slider-next',
          listSliderPrev: 'list-slider-prev',
          listSliderDots: 'list-slider-dots'
        };

        this.bulletTemplate = '<span class="swiper-pagination-bullet nx-list-slider__bullet"></span>';
    }

    init($container){
        $container = $container || document;

        let $listSlider = $container.querySelectorAll(`[data-${this.dataName.listSlider}]`);

        if (!$listSlider.length) return false;

        $listSlider.forEach((el) => {
            let $self = el,
                currentSlider = $self.getAttribute(`data-${this.dataName.listSlider}`),
                $next = $self.querySelector(`[data-${this.dataName.listSliderNext}]`),
                $prev = $self.querySelector(`[data-${this.dataName.listSliderPrev}]`),
                params = {};

            switch (currentSlider) {

                case 'destroyed':

                    //Уничтожается на разрешении > 991
                    const breakpoint = window.matchMedia('(max-width: 991px)'),
                        breakpointChecker = function () {
                            if (breakpoint.matches === false) {
                                if (listSlider !== undefined) {
                                    listSlider.destroy(true, true);
                                }
                            } else if (breakpoint.matches === true) {
                                return enableSwiper();
                            }
                        },
                        enableSwiper = function () {
                            listSlider = new Swiper(el, {
                                slidesPerView: 'auto',
                                spaceBetween: 20,
                                loop: false,
                                autoHeight: false
                            });
                        };

                    breakpoint.addEventListener('change', breakpointChecker);
                    breakpointChecker();

                    return false;

                case 'cert':
                    params = {
                        modules: [Navigation, Pagination],
                        slidesPerView: 'auto',
                        spaceBetween: 10,
                        loop: false,
                        autoHeight: false,
                        navigation: {
                            nextEl: $next,
                            prevEl: $prev,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        breakpoints: {
                            // when window width is >=
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 15
                            },
                            991: {
                                slidesPerView: 5,
                                spaceBetween: 20
                            },
                        }
                    }

                    break;

                case 'portfolio':
                    params = {
                        modules: [Navigation, Pagination],
                        slidesPerView: 1,
                        spaceBetween: 10,
                        loop: true,
                        autoHeight: false,
                        navigation: {
                            nextEl: $next,
                            prevEl: $prev,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        breakpoints: {
                            991: {
                                slidesPerView: 2,
                                spaceBetween: 50
                            },
                        }
                    }

                    break;

                case 'common':
                    params = {
                        slidesPerView: 1,
                        spaceBetween: 40,
                        loop: false,
                        autoHeight: false,
                        navigation: {
                            nextEl: $next,
                            prevEl: $prev,
                        },
                        breakpoints: {
                            // when window width is >=
                            768: {
                                slidesPerView: 1,
                                spaceBetween: 20
                            },
                            991: {
                                slidesPerView: 1,
                                spaceBetween: 30
                            },
                        }
                        // autoplay: {
                        //     delay: 7000,
                        //     disableOnInteraction: false,
                        // },
                    }

                    break;

                case 'tabs':
                    params = {
                        slidesPerView: 'auto',
                        loop: false,
                        autoHeight: false,
                        resistanceRatio: 0,
                    }

                    break;

                default: {
                    params = {
                        slidesPerView: 1,
                        spaceBetween: 40,
                        loop: false,
                        autoHeight: false,
                        parallax: true,
                        navigation: {
                            nextEl: $next,
                            prevEl: $prev,
                        },
                        breakpoints: {
                            // when window width is >=
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 20
                            },
                            991: {
                                slidesPerView: 4,
                                spaceBetween: 30
                            },
                        }
                        // autoplay: {
                        //     delay: 7000,
                        //     disableOnInteraction: false,
                        // },
                    }
                }
            }

            let listSlider = new Swiper($self, params);

        });
    }
}

export default ListSlider;