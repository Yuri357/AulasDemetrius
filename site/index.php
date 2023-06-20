<?php 
session_start();
?>
<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, cyan, black);
    text-align: center;
    color: white;
  }
  center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 30px;
    border-radius: 10px;
  }
  a{
    text-decoration: none;
    color: rgb(255, 0, 0);
  }
</style>
<html>
<body>
<center>
    olá,<?php
    if(isset($_SESSION['nome'])==null){
    ?> visitante<br>
    <a href="cadastro.php">Cadastre-se</a><br>
    <a href="login.php">Login</a>

    <?php } else {
        echo $_SESSION['nome'];?>
        <br>
        <a href="sair.php">Sair</a><br>
        <a href="alterarsenha.php">Alterar Senha</a><br>
        <a href="lista.php">Lista de Usuários</a><br>
         <?php } ?>
</center>
</body>



</html>