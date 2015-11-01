
var is_ajax=function(a){
	$.ajax({
	   type: 'GET',
	   url: a,
	   success: function(data){
		 $('.content').html(data);
	   },
	   error:{
		   
	   } 
	});
	
}