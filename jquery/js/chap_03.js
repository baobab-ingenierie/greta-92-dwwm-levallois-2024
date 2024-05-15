$(document).ready(
    function () {
        // // Début survol
        // $("p").mouseenter(function () {
        //     $(this).addClass("fond");
        // });

        // // Fin survol
        // $("p").mouseleave(function () {
        //     $(this).removeClass("fond");
        // });

        // Délégation d'événements
        // $("body").delegate("p", "mouseenter mouseleave", function(){
        //     $(this).toggleClass("fond");
        // });

        $("body").on("mouseenter mouseleave", "p", function(){
            $(this).toggleClass("fond");
        });

        // Enveloppe les paragraphes dans une DIV
        $("p").wrapAll('<div class="list" />')

        // Ajoute un paragraphe
        $("<p>La tour Eiffel</>").appendTo("div.list");

        // Mise en forme
        $("p").attr("style", "text-align:center");
        $("h2:first").removeAttr("align");
    }
);