$(document).ready(function() {
    // ajax chart

    $.ajax({
        url: "core/chart.php",
        type: "POST",
        dataType: "json",

        success: function(data) {
            var value = [];
            for (var i = 1; i < data.length; i++) {
                value.push(Object.values(data[i])[0]);
                console.log(value);
            }

            var chartdata = {
                labels: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                ],
                datasets: [{
                    label: "Số sách",
                    fill: false,
                    lineTension: 0.3,
                    backgroundColor: chartColors.green,
                    borderColor: chartColors.green,
                    pointHoverBackgroundColor: chartColors.green,
                    pointHoverBorderColor: chartColors.green,
                    hoverBackgroundColor: chartColors.gold,
                    data: value,
                    yAxisID: "y-axis-1",
                }, ],
            };

            var ctx = $("#myChart");

            var LineGraph = new Chart(ctx, {
                type: "line",
                data: chartdata,
                options: {
                    title: {
                        display: true,
                        text: "",
                        maintainAspectRatio: false,
                        fontColor: chartColors.green,
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: "",
                            },
                        }, ],
                    },
                },
            });
        },
        error: function(data) {},
    });
    window.chartColors = {
        red: "rgb(255, 99, 132)",
        orange: "rgb(255, 159, 64)",
        yellow: "rgb(255, 205, 86)",
        green: "rgb(75, 192, 192)",
        blue: "rgb(54, 162, 235)",
        purple: "rgb(153, 102, 255)",
        gold: "rgb(248,193,28)",
        grey: "rgb(201, 203, 207)",
    };

    // ajax filter category
    $("#select_category").change(function() {
        var value = $("#select_category").find(":selected")[0].value;
        $.ajax({
            url: "core/filter_cate.php",
            type: "POST",
            data: { id: value },
            success: function(data) {
                $("#body-table").html(data);
            },
        });
    });
});