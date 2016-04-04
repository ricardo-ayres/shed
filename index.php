<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="desktop.css" />
    <link rel="stylesheet" type="text/css" href="mobile.css" />
    <link rel="icon"       type="image/ico"    href="favicon.ico" />

    <!-- <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/2.0-latest/MathJax.js?config=TeX-MML-AM_HTMLorMML-full"> </script> -->

    <title>Shed</title>
  </head>
  <body>
    <?php
        $page=$_GET['page'];
        if (empty($page))
            {$page='home.html';}
        include("header.html");
        include($page);
        include("footer.html");
    ?>
  </body>
</html>
