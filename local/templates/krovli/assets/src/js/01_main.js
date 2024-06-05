//Изменение вьюпорта

function startOnSpecificBrowserInit() {
    let userAgent = window.navigator.userAgent.toLowerCase();
    let browser;
    switch (true) {
        case userAgent.indexOf("edge") > -1:
            browser = "msEdge";
            break;
        case userAgent.indexOf("edg/") > -1:
            browser = "chrEdge";
            break;
        case userAgent.indexOf("opr") > -1 && !!window.opr:
            browser = "opera";
            break;
        case userAgent.indexOf("chrome") > -1 && !!window.chrome:
            browser = "сhrome";
            break;
        case userAgent.indexOf("trident") > -1:
            browser = "ie";
            break;
        case userAgent.indexOf("firefox") > -1:
            browser = "firefox";
            break;
        case userAgent.indexOf("safari") > -1:
            browser = "safari";
            break;
        default:
            browser = "other";
    }
    if (browser == "safari" || browser == "firefox") {
        adaptiveSizePageScaleInit();
    }
}

//Scroll mouse
const blocks = document.querySelectorAll('.scroll');

for (let block of blocks) {
    block.addEventListener('mousemove', (e) => {
        const t = e.currentTarget;
        const xx = Math.min(1, e.clientX / t.clientWidth);
        block.scrollLeft = (t.scrollWidth - t.clientWidth) * xx;
    });
}
/*//Input files
const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');
const fileChose = document.getElementById('file-chose');


actualBtn.addEventListener('change', function () {
    console.log('test');
    fileChosen.textContent = this.files[0].name
    fileChose.style.display = 'none'
    fileChosen.style.display = 'inline-block'
});*/
window.addEventListener("load", function (event) {
    let inputs = document.querySelectorAll('.actual-btn');
    for (let input of inputs) {
        let label = input.nextElementSibling;

        input.addEventListener('change', function (e) {
            console.log('test');
            let nameFiles = '';
            nameFiles = this.files[0].name;

            console.log(label.querySelector('.file-chose'));
            label.querySelector('.file-chose').style.display = 'none';
            label.querySelector('.file-chosen').style.display = 'inline-block'
            label.querySelector('.file-chosen').textContent = nameFiles;
        });
    }
});

const swiper1 = new Swiper(".swiperCertificates", {
    slidesPerView: 5,
    spaceBetween: 15,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: '.swiperCertificates__button-next',
        prevEl: '.swiperCertificates__button-prev',
    },
    breakpoints: {
        360: {
            slidesPerView: 1,
            spaceBetween: 5
        },
        744: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        1400: {
            slidesPerView: 5,
            spaceBetween: 10
        },
        1920: {
            slidesPerView: 5,
            spaceBetween: 15
        },
    }
});

const swiper2 = new Swiper(".swiperPortfolio", {
    slidesPerView: 2,
    spaceBetween: 50,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: '.swiperPortfolio__button-next',
        prevEl: '.swiperPortfolio__button-prev',
    },
    breakpoints: {
        360: {
            slidesPerView: 1,
            spaceBetween: 5
        },
        744: {
            slidesPerView: 1,
            spaceBetween: 5
        },
        1400: {
            slidesPerView: 2,
            spaceBetween: 36
        },
        1920: {
            slidesPerView: 2,
            spaceBetween: 50
        },

    }
});

