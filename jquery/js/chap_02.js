$(document).ready(
    function () {
        // Change le titre
        $("#titreCV").text("Aventurière et archéologue");

        // Affiche l'âge
        let dob = $("#divAge").text();
        let d1 = dob.split('/');
        $("#divAge").text(age(new Date(d1[2], d1[1], d1[0])) + " ans");

        // Mise en forme
        $(".titreSection").css("background", "#ef3321");
        $(".dateCV").css("font-weight", "bolder");
    }
);

/**
 * Renvoie l'âge en années à partir de deux dates
 * @param {integer} date1 - Date de début
 * @param {integer} date2 - Date de fin (par défaut aujourd'hui)
 * @return {integer}
 */
function age(date1, date2 = new Date()) {
    let d1 = new Date(date1), d2 = new Date(date2)
    if (isNaN(d1) || isNaN(d2)) {
        throw new Error("L'une des deux dates est incorrecte !");
    } else {
        return Math.floor(Math.abs((d2 - d1) / 1000 / 60 / 60 / 24 / 365.25));
    }
}

/**
 * Teste la fonction age
 */
function testAge() {
    console.log(age(123456789));
    console.log(age('2020-12-03', '11/12/1913'));
    console.log(age('toto aime les gâteaux'))
}