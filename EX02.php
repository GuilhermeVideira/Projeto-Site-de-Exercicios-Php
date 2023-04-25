<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
        <title> Exercicio 02 </title>
        
        <!-- Links Bootstrap - CSS  --> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
        <link href="estiloscss/bootstrap.css" rel="stylesheet">
        <link href="estiloscss/fontawesome-all.css" rel="stylesheet">
        <link href="estiloscss/swiper.css" rel="stylesheet">
        <link href="estiloscss/magnific-popup.css" rel="stylesheet">
        <link href="estiloscss/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="./images/imagesss/ImagemPHP.png">
    
     </head>
     <body data-spy="scroll" data-target=".fixed-top">
         
         <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
             <div class="container">
             
                  Exercicios Php 
 
                 <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item">
                             <a class="nav-link page-scroll" href="./index.php"> Home </a>
                         </li>
         
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Lista de exercicios </a>
                             <div class="dropdown-menu" aria-labelledby="dropdown01">
                                 <a class="dropdown-item page-scroll" href="indexexercicio01.php"> Exercicio 01 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item page-scroll" href="indexexercicio02.php"> Exercicio 02 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item page-scroll" href="indexexercicio03.php"> Exercicio 03 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item page-scroll" href="indexexercicio04.php"> Exercicio 04 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item page-scroll" href="indexexercicio05.php"> Exercicio 05 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item page-scroll" href="indexexercicio06.php"> Exercicio 06 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item page-scroll" href="indexexercicio07.php"> Exercicio 07 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item page-scroll" href="indexexercicio08.php"> Exercicio 08 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item page-scroll" href="indexexercicio09.php"> Exercicio 09 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item page-scroll" href="indexexercicio10.php"> Exercicio 10 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item page-scroll" href="indexexercicio11.php"> Exercicio 11 </a>
                             </div>
                         </li>
                     </ul>
 
                     </span>
                 </div> 
             </div> 
         </nav> 

         <br><br> <br><br>
         <h1>  <center> Exercicio 02 </center> </h1>
          <div class="quadradoborda">

          <?php
            echo "<h3> Recuperando os dados </h3>";

            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            echo "<b>Nome: </b>" .$nome;
            echo "<br>";
            echo "<b>Senha: </b>" .$senha;
          ?>

                 </div>
                                                                      
       <!-- Links Bootstrap - JS --> 
       <script src="js/jquery.min.js"></script> 
       <script src="js/bootstrap.min.js"></script> 
       <script src="js/jquery.easing.min.js"></script> 
       <script src="js/swiper.min.js"></script> 
       <script src="js/jquery.magnific-popup.js"></script> 
       <script src="js/scripts.js"></script> 
       
     </body>
 </html>