$(document).ready(function () {


    $(window).bind('beforeunload', function () {

        $("#filtre3").prop('checked', true);
        $("#filtre2").prop('checked', false);
        $("#filtre1").prop('checked', false);

    });

    var filtreAnnee = 3;
    var domaineCard = 5;
    var messNone = true;
    var stagesCount = $(".stages").children().length;
    var map = L.map('mapid').setView([48.8485022, 2.5764791], 2);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    var long, lat, entreprise, layer = [];

    $(".btnDefil").on("click", function (e) {
        $(this).parent().toggleClass("active");
    });


    $(".choix").on("click", function (e) {

        if ($(this).hasClass("card")) {
            domaineCard = $(this).attr("data-domaine");
        } else if ($(this).hasClass("radioCheck")) {
            filtreAnnee = $(this).attr("value");
        }

        $(".card").on("click", function (e) {


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

        });

        $(".radioCheck").on("change", function (e) {
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

        });

        setTimeout(() => {

            var stagesHidden = 0;

            for (var l = 0; l < stagesCount; l++) {
                if ($(".stages").children().eq(l).css('display') == 'none') {
                    stagesHidden++;
                }
            }

            if ((stagesHidden == stagesCount) && (messNone == true)) {
                $(".stages").append('<h1 id="pasStages">Aucun témoignage disponible :(</h1>')
                messNone = false;
            } else if (($("#pasStages") != undefined) && (stagesHidden != stagesCount) && (messNone == false)) {
                $("#pasStages").remove();
                messNone = true;
            }
        }, 10);

    });



    $("#map").on("click", function () {

        setTimeout(function () {
            map.invalidateSize()
        }, 10);

        for (var j = 0; j < stagesCount; j++) {
            if (layer[j] != undefined) {
                layer[j].remove();
            }
        }


        for (var i = 0; i < stagesCount; i++) {


            if (($(".stages").children().eq(i).attr("data-long") != "") && ($(".stages").children().eq(i).attr("data-lat") != "") && ($(".stages").children().eq(i).css('display') != 'none')) {


                if (domaineCard != 5) {

                    if (filtreAnnee != 3) {

                        if (($(".stages").children().eq(i).attr("data-domaine") == domaineCard) && ($(".stages").children().eq(i).attr("data-annee") == filtreAnnee)) {
                            long = $(".stages").children().eq(i).attr("data-long");
                            lat = $(".stages").children().eq(i).attr("data-lat");
                            entreprise = $(".stages").children().eq(i).attr("data-entreprise");
                        }

                    } else {

                        if ((($(".stages").children().eq(i).attr("data-annee") == 1) || ($(".stages").children().eq(i).attr("data-annee") == 2)) && ($(".stages").children().eq(i).attr("data-domaine") == domaineCard)) {
                            long = $(".stages").children().eq(i).attr("data-long");
                            lat = $(".stages").children().eq(i).attr("data-lat");
                            entreprise = $(".stages").children().eq(i).attr("data-entreprise");
                        }
                    }

                } else {

                    if (filtreAnnee != 3) {

                        if ((($(".stages").children().eq(i).attr("data-domaine") == 1) || ($(".stages").children().eq(i).attr("data-domaine") == 2) || ($(".stages").children().eq(i).attr("data-domaine") == 3) || ($(".stages").children().eq(i).attr("data-domaine") == 4)) && ($(".stages").children().eq(i).attr("data-annee") == filtreAnnee)) {
                            long = $(".stages").children().eq(i).attr("data-long");
                            lat = $(".stages").children().eq(i).attr("data-lat");
                            entreprise = $(".stages").children().eq(i).attr("data-entreprise");
                        }

                    } else {
                        long = $(".stages").children().eq(i).attr("data-long");
                        lat = $(".stages").children().eq(i).attr("data-lat");
                        entreprise = $(".stages").children().eq(i).attr("data-entreprise");
                    }
                }

                layer[i] = L.marker([long, lat]).addTo(map)
                    .bindPopup(entreprise);
            }

        }

        $("#mapid").show();
        $(".bgMap").show();
        $("html").css("overflow", "hidden");

    });

    $(".bgMap span").on("click", function () {
        $("#mapid").hide();
        $(".bgMap").hide();
        $("html").css("overflow", "auto");
    });

})