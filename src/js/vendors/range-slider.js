require('ion-rangeslider');

const updateRangeLabels = data => {
    $('.min-price').html(data.from_pretty)
    $('.max-price').html(data.to_pretty)
}

const submitRange = data => {
    submitPriceRange(data);
}

$('#price-range-slider').ionRangeSlider({
    skin: "round",
    prettify_separator: "",
    hide_min_max: true,
    hide_from_to: true,
    onStart: updateRangeLabels,
    onChange: updateRangeLabels,
    onFinish: submitRange,
});