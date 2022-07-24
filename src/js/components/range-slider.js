$(".range-slider-input").on("input", function (e) {
    var width = $(this).val()
    $(this).siblings(".value-bg").width(width + "%");
    $(this).parents(".price-block").find(".value").html(width);
});