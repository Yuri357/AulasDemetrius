<style>
                    body {
                        background-image: linear-gradient(to left, purple, cyan);
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                        color: white;
                    }
                    .container {
                        max-width: 800px;
                        margin: 0 auto;
                        padding: 20px;
                        
                        
                    }
                    h1 {
                        background: linear-gradient(to right, purple, cyan);
                        color: white;
                        padding: 20px;
                        text-align: center;
                        margin: 0;
                        
                    }
                    ul {
                        list-style-type: none;
                        padding: 0;
                        margin: 0;
                    }   
                    li {
                        background-color: white;
                        padding: 10px;
                        margin-bottom: 5px;
                        color: black;
                        border-radius: 15px;
                    }
                </style>
<?php
session_start();

// Verifique se o usuário está autenticado
if (!isset($_SESSION['nome'])) {
    header("Location: login.php"); // Redireciona para a página de login se não estiver autenticado
    exit();
}

// Verifique se o usuário tem permissão de administrador
if ($_SESSION['nome'] !== 'Administrador') {
    echo "Você não tem permissão para acessar esta página.";
    exit();
   
}

?>

<html>
<body>
    <center>
        <?php
        echo "<h1>Lista de Usuários Cadastrados</h1>";
        echo "<ul>";
        
        include('conexao.php');

        $query = "SELECT nome FROM login";
        $resultado = mysqli_query($conexao, $query);

        if ($resultado) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<li>" . $row['nome'] . "</li>";
            }
        } else {
            echo "Erro ao recuperar os usuários cadastrados.";
        }

        mysqli_close($conexao);

        echo "</ul>";
        ?>
        <br>
        <a href="index.php">Voltar</a>
    </center>
</body>
</html>