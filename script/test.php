	<canvas id="myChart" width="400" height="400"></canvas>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
	type: 'line',
    data: {
		labels: ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'],
        datasets: [{
			label: 'temperature',
            data: [12, 19, 3, 5, 2, 3],
            borderColor: [
			 'rgba(255, 0, 0, 1)'
			],
            borderWidth: 1
        }]
    },
    options: {
		scales: {
			y: {
				beginAtZero: true
            }
		}
	}
});
</script>