$(document).ready(function (e) {
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $(".type-f-12").toggleClass("toggled");
    });
});