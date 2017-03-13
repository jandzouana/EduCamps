window.onload = function () {

	//graph of total enrollment in our camp over time
	var chart = new CanvasJS.Chart("barContainer", {
		backgroundColor: "#faf7f5",
		title:{
			text: "Enrollment Per Camp",
			labelFontFamily: "Arial"
		},
		axisX:{
        labelFontSize: 15,
				labelFontFamily: "Arial"
      },
		dataPointMaxWidth: 20,

		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "doughnut",
			dataPoints: [
				{ label: "Apache",  y: 10  },
				{ label: "Eureka",  y: 10  },
				{ label: "Santa Clara", y: 15  },
				{ label: "Tahoe South", y: 25  },
				{ label: "Boulder",  y: 30  },
				{ label: "Chesapeake",  y: 28  },
				{ label: "Grapfruit Resort",  y: 10  },
				{ label: "Grapfruit Resort 2", y: 15  },
				{ label: "Little Derby", y: 25  },
				{ label: "Sweet Bayou",  y: 30  },
				{ label: "Nestor Camp",  y: 28  },
				{ label: "Lewis and Clark",  y: 10  },
				{ label: "Robotics Village", y: 15  },
				{ label: "Salt Camp", y: 25  },
				{ label: "Federal Camp",  y: 30  },
			]
		}
		]
	});
	chart.render();



	//graph of total enrollment in our camp over time
	var chart = new CanvasJS.Chart("graphContainer", {
		backgroundColor: "#faf7f5",
		title:{
			text: "Enrollment Over Time",
			labelFontFamily: "Arial"
		},
		axisX:{
        labelFontSize: 15,
				labelFontFamily: "Arial"
      },


		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "line",
			dataPoints: [
				{ x: new Date(2015, 00, 1), y: 450 },
        { x: new Date(2015, 01, 1), y: 414 },
        { x: new Date(2015, 02, 1), y: 520 },
        { x: new Date(2015, 03, 1), y: 460 },
        { x: new Date(2015, 04, 1), y: 450 },
        { x: new Date(2015, 05, 1), y: 500 },
        { x: new Date(2015, 06, 1), y: 480 },
        { x: new Date(2015, 07, 1), y: 480 },
        { x: new Date(2015, 08, 1), y: 410 },
        { x: new Date(2015, 09, 1), y: 500 },
        { x: new Date(2015, 10, 1), y: 480 },
        { x: new Date(2016, 11, 1), y: 510 }
			]
		}
		]
	});
	chart.render();
}
