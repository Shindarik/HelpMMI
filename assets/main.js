$(document).ready(function(){

    $(".btnDefil").each(function(){
        $(this).on("click", function(){
            $(this).parent().toggleClass("active");
        });
    });

    // $(".card").each(function(){
    //     $(this).on("click", function(){
    //         $(this).attr("data-domaine");
    //     });
    // });

})


