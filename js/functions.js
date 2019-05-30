function StartSearch() {
	var now = new Date();
	alert( now );
}

function NumPage(number){
	$currentPage=number.id.replace(/[^-0-9]/gim,'');
	alert($currentPage );
	
	function getNewAnimeBlocks() 
	{	
		
		var $main = document.getElementById('animeMainField');
		$main.innerHTML = '';
		i=($currentPage*12-11);
		while (i<($currentPage*12+1)) 
			{
				var div=document.createElement('block'+i);
				div.id = "block"+i;
				div.className = "animeBlock";
				//div.style.backgroundImage="url(./img/picture/7.png)"
				
				$.getJSON('./pages/database/getImg.php', function(data) 
				{
					
					$.each(data, function(id_anime, img_link) 
					{
						console.log(id_anime + ':' + img_link);
						if (id_anime==i)
						{

							div.style.backgroundImage=img_link;
							$("#block" + id_anime).style.backgroundImage("url("+img_link+")");
						}
					});
				});
				console.log(div);
				animeMainField.appendChild(div);
				console.log(div);
				i+=1;
	 		}
   } 
	
	getNewAnimeBlocks();
  
}