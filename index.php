<?php

    $conn = require 'connection.php';
    $result = $conn->query('SELECT * FROM users');
    $users = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela - crud</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
<div id="content" class="container">
                <!-- Tabela -->
                <div class="table-title">
                    <h3 class="son-main-text-3">Usuários</h3>
                    <input type="text" class="form-control form-field son-form-field" placeholder="Pesquisar"> 
                </div>
    <table class="table bg-white">
            <thead>
                <tr>
                    <th class="table-col-title">#</th>
                    <th class="table-col-title">Email</th>
                </tr>
            </thead>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['email'];?></td>
                        <td>
                            <a href="ver.php?id=<?php echo $user['id'];?> ">Ver</a>
                        </td>
                    </tr>
                 <?php endforeach; ?>
            <tbody>

            </tbody>
    </table>
    <a href="adicionar.php">Adicionar</a>
</div>

    <!-- SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- JS do Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
