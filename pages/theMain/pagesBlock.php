<?php

	#считаем число страниц, на которых расположенно по 12 блоков - maxPage
	//$result  = mysqli_query($conn, "select count(1) from anime_table group by id_anime;") or die("Ошибка " . mysqli_error($conn));
	//$maxPage = mysqli_num_rows($result);
	
	
	$maxPage = count($animeList);
	$maxPage = ceil($maxPage/12);
	$countPages = 1;
	
	while ($countPages <= $maxPage)
	{
		echo ('
		<div id="pageBlock'.$countPages.'" class="pageScroll" onclick="NumPage(this)";">
					<div class="ButtonPage" >'.$countPages.'</div>
				</div>
		');	
		$countPages +=1;
	}	
?>	