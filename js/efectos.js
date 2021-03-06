var scroll = new SmoothScroll('a[href*="#"]', {

    // // Selectors
    ignore: '[data-scroll-ignore]',
    header: '.header-container',
    topOnEmptyHash: true,

    // // Speed & Duration
    speed: 500,
    clip: true,

    // // Easing
    easing: 'easeInOutCubic',


});