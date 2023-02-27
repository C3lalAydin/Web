$(document).ready(function() {

    $("#baslik_hava_durumu").css('transform', 'scaleX(1)');

    if ($(window).width() < 800) {
        $(".header-list").hide();

    } else {
        $(".display_none").hide();
    }
    $("#menu-btn").click(function() {
        $(".header-list").toggle(500);
        $(".header-list li").toggle(500);

        $("#menu-btn").toggleClass("icon-true");
        $("#menu-btn").toggleClass("icon-false");
        $(".icon-true").html('<i class="fa-solid fa-x"></i>');
        $(".icon-false").html('<i class="fa-solid fa-bars"></i>');
    });
    $("#cikis_btn").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "assets/php/cikis.php",
            data: "data",
            dataType: "dataType",
        });
        window.location.reload()

    });


});