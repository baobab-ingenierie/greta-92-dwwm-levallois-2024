$(document).ready(function () {
    // Remplit la liste des départements : XHR
    let xhr = new XMLHttpRequest();
    xhr.open("get", "https://geo.api.gouv.fr/departements/");
    xhr.send();
    xhr.addEventListener("readystatechange", function () {
        if ((xhr.readyState === 4) && (xhr.status === 200 || xhr.status === 0)) {
            let data = JSON.parse(xhr.responseText), select = document.querySelector("#dept"), option;
            for (i = 0; i < data.length; i++) {
                option = document.createElement("option");
                option.value = data[i].code;
                option.textContent = data[i].nom;
                select.appendChild(option);
            }
        }
    });

    // Remplit la liste des communes vs département
    $("#dept").on("change", function () {
        $.ajax({
            url: "https://geo.api.gouv.fr/departements/" + $("#dept").val() + "/communes",
            // dataType: "json",
            jsonp: "jsonp",
            success: function (data) {
                $("#cities").empty();
                data.forEach(function (elt) {
                    $("#cities").append('<option value="' + elt.code + '">' + elt.nom + '</option>');
                });
            },
            error: function () {
                alert("Une erreur est survenue !");
            }
        });
    });
});