<?php	
	$json = file_get_contents('http://localhost/api/api/post/read_block.php');
	$animeList = json_decode($json);
	
	if($animeList)
	{			
		$j =0;
		foreach ($animeList as $row)
		{
			$j=$j+1;
			unset($id, $link);
			$id = $row->id_anime;	
			$link = $row->img_link;	
			$name = $row->name;
			
			if ($j > (1*($currentPage*12)-12) && $j < (12*$currentPage + 1))
			{
				echo ('
				<div id="block'.$id.'" class="animeBlock" style="background-image: url('.$link.');" onclick="iSeeDeadPeople()">	
					<text>'.$name.'</text>
					<div class="testtext">'.$name.'</div>
				</div>
					');
			}
		}
	}
?>
