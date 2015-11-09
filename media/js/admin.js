
function login_submit(){
  var isempty= $('#validateCode').val();
  if (isempty=='' || isempty==null)
	  $('#error').html('请输入验证码！');
  else
	  $('.form-signin').submit();
}

function changeLogin(a){
	if (a==0){
		$('.mobile_login').hide();
		$('.basic_login').show();
		$('.loginModel').attr('href','javascript:changeLogin(1)').html('短信方式登录');
	}
	else
	{
		$('.mobile_login').show();
		$('.basic_login').hide();	
		$('.loginModel').attr('href','javascript:changeLogin(0)').html('普通方式登录');
	}
	
} 

$(function(){
	 
    /*仿刷新：检测是否存在cookie*/
    if($.cookie("captcha")){
        var count = $.cookie("captcha");
        var btn = $('#getting');
        btn.val(count+'秒后可重新获取').attr('disabled',true).css('cursor','not-allowed');
        var resend = setInterval(function(){
            count--;
            if (count > 0){
                btn.val(count+'秒后可重新获取').attr('disabled',true).css('cursor','not-allowed');
                $.cookie("captcha", count, {path: '/', expires: (1/86400)*count});
            }else {
                clearInterval(resend);
                btn.val("获取验证码").removeClass('disabled').removeAttr('disabled style');
            }
        }, 1000);
    }

    /*点击改变按钮状态，已经简略掉ajax发送短信验证的代码*/
    $('#getting').click(function(){
        var btn = $(this);
        var count = 60;
        var resend = setInterval(function(){
            count--;
            if (count > 0){
                btn.val(count+"秒后可重新获取");
                $.cookie("captcha", count, {path: '/', expires: (1/86400)*count});
            }else {
                clearInterval(resend);
                btn.val("获取验证码").removeAttr('disabled style');
            }
        }, 1000);
        btn.attr('disabled',true).css('cursor','not-allowed');
    });

});

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