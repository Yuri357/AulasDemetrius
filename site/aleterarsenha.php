<?php
// Obter os dados do formulário
$senha_atual = $_POST['senha'];
$nova_senha = $_POST['nova_senha'];

// Validar os dados recebidos (por exemplo, verificar se a nova senha atende aos requisitos)

// Conectar ao banco de dados
$servername = "localhost";
$username = "usuario";
$password = "senha";
$dbname = "bancoa3";

$conexao = new mysqli_connect($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

// Consulta para verificar a senha atual do usuário (substitua "usuarios" pelo nome da sua tabela de usuários)
$sql = "SELECT * FROM usuarios WHERE id_usuario = 123";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    // Verificar se a senha atual fornecida pelo usuário corresponde à senha no banco de dados
    if (password_verify($senha_atual, $row['senha'])) {
        // Gerar o hash da nova senha
        $nova_senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
        
        // Atualizar a senha no banco de dados
        $update_sql = "UPDATE usuarios SET senha = '$nova_senha_hash' WHERE id_usuario = 123";
        if ($conexao->query($update_sql) === TRUE) {
            echo "Senha alterada com sucesso!";
        } else {
            echo "Erro ao atualizar a senha: " . $conexao->error;
        }
    } else {
        echo "Senha atual incorreta!";
    }
} else {
    echo "Usuário não encontrado!";
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>
