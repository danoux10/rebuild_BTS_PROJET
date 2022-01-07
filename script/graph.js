$(document).ready(function () {
    showPieGraph();
});

function showPieGraph()
{
    {
        $.post("../_function/encodeData.php",
            function (data)
            {
                console.log(data);
                var temp = [];
                var humi = [];
                var poids = [];
                var date = [];
                var time = [];
                for (var i in data) {
                    temp.push(data[i].temperature_data);
                    humi.push(data[i].humi_data);
                    poids.push(data[i].poids_data);
                    date.push(data[i].date_data);
                    time.push(data[i].time_data);
                }

                var bardata = {
                    labels: date,
                    datasets: [
                        {
                            label: 'température',
                            borderColor: '#880000',
                            data: temp
                        },{
                            label: 'humiditer',
                            borderColor: '#000088',
                            data: humi
                        },{
                            label: 'poids',
                            borderColor: '#008800',
                            data: poids
                        }
                    ]
                };
                var graphTarget = $("#graph");

                var barGraph = new Chart(graphTarget, {
                    type: 'line',
                    data: bardata
                });
            });
    }
}