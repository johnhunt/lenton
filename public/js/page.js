$(document).scroll(checkScroll);
$(document).ready(function() {
    $('a').on('click', navigateToSection);
});

var navigationOpen = false;

function toggleNavigation() {
    var navigation = $('#navigation');
    
    if (!navigationOpen) {
        navigation.fadeIn();
        disableScroll();
        navigationOpen = true;
    } else {
        closeNavigation();
    }
}

function closeNavigation() {
    var navigation = $('#navigation');
    enableScroll();
    navigation.fadeOut();
    navigationOpen = false;
}

function checkScroll() {
    var currentScrollHeight = $(this).scrollTop();
    var showHeight = $(window).height() - 200;
    var titleName = $('#title-name');

    if (currentScrollHeight >= showHeight) {
        titleName.fadeIn();
    } else {
        titleName.fadeOut();
    }
}

function disableScroll() {
    $('body').addClass('scroll-disabled');
}

function enableScroll() {
    $('body').removeClass('scroll-disabled');
}

function navigateToSection(event) {
    if (this.hash !== "") {
        event.preventDefault();

        if (navigationOpen) {
            closeNavigation();
        }

        var hash = this.hash;

        $('html, body').animate(
            {scrollTop: $(hash).offset().top},
            800,
            function() { window.location.hash = hash; }
        );
    }
}
