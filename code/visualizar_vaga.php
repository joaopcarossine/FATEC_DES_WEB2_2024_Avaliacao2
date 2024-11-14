<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();

$url = "localhost"; 
$dbname = "vagas";
$user = "root";
$pass = "";

try {
    $conexao = new PDO("mysql:host=$url;dbname=$dbname", $user, $pass);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $declara = $conexao->prepare("SELECT * FROM vagas"); 
    $declara->execute();
    $vagas = $declara->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $p) {
    echo "não foi possível conectar o BD: " . $p->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Vagas</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .table {
            background-color: #ffffff;
        }
        .thead-primary {
            background-color: #007bff;
            color: white;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            border-color: #ffeeba;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Vagas Divulgadas</h1>

        <?php if (empty($vagas)): ?>
            <div class="alert alert-warning" role="alert">
                Nenhuma vaga encontrada.
            </div>
        <?php else: ?>
            <table class="table table-bordered table-striped">
                <thead class="thead-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nome da Empresa</th>
                        <th>Curso</th>
                        <th>Descritivo da Vaga</th>
                        <th>Contato</th>
                        <th>WhatsApp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vagas as $vaga): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($vaga['id']); ?></td>
                            <td><?php echo htmlspecialchars($vaga['nome_empresa']); ?></td>
                            <td><?php echo htmlspecialchars($vaga['curso']); ?></td>
                            <td><?php echo nl2br(htmlspecialchars($vaga['descritivo_vaga'])); ?></td>
                            <td><?php echo htmlspecialchars($vaga['email_contato']); ?></td>
                            <td><?php echo htmlspecialchars($vaga['numero_whatsapp']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <div class="text-center">
            <a href="home.php" class="btn btn-danger mt-3">Voltar</a>
        </div>
    </div>

    <!-- Bibliotecas JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
