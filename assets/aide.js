$(document).ready(function () {

    var soulignOn = false;
    var grasOn = false;

    $(".sheet div").hide();

    $(".menulm li").on('click', function (e) {

        $(".sheet div").hide();
        var numPage = $(this).attr("data-page");
        $(".part" + numPage).show();

    })

    $(".para *").on("click", function (e) {
        if ($(this).hasClass("souligner")) {

            if (soulignOn == false) {
                $(".sheet span").css("text-decoration", "underline");
                soulignOn = true;
            } else {
                $(".sheet span").css("text-decoration", "none");
                soulignOn = false;
            }

        } else if ($(this).hasClass("gras")) {

            if (grasOn == false) {
                $(".sheet span").css("font-weight", "bold");
                grasOn = true;
            } else {
                $(".sheet span").css("font-weight", "normal");
                grasOn = false;
            }

        } else if ($(this).hasClass("color")) {

            $(this).on("change", function () {
                $(".sheet span").css("color", $(this).val());
            })
        }
    })

})