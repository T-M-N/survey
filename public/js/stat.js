function createChart(itemData, count) {
    let resultDiv = document.getElementById("chartDataDiv");
    /* Créer une division response */
    let divResponsive = document.createElement("div");
    divResponsive.setAttribute("class", "col-md-12");
    divResponsive.setAttribute("class", "col-lg-6");
    /* Créer un canvas pour chaque item */
    let newCanvas = document.createElement("canvas");
    newCanvas.setAttribute("id", "myChart" + count);
    newCanvas.setAttribute("width", "400");
    newCanvas.setAttribute("height", "400");
    divResponsive.appendChild(newCanvas);
    resultDiv.appendChild(divResponsive);
    /* Paramétrer chaque graphe */
    if (document.getElementById("myChart" + count)) {
        new Chart(document.getElementById("myChart" + count), {
            "type": itemData.type,
            "data": itemData.data
        });
    }
}

if(document.getElementById("chartDataDiv")) {
    const url = getMyURL()+'chart/getData';
    fetch(url)
        .then((resp) => resp.json())
        .then(function (data) {
            let countTemp = 0;
            data.globalData.map(item =>
                (
                    countTemp++,
                    createChart(item, countTemp)
                )
            );
        });
}