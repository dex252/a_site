<?php
		
			$query="select * from anime_table;";
		
			$result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
		
			if($result)
			{
				
				while ($row = $result->fetch_assoc()) 
				{
						unset($id, $link);
						$id = $row['id_anime'];				
						$link = $row['img_link']; 
						if ($id>0 && $id < 13)
						{
							echo ('
							<div id="block'.$id.'" class="animeBlock" style="background-image: url('.$link.');">
								
							</div>
								');
						}
				}
			}
?>