<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		
		<title>Laravel From Scratch</title>
	</head>
	<body>
	
	<header>
		<a href="home" id="logo"><img src="images/logoInformatiqueVert.jpg" alt="logo" /></a>
		<nav id="menu">
			<a href="/">Accueil</a>
			<a href="shop">Shop</a>
			<a href="about">À propos</a>
			<a href="people">Personnes</a>
		</nav>
	</header>
		
	<div id="page">		
		<div id="content">

			@yield('content')

		</div><!-- content -->
	</div><!-- page -->
	
	<footer>
		&copy; 2015 <a href="http://www.cpnv.ch">CPNV</a> - YSN - All Rights Reserved
		@yield('footer')
	</footer>
	
	</body>
</html>