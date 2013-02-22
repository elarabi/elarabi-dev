<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MVC-Template</title>
    </head>
    <body>
    <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#">Title</a>
    <ul class="nav">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    </ul>
    </div>
    </div>
        <?php
         echo $this->htmlBody;
        ?>
    </body>
</html>
