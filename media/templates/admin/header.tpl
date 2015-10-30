<!DOCTYPE html>
<html lang="zh_cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>{$title}</title>

    <!-- Bootstrap core CSS -->
    <link href="../../media/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../media/css/dashboard.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../media/js/ie10-viewport-bug-workaround.js"></script>
  </head>

  <body>
  
  <nav class="navbar navbar-dark navbar-fixed-top bg-inverse">
      <button type="button" class="navbar-toggler visible-xs" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">{$AdminTitle}</a>
      <nav class="nav navbar-nav pull-left">
      {section name=sec1 loop=$Navs}
        <a class="nav-item nav-link" href="#">{$Navs[sec1].name}</a>
      {/section}
      </nav>
      <form class="navbar-form pull-right">
        <input type="text" class="form-control" placeholder="Search...">
      </form>
    </nav>
    
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">

         {section name=sec1 loop=$Menus['News']}
            {if $Menus['News'][sec1].active }
            <li class="active"><a href="{$Menus['News'][sec1].url}">{$Menus['News'][sec1].name} <span class="sr-only">(current)</span></a></li>
            {else}
             <li><a href="{$Menus['News'][sec1].url}">{$Menus['News'][sec1].name}</a></li>
            {/if}
           {/section}
         </ul>

        </div>

   
