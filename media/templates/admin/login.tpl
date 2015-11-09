<!DOCTYPE html>
<html lang="zh_cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>{$caption}</title>

    <!-- Bootstrap core CSS -->
    <link href="../../media/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../media/css/signin.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../media/js/ie10-viewport-bug-workaround.js"></script>
  </head>

  <body>

    <div class="container">
   
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">登录</h2>
        <label for="inputEmail" class="sr-only">用户名</label>
        <input type="text" name="username" id="inputUser" class="form-control" placeholder="用户名" required autofocus>
        <label for="inputPassword" class="sr-only">口令</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="口令" required>
        <div class="input-group">
          <img class="captcha" style="-webkit-user-select: none" src="admin/captcha/index">
          <label for="validateCode" class="sr-only">验证码</label>
          <input type="text" class="form-control" id="validateCode" name="validateCode" placeholder="四位字符验证码" required autofocus>
          <a class="refimg" href="javascript:refreshCaptcha()">刷新</a>          
        </div>
      
          
       
        <button id="login" class="btn btn-lg btn-primary btn-block" type="button" onclick="login_submit()">确定</button>
        
        <div style="color:#ff0000" class="error" id="error" >{$error}</div>
   
      </form>

    </div> <!-- /container -->

    <script type="text/javascript" src="../../media/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../media/js/admin.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

