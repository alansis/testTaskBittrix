function dateFromOnePlace() {
    this.val = "";
    this.key = "";
}

function SelectOnePlace() {
    let place = new dateFromOnePlace();
    place.key = document.getElementById("ListCategory").id;
    place.val = document.getElementById("ListCategory").value;
    sendDataAboutOnePlace(place);
}

function sendDataAboutOnePlace(place) {
    let data = JSON.stringify(place);
    $.ajax({
        url: 'controller/AjaxController.php',
        type: 'post',
        data: data,
        success: function(result) {
            let dataAbountOnePlace = JSON.parse(result);
            initMap(dataAbountOnePlace);
        },
        error: function (result) {
            alert("Сталась помилка зверніться до адміністрації");
        }
    });
}

