let dataInicio;
let dataFinal;

$(document).ready(function() {
  dataInicio = $("input[name=data_inicio]").val();
  dataFinal = $("input[name=data_final]").val();
  recarregar();
});

$("input[name=data_inicio]").change(function() {
  document.getElementById("divLineChart").innerHTML = "";
  document.getElementById("divLineChart").innerHTML =
    '<canvas id="myAreaChart"></canvas>';

  dataInicio = $("input[name=data_inicio]").val();
  dataFinal = $("input[name=data_final]").val();
  recarregar();
});

$("input[name=data_final]").on("change", function() {
  document.getElementById("divLineChart").innerHTML = "";
  document.getElementById("divLineChart").innerHTML =
    '<canvas id="myAreaChart"></canvas>';

  dataInicio = $("input[name=data_inicio]").val();
  dataFinal = $("input[name=data_final]").val();
  recarregar();
});

function recarregar() {
  $.ajax({
    // url: "http://www.ezy3d.com.br/dashboard/controle/graficos.php",
    url:
      "http://localhost/tccezy3d/public_html/dashboard/controle/graficos.php",
    type: "post",
    data: {
      dataInicio: dataInicio,
      dataFinal: dataFinal,
      linechart: "linechart"
    },
    success: function(resposta) {
      let json = $.parseJSON(resposta);

      let nomeMes = [],
        nomeDia = [],
        numDia = [],
        numDiaNomeMes = [],
        acessos = [];

      for (let index = 0; index < json.length; index++) {
        nomeMes[index] = json[index]["nome_mes"];
        nomeDia[index] = json[index]["nome_dia"];
        numDia[index] = json[index]["dia"];
        numDiaNomeMes[index] =
          json[index]["dia"] + " de " + json[index]["nome_mes"] + " de 2019";
        acessos[index] = json[index]["visualizacoes"];
      }

      // Area Chart Example
      var ctx = document.getElementById("myAreaChart");
      var myLineChart = new Chart(ctx, {
        type: "line",
        data: {
          labels: numDiaNomeMes,
          datasets: [
            {
              label: "Visitantes",
              lineTension: 0.3,
              backgroundColor: "rgba(78, 115, 223, 0.05)",
              borderColor: "rgba(78, 115, 223, 1)",
              pointRadius: 0,
              pointBackgroundColor: "rgba(78, 115, 223, 1)",
              pointBorderColor: "rgba(78, 115, 223, 1)",
              pointHoverRadius: 3,
              pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
              pointHoverBorderColor: "rgba(78, 115, 223, 1)",
              pointHitRadius: 10,
              pointBorderWidth: 2,
              data: acessos
            }
          ]
        },
        options: {
          maintainAspectRatio: false,
          layout: {
            padding: {
              left: 10,
              right: 25,
              top: 25,
              bottom: 0
            }
          },
          scales: {
            xAxes: [
              {
                time: {
                  unit: "date"
                },
                gridLines: {
                  display: true,
                  drawBorder: true
                },
                ticks: {
                  maxTicksLimit: 2,
                  maxRotation: 0,
                  minRotation: 0
                }
              }
            ],
            yAxes: [
              {
                ticks: {
                  maxTicksLimit: 5,
                  padding: 10,
                  // Include a dollar sign in the ticks
                  callback: function(value, index, values) {
                    return value;
                  }
                },
                gridLines: {
                  color: "rgb(234, 236, 244)",
                  zeroLineColor: "rgb(234, 236, 244)",
                  drawBorder: false,
                  borderDash: [2],
                  zeroLineBorderDash: [2]
                }
              }
            ]
          },

          legend: {
            display: false
          },
          tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: "#6e707e",
            titleFontSize: 14,
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            intersect: false,
            mode: "index",
            caretPadding: 10,
            callbacks: {
              label: function(tooltipItem, chart) {
                var datasetLabel =
                  chart.datasets[tooltipItem.datasetIndex].label || "";
                return datasetLabel + ": " + tooltipItem.yLabel;
              }
            }
          }
        }
      });
    },
    timeout: 10000,
    error: function() {
      alert("O servidor demorou muito para responder, faça login novamente.");
      window.location.href =
        "http://www.ezy3d.com.br/controle/logout.php?log=true";
    }
  });
}
