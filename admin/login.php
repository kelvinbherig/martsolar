<?php
session_start();
require '../includes/conexao.php';

if(isset($_POST['email'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("
        SELECT *
        FROM administradores
        WHERE email = ?
    ");

    $sql->execute([$email]);

    if($sql->rowCount() > 0){

        $admin = $sql->fetch();

        if(password_verify($senha, $admin['senha'])){

            $_SESSION['admin_id'] = $admin['id'];

            header("Location: dashboard.php");
            exit;
        }
    }

    $erro = "Usuário ou senha inválidos.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Login MartSolar</title>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-4">

            <div class="card">

                <div class="card-header">
                    Login MartSolar
                </div>

                <div class="card-body">

                    <?php if(isset($erro)): ?>
                        <div class="alert alert-danger">
                            <?= $erro ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST">

                        <input
                        type="email"
                        name="email"
                        class="form-control mb-3"
                        placeholder="Email"
                        required>

                        <input
                        type="password"
                        name="senha"
                        class="form-control mb-3"
                        placeholder="Senha"
                        required>

                        <button
                        class="btn btn-primary w-100">
                            Entrar
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>