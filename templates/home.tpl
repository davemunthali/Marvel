
  {include file="header.tpl" title="Home"}
   <body>
  {include file="navigation.tpl"}  
    <div class="row">
      <div class="container">
        <div class="jumbotron">
          <h3>Marvel framework 1.0.0, {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}</h3>
          powered by smarty {$smarty.version}
        </div>
      </div>
    </div><!-- /.row -->
  {include file="footer.tpl"}
