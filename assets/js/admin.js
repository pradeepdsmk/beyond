$(function () {


    $.ajax({
        url: '/admin/get_data',
        type: 'get',
        success: function (response) {
            paintTheChart(response);
        },
        error: function (xhr) {
            alert('failed getting data for admin pie chart');
        }
    });

});


function paintTheChart(response) {
    var data = JSON.parse(response);
    var ctx = document.getElementById('myChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Web Development', 'Digital Marketing'],
            datasets: [{
                    data: data,
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ]
                }]
        },
        options: {}
    });
}