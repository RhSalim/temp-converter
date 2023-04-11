<!DOCTYPE html>
<html>
<head>
	<title>Temperature Converter</title>
	<link rel="stylesheet" href="style.css">
	<script src="temp-converter.js"></script>
</head>
<body>
	<div class="container">
		<h1>Temperature Converter</h1>
		<form method="post">
			<label for="temp">Enter temperature:</label>
			<input type="number" id="temp" name="temp" required>
			<select name="unit">
				<option value="celsius">Celsius</option>
				<option value="fahrenheit">Fahrenheit</option>
				<option value="kelvin">Kelvin</option>
			</select>
			<button type="submit">Convert</button>
		</form>
		<div id="result">
			<?php
			// Check if the form has been submitted
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$temp = $_POST["temp"];
				$unit = $_POST["unit"];

				// Convert the temperature to the desired unit
				$convertedTemp = 0;
				$resultUnit = "";

				if ($unit == "celsius") {
					$convertedTemp = ($temp - 32) * 5/9;
					$resultUnit = "Celsius";
				} else if ($unit == "fahrenheit") {
					$convertedTemp = $temp * 9/5 + 32;
					$resultUnit = "Fahrenheit";
				} else if ($unit == "kelvin") {
					$convertedTemp = ($temp - 32) * 5/9 + 273.15;
					$resultUnit = "Kelvin";
				}

				// Display the result
				echo '<div class="result-box">' . $temp . ' degrees ' . $unit . ' is ' . number_format($convertedTemp, 2) . ' degrees ' . $resultUnit . '.</div>';
			}
			?>
		</div>
	</div>
</body>
</html>
