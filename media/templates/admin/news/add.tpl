{include file="../header.tpl" title=foo}

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h4 class="page-header">{$caption}</h4>
          <hr>
          <div class="content">
             <form method="POST">
              <label for="title">标题</label><input type="text" name="title" value="" />
              <label for="subtitle">副标题</label><input type="text" name="subtitle" value="" />
              <label for="content">内容</label><input type="text" name="content" value="" />
              <input type="submit" value="保存" />
             </form>
           </div>
        </div>
    </div>

{include file="../footer.tpl"}