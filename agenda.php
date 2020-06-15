<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Clínica UPlaser | Acesso </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="./assets/img/favicon_oficial2.png" sizes="32x32" type="image/png">

</head>

<body class="white-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <center>
                <img alt="image" class="img-circle img-responsive" src="img/logo-clinica.png"
                                                     style="width: 300px">
        </center>
        <h2>Bem-Vindo</h2>
        <h3>Clínica UPlaser</h3>
        <p>Informe os dados de acesso</p>
        <form class="m-t" role="form" method="post" action="validaacesso.php">
            <div class="form-group">
                <input id="demail" name = "demail" type="text" class="form-control" placeholder="edjanetesantos6@gmail.com" required="">
            </div>
            <div class="form-group">
                <input id="desenh" name = "desenh" type="password" class="form-control" placeholder="" required="">
            </div>
            <button type="submit" class="btn btn-info block full-width m-b">Acessar</button>
            <a href="esqueceuasenha.php"><small>Esqueceu a senha?</small></a> <br>
            <a href="cadastrese.html"><small>Ainda não tem cadastro? Clique aqui e cadastre-se!</small></a> <br>
        </form>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
