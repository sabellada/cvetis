$(document).ready(function(){
	$.ajax({
		url: "http://localhost/cvetis/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var player = [];
			var score = [];

			for(var i in data) {
				player.push("Player " + data[i].playerid);
				score.push(data[i].score);
			}

			var chartdata = {
				labels: player,
				datasets : [
					{
						label: 'Player Score',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			}

			var linechartdata = {
				labels: player,
				datasets : [
					{
						label: 'Player Score',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			};

			//bar
			var canvas = document.querySelector('#bar-canvas');
			var context = canvas.getContext('2d');

			new Chart(canvas, {
				type: 'bar',
				data: chartdata,
				options: {
			        responsive: true
			    },
			    maintainAspectRatio: false
			});

			//line
			var canvas = document.querySelector('#line-canvas');
			var context = canvas.getContext('2d');

			new Chart(canvas, {
				type: 'line',
				data: chartdata,
				options: {
			        responsive: true
			    },
			    maintainAspectRatio: false
			});

			//original canvas
			//add event listener to button
			document.getElementById('download-pdf').addEventListener("click", downloadPDF);

			//donwload pdf from original canvas
			function downloadPDF() {
				var barcanvas = document.querySelector('#bar-canvas');
				var linecanvas = document.querySelector('#line-canvas');
				//creates image
				var barcanvasImg = barcanvas.toDataURL("image/png", 1.0);
				var linecanvasImg = linecanvas.toDataURL("image/png", 1.0);
				
				//creates PDF from img
				var doc = new jsPDF('landscape');
				doc.setFontSize(20);
				doc.text(15, 15, "Charts");
				doc.addImage(barcanvasImg, 'png', 10, 10, 280, 150 );
				doc.addPage();
				doc.addImage(linecanvasImg, 'png', 10, 10, 280, 150 );
				doc.save('canvas.pdf');


			}
		},
		error: function(data) {
			console.log(data);
		}
	});
});