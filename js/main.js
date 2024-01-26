// Auth: Happistarz
// Date: 2023/11/20
// Desc: Main typescript file

let selectedProject = "all";

gsap.registerPlugin(ScrollTrigger);

$(document).ready(function () {

    gsap.from("#home .home-content", { duration: 1, opacity: 0, y: -75, ease: "power2.out" });
    const arrow = $("#home .home-content a");

    const hoverTL = gsap.timeline({ paused: true });
    hoverTL.to(arrow, { duration: 0.2, y: 10, ease: "power3.out" });

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
                scrollTop: target.offset().top - 70
            }, 1000);
        }
    });

    // animate on scroll from left to normal for #home #home-info .row
    gsap.from("#home #home-info .info-container .info-left div", {
        duration: 1,
        opacity: 0,
        x: -50,
        ease: "power2.out",
        scrollTrigger: {
            trigger: "#home #home-info .info-container .info-left",
            start: "top 80%",
            end: "bottom 80%",
            toggleActions: "restart none none reverse"
        }
    });

    gsap.from('#tableau', {
        duration: 1,
        opacity: 0,
        ease: "power2.out",
        scrollTrigger: {
            trigger: "#tableau",
            start: "top 60%",
            end: "bottom 80%",
            toggleActions: "restart none none reverse"
        }
    });

    gsap.from('.skills-content .content p', {
        duration: 1,
        opacity: 0,
        stagger: 0.2,
        ease: "power2.out",
        scrollTrigger: {
            trigger: ".skills-content",
            start: "top 80%",
            end: "bottom 80%",
            toggleActions: "restart none none reverse"
        }
    });

    function changeProject() {
        $('#projects .project-content .project').each(function () {
            if (selectedProject === 'all' || $(this).data('type') === selectedProject) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
});

$('.bottom-navbar ul li a').click(function () {
    $('.bottom-navbar ul li a').removeClass("current");
    $(this).addClass("current");
});

$('#projects .project-content .head button').click(function () {
    $('#projects .project-content .head button').removeClass("selected");
    $(this).addClass("selected");
    selectedProject = $(this).data('type');
    changeProject();
});