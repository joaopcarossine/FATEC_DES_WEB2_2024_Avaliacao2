<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            padding: 20px;
        }
        .wrapper {
            max-width: 500px;
            padding: 40px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-custom {
            background-color: #ff4c4c;
            color: #ffffff;
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            font-size: 16px;
        }
        .btn-custom:hover {
            background-color: #ff1f1f;
        }
        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            border-color: #ffeeba;
        }
        .text-center a {
            font-weight: bold;
            color: #007bff;
            text-decoration: none;
        }
        .text-center a:hover {
            color: #0056b3;
        }
    </style>

    <title>Remover Vaga</title>
  </head>
  <body>
  
    <div class="wrapper">
        <h2 class="text-center text-dark mb-4">Remover Vaga</h2>
        <form method="post" action="classes/connect.php">

            <div class="form-group">
                <label for="id_vaga">ID da Vaga</label>
                <input type="text" name="id_vaga" id="id_vaga" class="form-control" required placeholder="Digite o ID da vaga">
            </div>

            <div class="text-center">
                <button type="submit" name="action" value="remover" class="btn btn-custom btn-block">Remover</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <a href="home.php">Voltar à página inicial</a>
        </div>
    </div>

    <!-- Bibliotecas JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
