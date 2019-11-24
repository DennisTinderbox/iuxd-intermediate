$("#startButton").click(function() {
    $('html, body').animate({
        scrollTop: $("#startDiv").offset().top
    }, 2000);
});
