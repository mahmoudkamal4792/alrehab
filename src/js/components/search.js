$("#search-modal-btn").on("click", () => {
    $("#search-modal").addClass("active");
});

$("#search-modal").on("click", (e) => {
    if (!$(e.target).hasClass("form-control")) {
        $("#search-modal").removeClass("active");
    }
});