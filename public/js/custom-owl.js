$('.owl-carousel-slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: false,
    navigation: false,
    autoplayTimeout: 500,
    items: 1,
    dots: true
})
$('.owl-carousel-product').owlCarousel({
    loop: false,
    margin: 10,
    autoplay: true,
    nav: false,
    navigation: false,
    autoplayTimeout: 2500,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})