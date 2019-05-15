<div id="searchingTextField">
	<div style="font-size:40px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: white;
				text-align: center;
				margin-top:5px;
				user-select: none;" 
		> 
		Поиск аниме
	</div>
</div>

<div id ="ganreField" class = "FieldSearchRight">
	<div style="font-size:28px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				margin-top:0px;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Выбрать жанр
	</div>
	
	<select name="selectGanre" 
			style="font-size:24px; 
				font-family: Comic Sans MS, Comic Sans, cursive;
				text-align-last: center;			
				color: rgba(0,150,250);
				width: 90%;
				margin-left: 15px;">
		<?php
			$query="select * from ganre_table;";
		
			$result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
		
			if($result)
			{
				while ($row = $result->fetch_assoc()) 
				{
					unset($id, $name);
					$id = $row['id_ganre'];
					$name = $row['name']; 
					echo '<option value="'.$id.'">'.$name.'</option>';
				}
			}
		?>
	</select>
	
</div>


<div id ="typeField" class = "FieldSearchRight">
	<div style="font-size:28px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				margin-top:0px;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Тип аниме
	</div>
	
	<select  style="font-size:24px; 
				font-family: Comic Sans MS, Comic Sans, cursive;
				text-align-last: center;			
				color: rgba(0,150,250);
				width: 90%;
				margin-left: 15px;">
		<?php
			$query="select * from anime_type_table;";
		
			$result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
		
			if($result)
			{
				while ($row = $result->fetch_assoc()) 
				{
					unset($id, $name);
					$id = $row['id_video_type'];
					$name = $row['name']; 
					echo '<option value="'.$id.'">'.$name.'</option>';
				}
			}
		?>
	</select>
</div>
<div id ="statusField" class = "FieldSearchRight">
	<div style="font-size:28px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				margin-top:0px;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Статус аниме
	</div>
	
	<select  style="font-size:24px; 
				font-family: Comic Sans MS, Comic Sans, cursive;
				text-align-last: center;			
				color: rgba(0,150,250);
				width: 90%;
				margin-left: 15px;">
		<?php
			$query="select * from exit_status_table;";
		
			$result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
		
			if($result)
			{
				while ($row = $result->fetch_assoc()) 
				{
					unset($id, $name);
					$id = $row['id_exit_status'];
					$name = $row['name']; 
					echo '<option value="'.$id.'">'.$name.'</option>';
				}
			}
		?>
	</select>
</div>
<div id ="numSeriesField" class = "FieldSearchRight">
	<div style="font-size:28px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				margin-top:0px;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Количество серий
	</div>
	
	<div style="font-size:28px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				margin-top:0px;
				user-select: none;"
		> 
		от  <!--Почему_не работают патерны !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!   pattern="[0-9]"   -->
		<input  id = "num1"  
				onkeydown = "javascript: return ( ((event.keyCode>47)&&(event.keyCode<58))||(event.keyCode==8) )"
				maxlength="4"
				style="font-size:24px; 
					font-family: Comic Sans MS, Comic Sans, cursive;
					text-align-last: center;			
					color: rgba(0,150,250);
					width: 20%;
					margin-left: 15px;
					margin-right: 15px;">
		</input>
		до
		<input  id = "num2"
				onkeydown = "javascript: return ( ((event.keyCode>47)&&(event.keyCode<58))||(event.keyCode==8) )"
				maxlength="4"
				style="font-size:24px; 
					font-family: Comic Sans MS, Comic Sans, cursive;
					text-align-last: center;			
					color: rgba(0,150,250);
					width: 20%;
					margin-left: 15px;">
		</input>
	
	</div>
	
</div>
<div id ="yearField" class = "FieldSearchRight">
	<div style="font-size:28px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				margin-top:0px;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Год выпуска
	</div>
	
	<div style="font-size:28px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				margin-top:0px;
				user-select: none;"
		> 
		от
		<input  id = "year1"
				onkeydown = "javascript: return ( ((event.keyCode>47)&&(event.keyCode<58))||(event.keyCode==8) )"
				maxlength="4"
				style="font-size:24px; 
					font-family: Comic Sans MS, Comic Sans, cursive;
					text-align-last: center;			
					color: rgba(0,150,250);
					width: 20%;
					margin-left: 15px;
					margin-right: 15px;">
		</input>
		до
		<input  id = "year2"
				onkeydown = "javascript: return ( ((event.keyCode>47)&&(event.keyCode<58))||(event.keyCode==8) )"
				maxlength="4"
				style="font-size:24px; 
					font-family: Comic Sans MS, Comic Sans, cursive;
					text-align-last: center;			
					color: rgba(0,150,250);
					width: 20%;
					margin-left: 15px;">
		</input>
	
	</div>
</div>
<div id ="limitationsField" class = "FieldSearchRight">
	<div style="font-size:28px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				margin-top:0px;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Возрастной рейтинг
	</div>
	
	<select  style="font-size:24px; 
				font-family: Comic Sans MS, Comic Sans, cursive;
				text-align-last: center;			
				color: rgba(0,150,250);
				width: 90%;
				margin-left: 15px;">
		<?php
			$query="select * from age_limitations_table;";
		
			$result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn));
		
			if($result)
			{
				while ($row = $result->fetch_assoc()) 
				{
					unset($id, $name);
					$id = $row['id_age_limitations'];
					$name = $row['name']; 
					echo '<option value="'.$id.'">'.$name.'</option>';
				}
			}
		?>
	</select>
</div>
<div id ="sortField" class = "FieldSearchRight">
	<div style="font-size:28px; 
				font-family: Impact, Arial, Helvetica, sans-serif;
				color: rgba(0,150,250);
				text-align: center;
				margin-top:0px;
				letter-spacing: 1px;
				user-select: none;"
		> 
		Сортировать по
	</div>
	
	<select  style="font-size:24px; 
				font-family: Comic Sans MS, Comic Sans, cursive;
				text-align-last: center;			
				color: rgba(0,150,250);
				width: 90%;
				margin-left: 15px;">
				<option value="1">убыванию</option>
                <option value="2">возрастанию</option>
	</select>
</div>
