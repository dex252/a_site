 $(".regular").slick({
		draggable: true,
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
      });
	  
$.get("http://localhost/api/api/post/read_block.php").done(function(data){
	max = data.length;	
	max = Math.ceil(max/12);
	currentPage = max;
});