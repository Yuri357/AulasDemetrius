<style>
      body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, black);
        }
        center{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 75px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 13px;
            border-radius: 10px;
        }
        input[type=submit] {
            background-color: white;
            border: none;
            padding: 10px;
            width: 50%;
            border-radius: 10px;
            font-size: 13px;
            
        }
        input[type=submit]:hover {
            background-color: rgb(143, 234, 255);
            cursor: pointer;
        }
</style>
<body>

    <center>
        <h1>Cadastro</h1>
<form id = "register" action = "cadastrar.php" method = "POST">   
nome: <input type = "text" name = "nome" required><br><br>
login: <input type = "text" name = "login" required><br><br>
senha: <input type = "password" name = "senha" required><br><br>
       <input type = "submit" name = "Cadastrar" value = "cadastrar" required><br>

</center>
    </form>
</div>


</body>
</html>