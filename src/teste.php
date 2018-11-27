<?
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:index.html');

  }
 
?>

<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
     
</head>
<nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:rgb(255,255,255);">
        <div class="container"><a class="navbar-brand" href="#">Gás Now</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation" style="color:rgb(251,107,107);"><a class="nav-link active" href="#"><a class="btn btn-primary" role="button" href="salvarasp.php">Salvar Asp</a></a>
                    </li>
                    <li class="nav-item" role="presentation" style="color:rgb(251,107,107);"><a class="nav-link active" href="#"><a class="btn btn-primary" role="button" href="sair.php">sair</a></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<body id="page-top">
        <meta http-equiv="refresh" content="3">

    <div class="contaier">

        <div class="page-header text-center pt-3">
            
        
            <h2 class="text-center pt-3">
                
                
                <?php

                require_once("daoporcentagem.php");
            
                $objporcentagem= new Daoporcentagem();
                $id=1;
            
                $retorno= $objporcentagem->buscar($id); 
            
                $kilo = ((int)($retorno['Peso']/1000));   
//echo $kilo;              

                if ($kilo >= 19 && $kilo <= 21){
                   $kilo = 20;
                }elseif($kilo >= 17 && $kilo < 19){
                   $kilo = 18;
                }elseif($kilo >= 14 && $kilo <= 16){
                   $kilo = 15;
                }elseif($kilo >= 9 && $kilo <= 11){
                   $kilo = 10;
                }elseif($kilo >= 7 && $kilo < 9){
                   $kilo = 8;
                }elseif($kilo >= 4 && $kilo <= 6){
                   $kilo = 5;
                }elseif($kilo == 0){
                   $kilo = 0;
                }else{
                   $kilo = $kilo + 1;
                }

              
                if ($kilo == 20) {?> 
                    <div class="img-fluid text-center pt-2">
                        <img class="img-thumbnail" src="../img/100oza.png" class="img-responsive">
                    </div> <?php
                }elseif ($kilo == 18) { ?> 
                    <div class="img-fluid text-center pt-2">
                        <img class="img-thumbnail" src="../img/80oza.png" class="img-responsive">
                    </div> <?php               
                }elseif ($kilo == 15) { ?> 
                    <div class="img-fluid text-center pt-2">
                        <img class="img-thumbnail" src="../img/60oza.png" class="img-responsive">
                    </div> <?php
                }elseif ($kilo == 10) { ?> 
                    <div class="img-fluid text-center pt-2">
                        <img class="img-thumbnail" src="../img/50oza.png" class="img-responsive">
                    </div> <?php
                }elseif ($kilo == 8) { ?> 
                    <div class="img-fluid text-center pt-2">
                        <img class="img-thumbnail" src="../img/30oza.png" class="img-responsive">
                    </div> <?php
                }elseif ($kilo == 5){ ?>
                    <div class="img-fluid text-center pt-2">
                        <img class="img-thumbnail" src="../img/15oza.png" class="img-responsive">
                    </div> <?php
                }else{ ?> 
                    <div class="img-fluid text-center pt-2">
                        <img class="img-thumbnail" src="../img/0oza.png" class="img-responsive">
                    </div> <?php
                }        
                 echo $kilo, " kilos ";
 ?>

           </h2>
        </div>
    </div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:rgb(255,255,255);">
            
    </nav>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/stylish-portfolio.js"></script>
</body>

</html>