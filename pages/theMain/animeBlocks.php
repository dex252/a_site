<?php
		
	$query="select * from anime_table;";
		
	$animeList = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
		
	if($animeList)
	{
				
		while ($row = $animeList->fetch_assoc()) 
		{
			unset($id, $link);
			$id = $row['id_anime'];				
			$link = $row['img_link']; 
			if ($id > (1*($currentPage*12)-12) && $id < (12*$currentPage + 1))
			{
				echo ('
				<div id="block'.$id.'" class="animeBlock" style="background-image: url('.$link.');">		
				</div>
					');
			}
		}
	}
?>
