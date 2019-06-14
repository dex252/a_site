function StartSearch() {
	var now = new Date();
	alert( now );
}

function NumPage(number){
		$currentPage=number.id.replace(/[^-0-9]/gim,'');
		$.get("http://localhost/api/api/post/read_block.php").done(function(data){
			
		var $main = document.getElementById('animeMainField');
		$main.innerHTML = '';
		
		i=($currentPage*12-11);
		
		while (i<($currentPage*12+1)) 
			{
				var div=document.createElement('block'+i);
				div.id = "block"+i;
				div.className = "animeBlock";
				if (data[i-1])
				{
					id_anime = data[i-1]["id_anime"]
					img_link = data[i-1]["img_link"]
					name_anime = data[i-1]['name']
					div.style.backgroundImage=("url("+img_link+")");
					
					animeMainField.appendChild(div);
					
					document.getElementById('block'+i).innerHTML += '<span">'+name_anime+'</span>';

					document.getElementById('block'+i).onclick = iSeeDeadPeople;

				}
				
				i+=1;
	 		} 
		});
}
//показать видео по id
function iSeeDeadPeople(e){
	e = e || window.event;
    var el = e.target || e.srcElement;
    //alert(el.id);
	var $main = document.getElementById('animeMainField');
	$main.innerHTML = '';
	
	//номер блока
	i=el.id.replace(/[^-0-9]/gim,'');
	
	$.get("http://localhost/api/api/post/read_block.php").done(function(data){
		
		//возврат к предыдущему окну
		var back=document.createElement('back');
		back.id = "back";
		back.className = "Back";
		
		//добавление иконки к back'у
		var backIcon=document.createElement('div');
		backIcon.id = "BackIcon";
		backIcon.className = "BackIcon";
		
		//вставляем картинку картинку
		var img=document.createElement('div');
		img.id = "img"+i;
		img.className = "animeImage";
		img_link = data[i-1]["img_link"]
		img.style.backgroundImage=("url("+img_link+")");
		
		var discription=document.createElement('div');
		discription.id = "txt"+i;
		discription.className = "Discription";
		
		var video = document.createElement('div');
		//img_link = data[i-1]["img_link"] <-сюда вставить видюхи?
		video.id = "video";
		video.className = "Video";
		video.innerHTML += '<iframe width="650" height="400" src="http://video.sibnet.ru/shell.php?videoid=3632282" frameborder="0" scrolling="no" allowfullscreen="" wmode="window" align="middle" style="position:relative; z-index:500;"></iframe>';	
		
		//добавляем созданные блоки в main
		animeMainField.appendChild(back);
		back.appendChild(backIcon);
		animeMainField.appendChild(img);
		animeMainField.appendChild(discription);
		animeMainField.appendChild(video);
		
		//функция для возврата
		$("back").click(function(){	
		
		backPage = 1;
		
		if ((i%12) != 0) 
		{
			backPage = (i/12|0)+1;
		}
		else
		{
			backPage = (i/12|0);
		}
	
		NumPage(document.getElementById('pageBlock' + backPage));
		});
	});
}