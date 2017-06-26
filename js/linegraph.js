$(document).ready(function(){
	$.ajax({
		url : "../views/getDadosGrafico_1.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var id_criterio = [];
			var nota = [];
			var datas = [];
			var obs = [];

			for(var i in data) {
				id_criterio.push("Criterio ID " + data[i].id_criterio);
				nota.push(data[i].nota);
				datas.push(data[i].data);
				obs.push(data[i].obs);
			}

			var chartdata = {
				labels: datas,
				datasets: [
					{
						label: "Criterio ",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
						pointHoverBorderColor: "rgba(59, 89, 152, 1)",
						data: [2,3,4,5]
					},
					{
						label: "googleplus",
						fill: false,
						lineTension: 0.1,
						backgroundColor: "rgba(211, 72, 54, 0.75)",
						borderColor: "rgba(211, 72, 54, 1)",
						pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
						pointHoverBorderColor: "rgba(211, 72, 54, 1)",
						data: [2,2,2,2]
					}
				]
			};

			//var ctx = $("#canvas");
                        var ctx = document.getElementById("canvas").getContext("2d");


			var LineGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata
			});
		},
		error : function(data) {

		}
	});
});