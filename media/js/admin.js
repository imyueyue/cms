
function login_submit(){
  var isempty= $('#validateCode').val();
  if (isempty=='' || isempty==null)
	  $('#error').html('请输入验证码！');
  else
	  $('.form-signin').submit();
}

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