<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ getenv('APP_NAME') ?? 'Leaf MVC' }}</title>
    <link rel="shortcut icon" href="https://leafphp.dev/logo-circle.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ PublicPath('assets/css/styles.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700;display=swap">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="flex center-all h-screen">
    <a href="/">Home</a><br/>
    <a href="/about">About</a>
	<div class="container">
		<div class="mt-3">
			<div class="flex center-start">
				<img src="https://www.leafphp.dev/logo-circle.png" alt="">
				<h4 style="font-size: 22px;">Welcome to Leaf <span class="green">3</span></h4>
			</div>
			<div class="flex card mt-3">

			</div>
		</div>
	</div>
</body>

</html>
