$(document).ready(function () {

    $(window).bind('beforeunload',function(){

        $("#filtre3").prop('checked', true);
        $("#filtre2").prop('checked', false);
        $("#filtre1").prop('checked', false);
   
   });

    var check = false;
    var filtreAnnee = 3;
    var domaineCard = 5;

    $(".btnDefil").each(function () {
        $(this).on("click", function () {
            $(this).parent().toggleClass("active");
        });
    });


    $(".choix").each(function () {

        $(this).on("click", function () {


            if ($(this).hasClass("card")) {
                domaineCard = $(this).attr("data-domaine");
            } else if ($(this).hasClass("radioCheck")) {
                filtreAnnee = $(this).attr("value");
            }

            console.log(domaineCard + " " + filtreAnnee);

            $(".card").each(function () {

                $(this).on("click", function () {

                    $(".stage").each(function () {

                        if (domaineCard != 5) {

                            if (filtreAnnee != 3) {

                                if (($(this).attr("data-domaine") == domaineCard) && ($(this).attr("data-annee") == filtreAnnee)) {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            } else {

                                if ((($(this).attr("data-annee") == 1) || ($(this).attr("data-annee") == 2)) && ($(this).attr("data-domaine") == domaineCard)) {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            }

                        } else {

                            if (filtreAnnee != 3) {

                                if ((($(this).attr("data-domaine") == 1) || ($(this).attr("data-domaine") == 2) || ($(this).attr("data-domaine") == 3) || ($(this).attr("data-domaine") == 4)) && ($(this).attr("data-annee") == filtreAnnee)) {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            } else {

                                if ((($(this).attr("data-annee") == 1) || ($(this).attr("data-annee") == 2)) && (($(this).attr("data-domaine") == 1) || ($(this).attr("data-domaine") == 2) || ($(this).attr("data-domaine") == 3) || ($(this).attr("data-domaine") == 4))) {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            }
                        }


                    });

                    var childrenHidden = 0;

                    for(var i = 0; i < $('.stages').children().length; i++){
                        if($('.stages').children().eq(i).not(":visible")){
                            childrenHidden++;
                        }
                    }

                    if(childrenHidden = $('.stages').children().length){
                        console.log("hidden");
                    }

                });



            });

            $(".radioCheck").each(function () {
                $(this).on("change", function () {
                    if (this.checked) {

                        $(".stage").each(function () {

                            if (domaineCard != 5) {

                                if (filtreAnnee != 3) {

                                    if (($(this).attr("data-domaine") == domaineCard) && ($(this).attr("data-annee") == filtreAnnee)) {
                                        $(this).show();
                                    } else {
                                        $(this).hide();
                                    }
                                } else {

                                    if ((($(this).attr("data-annee") == 1) || ($(this).attr("data-annee") == 2)) && ($(this).attr("data-domaine") == domaineCard)) {
                                        $(this).show();
                                    } else {
                                        $(this).hide();
                                    }
                                }

                            } else {

                                if (filtreAnnee != 3) {

                                    if ((($(this).attr("data-domaine") == 1) || ($(this).attr("data-domaine") == 2) || ($(this).attr("data-domaine") == 3) || ($(this).attr("data-domaine") == 4)) && ($(this).attr("data-annee") == filtreAnnee)) {
                                        $(this).show();
                                    } else {
                                        $(this).hide();
                                    }
                                } else {

                                    if ((($(this).attr("data-annee") == 1) || ($(this).attr("data-annee") == 2)) && (($(this).attr("data-domaine") == 1) || ($(this).attr("data-domaine") == 2) || ($(this).attr("data-domaine") == 3) || ($(this).attr("data-domaine") == 4))) {
                                        $(this).show();
                                    } else {
                                        $(this).hide();
                                    }
                                }
                            }

                        });

                    }

                    var childrenHidden = 0;

                    for(var i = 0; i < $('.stages').children().length; i++){
                        if($('.stages').children().eq(i).not(":visible")){
                            childrenHidden++;
                        }
                    }

                    if(childrenHidden = $('.stages').children().length){
                        console.log("hidden");
                    }

                });


            });



            
        });
        
        
    });
    

})