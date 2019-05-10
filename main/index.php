<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html"; charset=UTF-8">

    <title>Tentacles World</title>
	
    <link rel="stylesheet" href="./css/style.css"> 
	<script type="text/javascript" src="./js/functions.js"></script>
	
	<meta name="description" content="Сайт для просмотра аниме онлайн">
	<meta name="keywords" content="аниме, видео, просмотр, онлайн, тянки, тентакли">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./img/cat.ico" rel="shortcut icon" type="image/x-icon">
	
</head>

<body>

    <header>
		<div id="logo" class="Header">
				<img src="./img/header/background.png" class="HeaderImage">
				<div id="register">
					<a href="./index.html" type="text/css" class="TextMenuStyle">
						<div class="ButtonRegistration" >Регистарция</div>
					</a>
				</div>
				<div id="enter">
					<a href="./index.html" type="text/css" class="TextMenuStyle">
						<div class="ButtonEnter"> Вход</div>
					</a>
				</div>
		</div> 
		
		<div id="menu">
			<div id="filler1"></div>
			
			<div id="buttonMainMenuHelpType">
				<a href="./index.html" type="text/css" class="TextMenuStyle">
					<div class="ButtonMenuWhite" >Помощь</div>
				</a>
			</div>
			
			<div id="buttonRandomMenuType">
				<a href="./index.html" type="text/css" class="TextMenuStyle">
					<div class="ButtonMenuWhite">Случайное
						<font size="3"><span style='padding-left:55px;'> </span>аниме</font>
					</div>
				</a>
			</div>
			
			<div id="buttonMainMenuTop100" class="buttonMainMenu">
				<a href="./index.html" type="text/css" class="TextMenuStyle">
					<div class="ButtonMenuWhite">Топ-100
						<font size="3"><span style='padding-left:30px;'></span>аниме</font>
					</div>
				</a>
			</div>
			
			<div id="buttonMainMenuGeneral" class="buttonMainMenu">
				<a href="./index.html" type="text/css" class="TextMenuStyle">
					<div class="ButtonMenuWhite">Главная</div>
				</a>
			</div>

		</div>
		
		<div id="mainSearch">
			 <span class="SearchingClass" onclick="StartSearch()">
				<div id ="searchSymbol"></div>
			</span>
			
			<div id="searchText">
				 <p><input class="searchTextInput" 
							style="font-size:25px; 
								  font-family: Comic Sans MS, Comic Sans, cursive; 
								  color: deepskyblue;"
							type="search" 
							name="searhInput" 
							placeholder="Найти аниме по названию"> 
				 </p>
			</div>
		</div>
		
		<div id ="animeBlocks">
			<?php
				for($i=1; $i<=12; $i++)
				{ 
					echo ('
						<div id="block'.$i.'" class="animeBlock">
							
						</div>
						');
				}
			?>

		</div>
	</header>


</body>

</html>