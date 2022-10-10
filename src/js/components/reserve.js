$(".book-btn").on("click", () => {
    $("#reserve-modal").addClass("active");
    $('body').addClass('ovh');
});

$("#reserve-modal").on("click", (e) => {
    $("#reserve-modal").removeClass("active");
    $('body').removeClass('ovh');
});

$('.reserve-content').on("click", (e) => {
    e.stopPropagation();
});