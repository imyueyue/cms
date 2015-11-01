{include file="../header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h4 class="page-header">{$caption}</h4>
          <hr>
          <div class="content">
             <form name="addnews" method="POST">
              <table> 
              <tr>
              <td style="width:80px"><label for="title">标题</label></td><td><input style="width:500px" type="text" name="title" value="" /></td></tr>
              <tr><td><label for="subtitle">副标题</label></tb><td><input style="width:500px"  type="text" name="subtitle" value="" /></td></tr>
              <tr><td><label for="content">内容</label></td><td>
              <textarea name="content" style="width:700px;height:200px;visibility:hidden;">{$htmlData}</textarea></td></tr>
              <tr><td></td><td><input type="submit" value="保存" /></td>
              </tr>
              </table>
             </form>
           </div>
        </div>
    </div>

    <script>
    KindEditor.ready(function(K) {
      var editor1 = K.create('textarea[name="content"]', {
        cssPath : '',
        uploadJson : '',
        fileManagerJson : '',
        allowFileManager : true,
        afterCreate : function() {
          var self = this;
          K.ctrl(document, 13, function() {
            self.sync();
            K('form[name=addnews]')[0].submit();
          });
          K.ctrl(self.edit.doc, 13, function() {
            self.sync();
            K('form[name=addnews]')[0].submit();
          });
        }
      });
      prettyPrint();
    });
  </script>


{include file="../footer.tpl"}