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
                breakpoint: 1300,
                settings: {
                    slidesToShow: 7,
                    slidesToScroll: 5,
                    infinite: false,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});