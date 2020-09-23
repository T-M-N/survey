//Pie chart
function createChart(itemData, count) {
    let resultDiv = document.getElementById("pieChart");
    // Créer une division response
    let divResponsive = document.createElement("div");
    divResponsive.setAttribute("class", "col-md-12");
    divResponsive.setAttribute("class", "col-lg-6");
    // Créer un canvas pour chaque item 
    let newCanvas = document.createElement("canvas");
    newCanvas.setAttribute("id", "myChart" + count);
    newCanvas.setAttribute("width", "400");
    newCanvas.setAttribute("height", "400");
    divResponsive.appendChild(newCanvas);
    resultDiv.appendChild(divResponsive);
    // Paramétrer chaque graphique
    if (document.getElementById("myChart" + count)) {
        new Chart(document.getElementById("myChart" + count), {
            "type": itemData.type,
            "data": itemData.data
        });
    }
}

if (document.getElementById("pieChart")) {
    const url = getMyURL() + 'chart/getData';
    fetch(url)
        .then((response) => response.json())
        .then(data => {
            let countTemp = 0;           
            data.pieData.map(item =>
                {
                    countTemp++,
                    createChart(item, countTemp)
                }
            );
        });
}


//Radar chart
function createChartRadar(itemDataRadar) {
    let resultDiv = document.getElementById("radarChart");
    // Créer une division response */
    let divResponsive = document.createElement("div");
    divResponsive.setAttribute("class", "col-md-12");
    divResponsive.setAttribute("class", "col-lg-6");
    //Créer un canvas pour chaque item
    let newCanvas = document.createElement("canvas");
    newCanvas.setAttribute("id", "myRadar");
    newCanvas.setAttribute("width", "400");
    newCanvas.setAttribute("height", "400");
    divResponsive.appendChild(newCanvas);
    resultDiv.appendChild(divResponsive);
    // Paramétrer chaque graphique
    if (document.getElementById("myRadar")) {
        new Chart(document.getElementById("myRadar"), {
            type: 'radar',
            data: {
                labels: ["Image", "Confort", "Réseau", "Graphisme", "Audio"],
                datasets: [{
                    label: "La qualité des services",
                    backgroundColor: "rgba(179,181,198,0.2)",
                    borderColor: "rgba(179,181,198,1)",
                    pointBackgroundColor: "rgba(179,181,198,1)",
                    pointBorderColor: "#000",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(179,181,198,1)",
                    "data": itemDataRadar
                }],
            },
            options: {
                scale: {
                    ticks: {
                        max: 5,
                        min: 0,
                        stepSize: 1
                    }
                }
            }

        });
    }
}

if (document.getElementById("radarChart")) {
    const url = getMyURL() + 'chart/getDataRadar';
    fetch(url)
        .then((response) => response.json())
        .then(data => {
            createChartRadar(data.questionData.data.datasets.data);
        });
}