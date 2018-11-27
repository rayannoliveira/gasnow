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
        <div class="container"><a class="navbar-brand" href="teste.php">Gás Now</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
        <div class="login-clean">
        <form method="post"  action="salvarasp_controler.php">
            <h2 class="text-center">Cadastro da Asp</h2>
            <div class="form-group"><input class="form-control" type="text" name="asp" placeholder="Numero da asp"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Salvar</button></div></form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../assets/js/stylish-portfolio.js"></script>
</body>

</html>