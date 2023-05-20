/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 * @format
 */

const lineConfig = {
  type: "line",
  labels: [
    "Janvier",
    "Fevrier",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aout",
    "Septembre",
    "Octobre",
    "Novembre",
    "Decembre",
  ],
  data: {
    datasets: [
      {
        label: "Clients",
        backgroundColor: "#0694a2",
        borderColor: "#0694a2",
        data: [43, 48, 40, 54, 67, 73, 70, 56, 78, 98, 44, 98],
        fill: false,
      },
    ],

    options: {
      scales: {
        x: {
          display: true,
          scaleLabel: {
            display: true,
            labelString: "Month",
          },
        },
        y: {
          display: true,
          scaleLabel: {
            display: true,
            labelString: "Value",
          },
        },
      },
    },
  },
};

// change this to the id of your chart element in HMTL
const lineCtx = document.getElementById("line");
window.myLine = new Chart(lineCtx, lineConfig);
