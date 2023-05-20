/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 *
 * @format
 */

const pieConfig = {
  type: "doughnut",
  data: {
    datasets: [
      {
        data: [20, 33, 33, 13],
        backgroundColor: ["#1e429f", "#1c64f2", "#7e3af2", "#1e629f"],
        label: "Dataset 1",
      },
    ],
    labels: ["Web", "Cloud", "Blockchain", "IA"],
  },
  options: {
    responsive: true,
    cutoutPercentage: 80,
    legend: {
      display: false,
    },
  },
};

// change this to the id of your chart element in HMTL
const pieCtx = document.getElementById("pie");
window.myPie = new Chart(pieCtx, pieConfig);
