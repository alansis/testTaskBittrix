var baseDateForLoad = {
    key: "baseData",
    value: "DataForBaseLoad"
};


function sendDataToServerForBasePage() {
    let data = JSON.stringify(baseDateForLoad);
    $.ajax({
        url: 'controller/AjaxController.php',
        type: 'post',
        data: data,
        success: function(result) {
            dataForMap = JSON.parse(result);
            initMap(dataForMap);
        },
        error: function (result) {
            alert("Сталась помилка зверніться до адміністрації");
        }
    });
}

document.addEventListener("DOMContentLoaded", sendDataToServerForBasePage);




