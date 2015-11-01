<?php defined('SYSPATH') or die('No direct script access.');
  require APPPATH.'header'.EXT;
  require MODPATH.'report'.EXT;
  
   if (isset($_GET['SKU']))
   	$sku= $_GET['SKU'];
   if (isset($_GET['lotid']))
   	$lotid= $_GET['lotid'];
   
   
?>

    <div class="container">
      <div class="starter-template">
       <form method="get" action="/reports/report/find" >
        <label for="sku">商品名称或简码：</label><input type="text" name="SKU" class="sku" value="<?php if (isset($sku)) echo $sku; ?>" />
        <label for="lotid">批号：</label><input type="text" name="lotid" value="<?php if (isset($lotid)) echo $lotid; ?>" />
        <input type="submit" value=" 查询 " />
       </form>
      </div>

     <div class="table">
     <table>
      <thead><tr>
        <td>商品名称</td><td>生产企业</td><td>规格</td><td>批号</td><td>下载地址</td>
        </tr>
        </thead>
       <tbody>
     <?php
       if (isset($sku) || isset($lotid)){
          if (!empty($sku) || !empty($lotid)){
          $ary= ReportFactory::intance()->getData($sku, $lotid);
       foreach ($ary as $row){ ?>
        <tr>
       <?php
          echo '<td>'.$row['spname'].'</td>';
          echo '<td>'.$row['cdname'].'</td>';
          echo '<td>'.$row['spec'].'</td>';
          echo '<td>'.$row['lotid'].'</td>';
          echo '<td><a href="../../report/'.$row['picpath'].'" >下载</a></td>';
        }
       }
      }
     ?>
       </tr>
       </tbody>

     </table>
     </div>
    </div><!-- /.container -->
<?php require APPPATH.'footer'.EXT; ?>