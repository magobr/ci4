<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->

	<style {csp-style-nonce}>
	
		.middle{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
		}

		.alt-lef{
			background-image: url("assets/psicologia-1.jpg");
			background-size: cover;
		}

		.content{
			display: flex;
			flex-wrap:  wrap;
		}

		.col{
			flex: 1;
			height: 100vh;
			position: relative;
		}

	</style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->

<div class="content">
	<div class="col alt-lef">
		<h1>teste</h1>
	</div>

	<div class="col alt-right">
		<h1>teste</h1>
	</div>
</div>


<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>
