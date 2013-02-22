<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MVC-Template</title>
    <link type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" rel="stylesheet"/>
    <link type="text/css" href="//netdna.bootstrapcdn.com/bootswatch/2.3.0/cerulean/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
    <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#">Model View Controller</a>
    <ul class="nav">
        <li class="active"><a href="?about">About MVC</a></li>
        <li class="active"><a href="?index">All Object</a></li>
        <li class="active"><a href="?add">Add an Object</a></li>
    </ul>
    </div>
    </div>
		<?php
        if(!empty($this->flushMessage))
         echo '<div class="alert">', $this->flushMessage, '</div>';
         ?>
		 <div class="">
		 <?php
         echo $this->htmlBody;
		 ?>
		 </div>
     </div>
<!-- Including Javascript at the end  -->    
 <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.min.js"></script>    
 <script type="text/javascript" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/js/bootstrap.min.js"></script>
  </body>
</html>
