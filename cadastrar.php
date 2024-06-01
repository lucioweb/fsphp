<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CADASTRO</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Font-awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
              integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
</head>
<body>
<h1 class="text-center mt-4">CADASTRO</h1>
<div class="container mx-auto my-auto" style="width: 100%;">
    <?php
    require_once "connection_crud_pdo.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $ts =$_POST['ts'];

        $sql = 'INSERT INTO tbl_usuarios (last_name, first_name, email, message, ts) VALUES (:last_name, :first_name, :email, :message, NOW())';
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);



        if ($stmt->execute()) {
            echo 'Dados inseridos com sucesso!';
        } else {
            echo 'Erro ao inserir dados.';
        }
    }
    ?>

    <form class="row g-3" action="" method="post" name="cadastro_usuario">
        <div class="col-12 mb-3">
            <label for="first_name" class="form-label">NOME</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nome completo">
        </div>
        <div class="col-12 mb-3">
            <label for="last_name" class="form-label">SOBRENOME</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nome completo">
        </div>
        <div class="col-12 mb-3">
            <label for="email" class="form-label">EMAIL</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="col-12 mb-3">
            <label for="message" class="form-label">MENSAGEM</label>
            <textarea class="form-control" id="message" name="message" rows="3"
                      placeholder="Sua mensagem ..."></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" id=cadastrar name="cadastrar"><i class="fa-solid fa-floppy-disk me-2"></i> Cadastrar</button>
            <button type="reset" class="btn btn-success"><i
                        class="fa-solid fa-broom me-2"></i> Limpar</button>
            <!--            <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary" >-->
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

