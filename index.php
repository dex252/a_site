<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html"; charset=UTF-8">

    <title>Neko cat</title>

	<?php $currentPage = 1; #текущая страница
		  $maxPage = 0; #max число страниц
	?>
    <link rel="stylesheet" type="text/css" href="./css/style.css"> 
	<script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./js/functions.js"></script>
	<meta name="description" content="Сайт для просмотра аниме онлайн">
	<meta name="keywords" content="аниме, видео, просмотр, онлайн, тянки, куны, наруто, пикачу, саске, аоши">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./img/cat.ico" rel="shortcut icon" type="image/x-icon">
	
</head>

<body>

    <header>
		<?php include "./pages/header.php"; ?>
		<!--<iframe width="650" height="400" src="http://video.sibnet.ru/shell.php?videoid=3535100" style="position:relative; z-index:500"></iframe> -->
	</header>
	
	<div id="foundation">
		<div id ="animeMainField">
			<?php include "./pages/theMain/animeBlocks.php"; ?>
		</div><div id="searchContainer">
			<?php include "./pages/searching.php"; ?>
		</div><div id ="scrollContainer">
			<?php include "./pages/theMain/pagesBlock.php"; ?>
		</div>
		
	</div>	
</body>

</html>