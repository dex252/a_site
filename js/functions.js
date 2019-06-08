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
					
					div.style.backgroundImage=("url("+img_link+")");
						
					animeMainField.appendChild(div);
				
				}
				
				i+=1;
	 		} 
		});
		

  
}