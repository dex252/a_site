<div id="searchingTextField">
	<div style="font-size:26px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: white;
				text-align: center;
				line-height: 24px;
				margin-top:5px;
				user-select: none;" 
		> 
		Поиск
	</div>
</div>

<div id ="ganreField" class = "FieldSearchRight">
	<div style="font-size:22px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				margin-top:0px;
				line-height: 24px;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Жанр
	</div>
	
	<select id="selectGanre" name="selectGanre" 
			style="font-size:20px; 
				font-family: Comic Sans MS, Comic Sans, cursive;
				text-align-last: center;			
				color: rgba(0,150,250);
				width: 90%;
				margin-left: 5%">
		<?php
		
			$json4 = file_get_contents('http://localhost/api/api/post/read_ganre_table.php');
			$searchList = json_decode($json4);
	
			foreach ($searchList as $row)
			{
				unset($id_ganre, $name);
				$id_ganre = $row->id_ganre;	
				$name = $row->name;	
				echo '<option value="'.$id_ganre.'">'.$name.'</option>';
			}
		?>
	</select>
	
</div>


<div id ="typeField" class = "FieldSearchRight">
	<div style="font-size:20px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Тип
	</div>
	
	<select id="selectType" name="selectType"
				style="font-size:20px; 
				font-family: Comic Sans MS, Comic Sans, cursive;
				text-align-last: center;			
				color: rgba(0,150,250);
				width: 90%;
				margin-left: 5%;">
		<?php
			$json4 = file_get_contents('http://localhost/api/api/post/read_anime_type_table.php');
			$searchList = json_decode($json4);
			echo $searchList;
			foreach ($searchList as $row)
			{
				unset($id_video_type, $name);
				$id_video_type = $row->id_video_type;	
				$name = $row->name;	
				echo '<option value="'.$id_video_type.'">'.$name.'</option>';
			}
		?>
	</select>
</div>
<div id ="statusField" class = "FieldSearchRight">
	<div style="font-size:22px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Статус
	</div>
	
	<select id="selectStatus" name="selectStatus" 
				style="font-size:20px; 
				font-family: Comic Sans MS, Comic Sans, cursive;
				text-align-last: center;			
				color: rgba(0,150,250);
				width: 90%;
				margin-left: 5%;">
		<?php
			$json4 = file_get_contents('http://localhost/api/api/post/read_exit_status_table.php');
			$searchList = json_decode($json4);
			echo $searchList;
			foreach ($searchList as $row)
			{
				unset($id_exit_status, $name);
				$id_exit_status = $row->id_exit_status;	
				$name = $row->name;	
				echo '<option value="'.$id_exit_status.'">'.$name.'</option>';
			}
		?>
	</select>
</div>

<div id ="yearField" class = "FieldSearchRight">
	<div style="font-size:22px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Год выпуска
	</div>
	
	<div id="selectYear" name="selectYear"
				style="font-size:20px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				user-select: none;"
		> 
		от
		<input  id = "year1" 
				onkeydown = "javascript: return ( ((event.keyCode>47)&&(event.keyCode<58))||(event.keyCode==8) )"
				maxlength="4"
				style="font-size:16px; 
					font-family: Comic Sans MS, Comic Sans, cursive;
					text-align-last: center;			
					color: rgba(0,150,250);
					width: 20%;
					margin-left: 5%;
					margin-right: 5%;">
		</input>
		до
		<input  id = "year2"
				onkeydown = "javascript: return ( ((event.keyCode>47)&&(event.keyCode<58))||(event.keyCode==8) )"
				maxlength="4"
				style="font-size:16px; 
					font-family: Comic Sans MS, Comic Sans, cursive;
					text-align-last: center;			
					color: rgba(0,150,250);
					width: 20%;">
		</input>
	
	</div>
</div>

<button id = "buttonSearch" onclick="searchVideo()">
	<div style="font-size:22px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Найти
	</div>
</button>


