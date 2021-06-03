$(document).ready(function(){

    var check = false;

    $(".btnDefil").each(function(){
        $(this).on("click", function(){
            $(this).parent().toggleClass("active");
        });
    });

    $(".card").each(function(){
        $(this).on("click", function(){
            var domaineCard = $(this).attr("data-domaine");
            if(check == false){
                check = true;
            }else{
                check = false;
            }

            $(".stage").each(function() {
                if($(this).attr("data-domaine") == domaineCard){
                    $(this).show();
                }else{
                    $(this).hide();
                } 
            });
            
        });
    });

})