{include file="../header.tpl"}

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h4 class="page-header">{$caption}</h4>
          <div class="content">
         <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>标题</th>
                  <th>副标题</th>
                  <th>创建时间</th>
                </tr>
              </thead>
              <tbody>
            {section name=row loop=$news_list }
                <tr>
                  <td>{$news_list[row].id}</td>
                  <td>{$news_list[row].title}</td>
                  <td>{$news_list[row].subtitle}</td>
                  <td>{$news_list[row].addtime}</td>
                </tr>      
             {/section}
            </tbody>
          </table>
          </div>
    </div>

{include file="../footer.tpl"}