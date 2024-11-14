<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            color: #333;
        }
        .wrapper {
            max-width: 600px;
            padding: 30px;
            margin: 60px auto;
            background-color: #ffffff;
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        h2 {
            color: #343a40;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: 500;
            color: #555;
        }
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-custom {
            background-color: #28a745;
            color: #ffffff;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
        .text-muted {
            font-size: 0.9rem;
            color: #6c757d !important;
        }
        .text-center {
            text-align: center;
        }
    </style>
    <title>Cadastro de Vagas</title>
  </head>
  <body>

    <div class="wrapper">
        <h2 class="text-center">Cadastrar Vagas</h2>
        <p class="text-center text-muted">Preencha os seguintes campos:</p>
        <form method="post" action="classes/connect.php">
            
            <div class="form-group">
                <label for="nome_empresa">Nome da Empresa</label>
                <input type="text" class="form-control" name="nome_empresa" id="nome_empresa" required>
            </div>  

            <div class="form-group">
                <label for="email_contato">Email</label>
                <input type="email" class="form-control" name="email_contato" id="email_contato" required>
            </div>  

            <div class="form-group">
                <label for="numero_whatsapp">Whatsapp</label>
                <input type="text" class="form-control" name="numero_whatsapp" id="numero_whatsapp" required>
            </div> 

            <div class="form-group">
                <label for="descritivo_vaga">Descritivo da Vaga</label>
                <textarea class="form-control" name="descritivo_vaga" id="descritivo_vaga" rows="4" required></textarea>
            </div> 
            
            <div class="form-group">
                <label for="curso">Curso</label>
                <select class="form-control" name="curso" id="curso" required>
                    <option value="">Selecione o curso</option>
                    <option value="1">1- DSM</option>
                    <option value="2">2- GE</option>
                </select>
                <small id="cursoHelp" class="form-text text-muted">Escolha o curso relacionado à vaga.</small>
            </div>

            <div class="text-center">
                <button type="submit" name="action" value="adicionar" class="btn btn-custom btn-block">Registrar</button>
            </div>

        </form>
    </div>

    <!-- Bibliotecas JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/RgD7zP87Z8j3TY0Eovp9ytO3s9TpklIh/lCmVAwiZsQYefXjZzZ19akF8h7Y" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-cn7l7gDp0eynlI9P3A6n4TOPrLkJ4dP0q7TwlqD0NvcDgZElBeI5o2IKlC02vVe6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-WC7wJ7hGpGvfl1eD8ZaDh5D7dE5akf6yEr7I9ok19hd9JvZ46sxlbKIKlC02vVe6" crossorigin="anonymous"></script>

  </body>
</html>
