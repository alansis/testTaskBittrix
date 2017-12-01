function listCategory(result) {
    let dateRequst = JSON.parse(result);
    addOption(dateRequst);
}

function addOption(dateRequst) {
    let List = document.getElementById("ListCategory");

    for(let i=0; i<dateRequst.length; i++){
        let option = document.createElement('option');
        let content = document.createTextNode(dateRequst[i].name);
        option.appendChild(content);
        List.appendChild(option);
    }
}

