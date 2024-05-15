$(document).ready(
    function () {
        // $("p:first-of-type").css("font-family", "Arial");
        $("p:first-of-type").text("Hello World!").css({
            "font-family": "Verdana",
            "font-size": "3em",
            "font-weight": "bold",
            "color": "#e48512"
        });

        $("p:nth-of-type(3)").html("<mark><marquee>Bonjour le monde !</marquee></mark>")
    }
);