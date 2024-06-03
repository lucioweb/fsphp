<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
            crossorigin="anonymous"></script>
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<h1 class="text-center mt-4">CADASTRO</h1>
<div class="mx-auto" style="width: 600px;">
    <?php
    require_once "connection_db_crud_pdo.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = 'INSERT INTO tbl_user (last_name, first_name, email, message) VALUES (:last_name, :first_name, :email, :message)';
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
</body>
</html>

