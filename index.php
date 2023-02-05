<!DOCTYPE html>
<html>
<head>
	<title>Infinite Useless Facts</title>
  <link href="/style.css" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/png" href="#">
</head>
<body>
<div id="wrapper">
	<h1>Infinite Useless Facts</h1>
	<button id="factButton">Load</button><br><br>
	<div class="factcontainer"><span id="factDisplay">Click Load first!</span></div>

	<script>
		const factButton = document.getElementById("factButton");
		const factDisplay = document.getElementById("factDisplay");

		factButton.addEventListener("click", function() {
			factDisplay.innerHTML = "Loading...";
			fetch('fact.php')
				.then(response => response.text())
				.then(fact => {
					factDisplay.innerHTML = fact;
				});
		});
	</script>
</div>
</body>
</html>

