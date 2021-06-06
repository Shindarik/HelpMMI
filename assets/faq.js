$(document).ready(function () {
    $(".reponse").hide();
    $(".smiley").hide();
    $("img.envoi").each(function () {
        $(this).on('click', function () {
            var divQuestion = $(this).parent();
            $(divQuestion).next().show(200);
            var divReponse = $(divQuestion).next();
            $(divReponse).next().show();


        })



    })
})