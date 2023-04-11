// This script is not necessary for the functionality of the converter, but it adds a little bit of interactivity

const tempInput = document.getElementById("temp");
const unitSelect = document.getElementById("unit");

tempInput.addEventListener("input", () => {
	if (unitSelect.value === "celsius") {
		tempInput.setAttribute("placeholder", "Enter temperature in Celsius");
	} else if (unitSelect.value === "fahrenheit") {
		tempInput.setAttribute("placeholder", "Enter temperature in Fahrenheit");
	} else if (unitSelect.value === "kelvin") {
		tempInput.setAttribute("placeholder", "Enter temperature in Kelvin");
	}
});

unitSelect.addEventListener("change", () => {
	if (unitSelect.value === "celsius") {
		tempInput.setAttribute("placeholder", "Enter temperature in Celsius");
	} else if (unitSelect.value === "fahrenheit") {
		tempInput.setAttribute("placeholder", "Enter temperature in Fahrenheit");
	} else if (unitSelect.value === "kelvin") {
		tempInput.setAttribute("placeholder", "Enter temperature in Kelvin");
	}
});
