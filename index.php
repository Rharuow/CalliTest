<?php include_once 'util/util.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>CalliText - apresentação</title>
    <meta charset="UTF-8">
    <meta name="description" content="Pag web to make tests in behavior of Callithrix">
    <meta name="keywords" content="CalliTest,UFRN,Pesquisa,callithrix">
    <meta name="author" content="Harysson Soares">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css"/>
    <link rel="stylesheet" href="_css/reset.css"/>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   -->
    <script src="_scripts/script_btn.js"></script>
  </head>
  <body>
    <?php include_once 'components/nav.php'; ?>
    <?php include_once 'components/carousel.php'; ?>

    <!-- <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 class="white text-center" style="font-size:3em;">Bem vindo ao <br> CalliTest </h3>
          </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <button class="btn btn-primary main btn_login float-right" style="font-size:2em;">Sou <br> cadastrado</button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <button class="btn btn-primary main btn_signup" style="font-size:2em;">Sou novo <br> aqui</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="login" style="display:none">
                    <form action="index.php" method="post">
                        <label for="user-login" class="glyphicon glyphicon-user" style="font-size:3em;"></label>
                        <input type="text" class="form-control mt-3 text-center" id="user-login" name="user-login" placeholder="Nome da pesquisa cadastrada" style="font-size:2em;">
                        <label for="psw-login" class="glyphicon glyphicon-lock" style="font-size:3em;"></label>
                        <input type="password" class="form-control mt-3 text-center" id="psw-login" name="psw-login" placeholder="Senha da pesquisa cadastrada" style="font-size:2em;">
                        <button type="submit" class="btn btn-primary mt-5 col-3" style="width:30%; margin-left:35%;font-size:1.5em;">Login</button>
                    </form>
                </div>
                <div class="signup" style="display:none">
                    <form action="index.php" method="post">
                        <label for="user-signup" class="glyphicon glyphicon-user" style="font-size:3em;"></label>
                        <input type="text" required class="form-control mt-3 text-center" id="user-signup" name="user-signup" placeholder="Escolha um nome para pesquisa" style="font-size:2em;">
                        <label for="psw-signup" class="glyphicon glyphicon-lock" style="font-size:3em;"></label>
                        <input type="password" required class="form-control mt-3 text-center" id="psw-signup" name="psw-signup" placeholder="Digite uma senha" style="font-size:2em;">
                        <label for="psw-signup2" class="glyphicon glyphicon-lock" style="font-size:3em;"></label>
                        <input type="password" required class="form-control mt-3 text-center" id="psw-signup2" name="psw-signup2" placeholder="Confirme sua senha" style="font-size:2em;">
                        <button type="submit" class="btn btn-primary mt-3"  style="width:30%; margin-left:35%;font-size:1.5em;">Cadastrar</button>
                    </form>
                </div>
                <div class="message text-center">
                </div>
            </div>
        </div>
    </div> -->
  </body>
</html>