$(document).ready(function () {
    $('.slider__view').slick({
        lazyLoad: 'ondemand',/* 'ondemand' or 'progressive' */
        slidesToShow: 4,/* по скольку показывать */
        slidesToScroll: 2,/* по сколькуо листать */
        infinite: true,/* бесконечная прокрутка отключена */
        rows: 1,/* задает количество рядов */
        arrows: false,
        dots: true,

        responsive: [/* отзывчивый */
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 426,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});