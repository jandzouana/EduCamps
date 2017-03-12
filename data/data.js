window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Camp Enrollment"
		},
		axisX:{
        labelFontSize: 15,
      },
		dataPointMaxWidth: 20,

		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "bar",
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
}
