function dateFromCategories() {
    this.val = "";
    this.key = "";
}

function SelectCategories() {
    let categories = new dateFromCategories();
    categories.key = document.getElementById("selectCategory").id;
    categories.val = document.getElementById("selectCategory").value;
    sendDateFromSelectCategories(categories);
    clear();
}

function clear() {
    let elementForm = document.getElementById("ListCategory");
    elementForm.innerHTML = "";
}

function sendDateFromSelectCategories(categories) {
    let data = JSON.stringify(categories);
    $.ajax({
        url: 'controller/AjaxController.php',
        type: 'post',
        data: data,
        success: function(result) {
            let dataForMap = JSON.parse(result);
            initMap(dataForMap);
            listCategory(result);
        },
        error: function (result) {
            alert("Сталась помилка зверніться до адміністрації");
        }
    });
}
