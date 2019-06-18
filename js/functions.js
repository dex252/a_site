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
		
		//вставляем картинку
		var img=document.createElement('div');
		img.id = "img"+i;
		img.className = "animeImage";
		img_link = data[i-1]["img_link"]
		img.style.backgroundImage=("url("+img_link+")");
		
		var discription=document.createElement('div');
		discription.id = "txt"+i;
		discription.className = "Discription";
		
		nameText = data[i-1]["name"]
		exitStatusText = data[i-1]["id_exit_status"]
	//	ganreText = data[i-1]["id_ganre"] //запрос по id жанра
		yearText = data[i-1]["year"]
		authorText = data[i-1]["author"]
		videoTypeText = data[i-1]["id_video_type"]
		numSeriesText = data[i-1]["num_series"]
		discriptionText = data[i-1]["discription"]
		
		discription.innerHTML +='<p style="text-align:center;  font-weight: 600;">'+nameText+'</p>'
		discription.innerHTML +='<p>Статус: '+exitStatusText+'</p>'
		discription.innerHTML +='<p>Год: '+yearText+'</p>'
		//discription.innerHTML +='<p>Жанр: '+ganreText+'</p>'
		discription.innerHTML +='<p>Автор: '+authorText+'</p>'
		discription.innerHTML +='<p>Тип: '+videoTypeText+'</p>'
		discription.innerHTML +='<p>Серии: '+numSeriesText+'</p>'
		discription.innerHTML +='<p>'+discriptionText+'</p>'
		
		var watchVideo = document.createElement('div');
		watchVideo.id = "WatchVideo";
		watchVideo.className = "watchChoseVideoText";
		watchVideo.innerHTML +='<p style="text-align:center; font-size:20px; font-weight: 600;">Смотреть видео:</p>'
		
		var video = document.createElement('div');
		//img_link = data[i-1]["img_link"] <-сюда вставить видюхи?
		video.id = "video";
		video.className = "Video";
		video.innerHTML += '<iframe width="100%" height="400" src="http://video.sibnet.ru/shell.php?videoid=3632282" frameborder="0" scrolling="no" allowfullscreen="" wmode="window" align="middle" style="position:relative; z-index:500;"></iframe>';	
		
		var choseVideo = document.createElement('div');
		choseVideo.id = "watchVideo";
		choseVideo.className = "watchChoseVideoText";
		choseVideo.innerHTML +='<p style="text-align:center; font-size:20px; font-weight: 600;">Выбрать серию:</p>'
		
		//добавляем созданные блоки в main
		animeMainField.appendChild(back);
		back.appendChild(backIcon);
		animeMainField.appendChild(img);
		animeMainField.appendChild(discription);
		animeMainField.appendChild(watchVideo);
		animeMainField.appendChild(video);
		animeMainField.appendChild(choseVideo);
		
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