<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learning Laravel Website</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icons-main/font/bootstrap-icons.min.css">

	<link rel="stylesheet" href="style.css">

</head>
<body>
		
<header>
		<nav class="navbar navbar-default" role="navigation">

			<!-- Brand and toggle get grouped for better mobile display -->
 			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-targe\t="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
				 	<span class="icon-bar"></span>
				 	<span class="icon-bar"></span>
				 	<span cllass="icon-bar"></span>
				</button>

			<a class="navbar-brand" href="/">TODO Application</a>
 				</div>

					 <!-- Collect the nav links, forms, and other content for toggling -->
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					 <ul class="nav navbar-nav navbar-right">
					 <li><a href="/">Home</a></li>
					 <li><a href="/create">Create</a></li>
					 <li><a href="/contact">Contact</a></li>
					 </ul>
					 </div><!-- /.navbar-collapse -->
 	</nav>
 </header>


		@yield('content')

			<div class="bottom-menu">
				<div class="container">
			 		<div class="row">
			 			<div class="col-md-2 navbar-brand">
			 				<a href="/">Learning Laravel</a>
			 			</div>

 						<div class="col-md-10">
 							<ul class="bottom-links">
								 <li><a href="/">Home</a></li>
								 <li><a href="/about">About</a></li>
								 <li><a href="/contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
</body>
</html>