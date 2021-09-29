document.addEventListener('DOMContentLoaded', function () {
    new Splide('#gallery', {
        type : 'loop',
        rewind: true,
        autoplay: true,
        interval: 5000,
        cover   : true,
        height  : 'calc(15em + 30vw)',
        lazyLoad: 'nearby',
        arrows: false,
    }).mount();
});