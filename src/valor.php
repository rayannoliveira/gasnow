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

<body id="page-top">
        <meta http-equiv="refresh" content="10">

    <div class="contaier">

        <div class="page-header text-center pt-3">
            <h1>Resultado</h1>
        
        <h2 class="text-center pt-3">
                
                
                <?php

                require_once("daoporcentagem.php");
            
                $objporcentagem= new Daoporcentagem();
                $id=1;
            
                $retorno= $objporcentagem->buscar($id); 
            
                $kilo = ((int)($retorno['Peso'] - 214)/400);
                //$kilo = 17;

                if ($kilo > 31 || $kilo == 35) {?> 
                    <div class="img-fluid text-center pt-2">
                        <img src="../assets/img/100.png" class="img-responsive">
                    </div> <?php
                    echo '100%';
                }elseif ($kilo > 27 || $kilo == 31) { ?> 
                    <div class="img-fluid text-center pt-2">
                        <img src="../assets/img/80.png" class="img-responsive">
                    </div> <?php
                    echo '80%';
                }elseif ($kilo > 25 || $kilo == 27) { ?> 
                    <div class="img-fluid text-center pt-2">
                        <img src="../assets/img/60.png" class="img-responsive">
                    </div> <?php
                    echo '60%';
                }elseif ($kilo > 21 || $kilo == 25) { ?> 
                    <div class="img-fluid text-center pt-2">
                        <img src="../assets/img/50.png" class="img-responsive">
                    </div> <?php
                    echo '50%';
                }elseif ($kilo > 18 || $kilo == 21) { ?> 
                    <div class="img-fluid text-center pt-2">
                        <img src="../assets/img/30.png" class="img-responsive">
                    </div> <?php
                    echo '30%';
                }elseif ($kilo >= 17 || $kilo == 18) { ?> 
                    <div class="img-fluid text-center pt-2">
                        <img src="../assets/img/15.png" class="img-responsive">
                    </div> <?php
                    echo '15%';?> <br> <h3>Seu gás esta acabando!</h3><?php
                }else{ ?> 
                    <div class="img-fluid text-center pt-2">
                        <img src="../assets/img/neg.png" class="img-responsive">
                    </div> <?php
                    echo "Botijao Vazio";
                }
            ?>
         </h2>

    </div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:rgb(255,255,255);">
            
    </nav>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/stylish-portfolio.js"></script>
</body>

</html>