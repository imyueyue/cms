{include file="../header.tpl" title=ok}

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h4 class="page-header">{$caption}</h4>
      <hr>
          <div class="content">
            {$msg}
          </div>
          <div id="show"></div>
    </div>

   <script type="text/javascript">
      var t = 5; // 设定跳转的时间
      setInterval("refer()", 1000); // 启动1秒定时
      function refer(){ 
      if (t == 0) {
         location = "../../admin/news/list"; // 设定跳转的链接地址
      }
       document.getElementById('show').innerHTML = "" + t + "秒后跳转到列表"; // 显示倒计时
       t--; // 计数器递减
      }
     </script>

{include file="../footer.tpl"}