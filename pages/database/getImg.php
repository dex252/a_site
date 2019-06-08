<?php
		
	$result1 = mysqli_query($conn, "select id_anime, img_link from anime_table;") or die("Ошибка " . mysqli_error($conn));
    
	if($result1)
	{
		while($row = $result1->fetch_array(MYSQLI_ASSOC)) {
				$to_encode[] = $row;
		}
		echo json_encode($to_encode);
	}
$result1->close();
?>