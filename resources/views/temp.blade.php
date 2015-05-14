<html>
	<head>
		<title>People</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #fff;
                background-color : #16a765;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}
			
			li,h3 {
				  text-align: left;
			}
			a {
				color: #fff;
				text-decoration: none;
			}
			.container {
				text-align: center;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Peoples</div>
				@yield('contents')
			</div>
		</div>
	</body>
</html>