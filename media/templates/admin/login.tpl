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
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住口令
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">确定</button>
        
        <div style="color:#ff0000" class="error">{$error}</div>
   
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>

