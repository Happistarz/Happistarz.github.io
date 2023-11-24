// Auth: Happistarz
// Date: 2023/11/20
// Desc: Main typescript file


// gsap.registerPlugin(ScrollTrigger);

$(function () {

    setTimeout(function () {
        gsap.to(".title span", { opacity: 1, y: -20, duration: 0.5, stagger: 0.05, delay: 0.5 });
    }, 200);

});
