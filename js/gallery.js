document.addEventListener('DOMContentLoaded', function () {
    new Splide('#gallery', {
        rewind: true,
        autoplay: true,
        interval: 5000,
        cover   : true,
        height  : '40rem',
        lazyLoad: 'nearby',
        arrows: false,
    }).mount();
});