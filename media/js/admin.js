
function login_submit(){
  var isempty= $('#validateCode').val();
  if (isempty=='' || isempty==null)
	  $('#error').html('请输入验证码！');
  else
	  $('.form-signin').submit();
}

function chgUrl(url){
	 var timestamp = (new Date()).valueOf();
	 url = url.substring(0,19);
	 if((url.indexOf("&")>=0)){
	  url = url + "×tamp=" + timestamp;
	 }else{
	  url = url + "?timestamp=" + timestamp;
	 }
	 return url;
}

function refreshCaptcha(){ 
	var imgSrc = $(".captcha");
	 var src = imgSrc.attr("src");
	 imgSrc.attr("src",chgUrl(src));
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