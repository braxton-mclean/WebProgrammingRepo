var employees = [];

function getEmployeeHours() {
	var employeeHours = 0;
	var index = 0;
	console.log("Work work");
	while (employeeHours > -1 || isNaN(employeeHours)) {
		var input = prompt("Please enter the number of hours employee " + (index + 1) + " has worked this week:");
		employeeHours = parseInt(input);

		if (!isNaN(employeeHours) && employeeHours > -1) {
			employees[index] = employeeHours;
			index = index + 1;
		} else if (employeeHours < 0) {
			continue;
		} else {
			window.alert("You did not enter a valid number, please retry or type in a number less than 0 to stop");
		}
	}
}

function getEmployeeTableHTML() {
	getEmployeeHours();

	var employeeTableHTML = "<table cellpadding='1px' cellspacing='1px' style='border: 1px solid black'>";
	var employeeTableHTML = employeeTableHTML + "<tr><th>Num</th><th>Hours</th><th>Earnings</th></tr>";
	var i;
	for (i = 0; i < employees.length; i++) {
		var employeeHours = employees[i];
		var overtimeHours = 0;

		var employeeNumHTML = "<th width='35px' style='border: 1px solid black'>" + (i + 1).toString() + "</th>";
		var employeeHoursHTML = "<th width='35px' style='border: 1px solid black'>" + employeeHours.toString() + "</th>";

		if (employeeHours > 40) {
			overtimeHours = employeeHours - 40;
			employeeHours = 40;
		}

		var employeeEarningsHTML = "<th width='60px' style='border: 1px solid black'>" + ((employeeHours * 15) + (overtimeHours * 15 * 1.5)).toString() + "</th>";
		employeeTableHTML = "<tr>" + employeeTableHTML + employeeNumHTML + employeeHoursHTML + employeeEarningsHTML + "</tr>"
	}
	employeeTableHTML = employeeTableHTML + "</table>";
	return employeeTableHTML;
}
