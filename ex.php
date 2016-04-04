<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="desktop.css" />
    <link rel="stylesheet" type="text/css" href="mobile.css"  />

    <!-- <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/2.0-latest/MathJax.js?config=TeX-MML-AM_HTMLorMML-full"> </script> -->

    <?php
        $ex=$_GET['ex'];
        $show=$_GET['sol'];
        $page_file = fopen("exercicios/$ex.html", "r");
        $title = fgets($page_file); 
        fclose($page_file);

        preg_match("/<h1>(.*)<\/h1>/", $title, $matches);
        $title = $matches[1];
    ?>

    <title><?php echo $title ?></title>
  </head>
  <body> 

    <?php
        include("header.html");
        include("exercicios/$ex.html");
    ?>

  <hr/>

    <?php

        if ($show == 1) {
            include("exercicios/$ex.sol.html");
            echo("
                <hr/>
                <a href='ex.php?ex=$ex&sol=0'>Esconder Solução</a>
                ");
        }
        else {
            echo("
                <a href='ex.php?ex=$ex&sol=1'>Mostrar Solução</a>
                ");
        }

        include("footer.html");
    ?>

  </body>
</html>
