<?php

	#считаем число страниц, на которых расположенно по 12 блоков - maxPage
	$result  = mysqli_query($conn, "select count(1) from anime_table group by id_anime;") or die("Ошибка " . mysqli_error($conn));
	$maxPage = mysqli_num_rows($result);
	
	$maxPage = ceil($maxPage/12);
	
	if ($maxPage<7)
	{
		$countPages = 1;
		while ($countPages < 7)
		{
			echo ('
				<div id="pageBlock'.$countPages.'" class="pageScroll" onclick="NumPage(this)";">
					<div class="ButtonPage" >'.$countPages.'</div>
				</div>
					');
			$countPages +=1;
		}			
	}
	else
	{
		$countPages = 1;
		while ($countPages < 5)
		{
			echo ('
				<div id="pageBlock'.$countPages.'" class="pageScroll" onclick="NumPage(this);">
					<div class="ButtonPage" >'.$countPages.'</div>
				</div>
					');
			$countPages +=1;
		}		
		
		echo ('
				<div id="pageBlockDots" class="pageScroll";">
					<div class="ButtonPageDots" >...</div>
				</div>
					');
			
		echo ('
				<div id="pageBlock'.$maxPage.'" class="pageScroll" onclick="NumPage(this);">
					<div class="ButtonPage" >'.$maxPage.'</div>
				</div>
					');	
	}
	
?>