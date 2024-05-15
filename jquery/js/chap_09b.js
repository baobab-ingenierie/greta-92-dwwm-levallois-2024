// Afficher : show()
// Masquer : hide()

$(document).ready(function () {
    let pays = $("select#pays");
    pays.on("change", function () {
        if (pays.val() === "tous") {
            $("ul li").filter(".item").show();
        } else {
            $("ul li").filter(".item").hide();
            $("ul li").filter("." + pays.val()).show();
        }
    });
});