document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('kt_project_list_chart');
    if (!ctx) return;

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['In Process', 'Completed', 'Pending'],
            datasets: [{
                data: window.dashboardChartData || [0, 0, 0],
                backgroundColor: ['#0d6efd', '#198754', '#ced4da'],
                borderWidth: 1
            }]
        },
        options: {
            cutout: '70%',
            plugins: {
                legend: { display: false }
            }
        }
    });
});
