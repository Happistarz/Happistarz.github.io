// Auth: Happistarz
// Date: 2023/11/20
// Desc: Main typescript file


gsap.registerPlugin(ScrollTrigger);

$(document).ready(function () {

    gsap.from("#home .home-content", {duration: 1, opacity: 0, y: -75, ease: "power2.out"});
    const arrow = $("#home .home-content a");

    const hoverTL = gsap.timeline({paused: true});
    hoverTL.to(arrow, {duration: 0.2, y: 10, ease: "power3.out"});

    arrow.hover(function () {
        hoverTL.play();
    }, function () {
        hoverTL.reverse();
    });

    $('a[href^="#"]').on('click', function (event) {
        event.preventDefault();
        const target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 50
            }, 1000);
        }
    });

    // animate on scroll from left to normal for #home #home-info .row
    gsap.from("#home #home-info .row", {
        duration: 1,
        opacity: 0.4,
        x: -50,
        ease: "power2.out",
        scrollTrigger: {
            trigger: "#home #home-info .row",
            start: "top 80%",
            end: "bottom 80%",
            toggleActions: "restart none none reverse"
        }
    });
})

$('.bottom-navbar ul li a').click(function () {
    $('.bottom-navbar ul li a').removeClass("current");
    $(this).addClass("current");
});
