var scroll = new SmoothScroll('a[href*="#"]', {

    // // Selectors
    ignore: '#term',
    header: '.header-container',
    topOnEmptyHash: true,

    // // Speed & Duration
    speed: 500,
    clip: true,

    // // Easing
    easing: 'easeInOutCubic',


});