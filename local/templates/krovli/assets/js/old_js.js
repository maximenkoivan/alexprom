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

const quizButtons = document.querySelectorAll( '.btn-quiz');

for (let button of quizButtons) {
    button.addEventListener( 'click', () => {
        quizButtonClick(button);
    })
}

function quizButtonClick(element) {
    const tabs = document.querySelectorAll('.quiz-tab');
    for (let tab of tabs) {
        if (element.classList.contains('btn-next')) {
            if (Number(tab.dataset.tab) === Number(element.dataset.tab) - 1 ) {
                tab.classList.remove('active');
            }
            if (Number(tab.dataset.tab) === Number(element.dataset.tab) ) {
                tab.classList.add('active');
            }
        }

        if (element.classList.contains('btn-prev')) {
            if (Number(tab.dataset.tab) === Number(element.dataset.tab) ) {
                tab.classList.remove('active');
            }
            if (Number(tab.dataset.tab) === Number(element.dataset.tab) - 1 ) {
                tab.classList.add('active');
            }
        }
    }
}

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

window.addEventListener('scroll', () => {
    let defaultHeight = document.documentElement.clientHeight * 2;
    let button = document.getElementById('scrollTopButton');
    if (window.scrollY >= defaultHeight) {
        button.style.display = 'block';
    } else {
        button.style.display = 'none';
    }
})

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
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



