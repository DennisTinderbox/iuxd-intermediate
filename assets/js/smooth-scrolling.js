$("#startButton").click(function() {
    $('html, body').animate({
        scrollTop: $("#startDiv").offset().top
    }, 800);
});
$("#skipLeren").click(function() {
    $('html, body').animate({
        scrollTop: $("#pipeline").offset().top
    }, 800);
});
$("#skipPipelines").click(function() {
    $('html, body').animate({
        scrollTop: $("#opdracht").offset().top
    }, 800);
});
$("#skipOpdracht").click(function() {
    $('html, body').animate({
        scrollTop: $("#figmastuk").offset().top
    }, 800);
});