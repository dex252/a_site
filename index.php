<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html"; charset=UTF-8">

    <title>Neko cat</title>

	<?php $currentPage = 1; #текущая страница
		  $maxPage = 0; #max число страниц
	?>
	<script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/style.css"> 
	<link rel="stylesheet" type="text/css" href="./js/slick/slick.css">
	<script type="text/javascript" src="./js/slick/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./js/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="./css/slider-style.css"> 
	<script type="text/javascript" src="./js/functions.js"></script>
	<meta name="description" content="Сайт для просмотра аниме онлайн">
	<meta name="keywords" content="аниме, видео, просмотр, онлайн, тянки, куны, наруто, пикачу, саске, аоши">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./img/cat.ico" rel="shortcut icon" type="image/x-icon">
  
</head>

<div id="FullStack">
	<div id="body">
			<?php include "./pages/header.php"; ?>
		<div id="foundation">
			<div id ="animeMainField">
				<?php include "./pages/theMain/animeBlocks.php"; ?>
			</div><div id ="rigthField" >
				<div id="searchContainer">
					<?php include "./pages/searching.php"; ?>
				</div><div id="Profile">
						<?php include "./pages/profile.php"; ?>
					</div>
			</div><div id ="scrollContainer">
						<section class="regular slider">
							<?php include "./pages/theMain/pagesBlock.php"; ?> 
						</section>
					</div>	
	</div>
</div>

<script type="text/javascript" src="./js/slider-functions.js"></script>
</html>