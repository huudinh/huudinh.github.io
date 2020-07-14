// modal
$(".modal-btn").click(function (e) {
    e.preventDefault();
    dataModal = $(this).attr("data-modal");
    $("#" + dataModal).css({
        "display": "block"
    });
    // $("body").css({"overflow-y": "hidden"}); //Prevent double scrollbar.
});

$(".modal-close,.modal-closePic, .modal-bg").click(function () {
    $(".modal").css({
        "display": "none",
    });
    // $("body").css({"overflow-y": "auto"}); //Prevent double scrollbar.
});

$('iframe[src*="https://www.facebook.com/"]').addClass("facebook-iframe");

$(".modal-close,.modal-closePic, .modal-bg").click(function () {
    $(this).parent().find('.facebook-iframe').each(function (index) {
        $(this).attr('src', $(this).attr('src'));
        return false;
    });
});