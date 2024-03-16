// Auth: Happistarz
// Date: 2023/11/20
// Desc: Main typescript file

let selectedProject = "all";

gsap.registerPlugin(ScrollTrigger);

$(document).ready(function () {

    $('#home .home-container img').load(function() {
        $(this).fadeIn();
        $("#home .home-container .home-content").css('color','white');
    })

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

function setModal(data) {
    const modal = $('#projects .projectmodal .modal-content .row');

    modal.find('.col h3').text(data.title);
    modal.find('.col .info p').text(data.info);
    modal.find('.col article').css('white-space','pre-line').html(data.article);
    modal.find('.col img').attr('src', data.img);

    modal.find('.col .categories').empty();
    let categories = data.categories.split(',');
    let categoriesHtml = '';
    categories.forEach(category => {
        categoriesHtml += `<span>${category}</span>`;
    });
    modal.find('.col .categories').html(categoriesHtml);

    modal.find('.col .links').empty();
    let links = data.links.split(',');
    links.forEach(link => {
        link = link.split(';');
        let linkHtml = `<a href="${link[1]}" target="_blank"><i class="fas ${link[2]}"></i> ${link[0]}</a>`;
        modal.find('.col .links').append(linkHtml);
    });
}

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

$('#projects .project-content .project .project-info button').click(function () {
    const project = $(this).closest('.project');
    let data = {
        title: project.data('title'),
        article: project.data('article'),
        categories: project.data('categories'),
        img: project.data('img'),
        links: project.data('links'),
        info: project.data('info')
    };

    setModal(data);

    $('#projects .projectmodal').fadeIn();
    // stop scroll
    //$('body').css('overflow', 'hidden');
});

$('#projects .projectmodal .modal-content > button').click(function () {
    $('#projects .projectmodal').fadeOut();
    // resume scroll
    //$('body').css('overflow', 'auto');
});

$('#projects .projectmodal').click(function (e) {
    if (e.target === this) {
        $('#projects .projectmodal').fadeOut();
        // resume scroll
        //$('body').css('overflow', 'auto');
    }
});