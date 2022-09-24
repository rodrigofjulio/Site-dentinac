<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
<header class="container-fluid p-5 my-5 bg-primary text-white">

<center>
<h3></h3>

<div><div class="img_face" style="float: left"><img src="img/dentinac.png" width = "150" heigth = "150" ALIGN="RIGHT" margin="top"/>

</center>
</header>
<main class="container p-5 my-5 border">
    <h1>Consulta Paciente</h1>
    <form action="consulta.php" method="post">
    <form>
        Informe o Nome do Paciente:
            <input type="text" name="nome" placeholder="digite o nome"/>
            <input type="submit" value="consultar"/>
            <br><br>                     
</form>
<hr>
<?php

  

    //buscar dados do formulário
    if(isset($_POST["nome"])){
$nome = trim($_POST["nome"]);
if($nome == ""){
    echo "Preencha o campo nome para buscar";
}else{

    //2 montar o sql
    $sql = "select * from  paciente where nome LIKE '".$nome."%' order by nome asc limit 100 ";

    //3 abrir a conexão com o banco de dados
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $banco = "dentinac";
    // conectando o banco de dados...
   // servidor, usuario, senha banco
    $con = new mysqli($servername, $username, $password, $banco);

    
    //4- executar
$retorno = mysqli_query($con,$sql);
if(mysqli_num_rows($retorno)>0){
    echo "Encontrei no Banco...";
while($registro = mysqli_fetch_array($retorno)){
echo "<div class='row'>
<div class='col-sm-1'>".
$registro["nome"]."</div>
<div class='col-sm-2'>".
$registro["cpf"]."</div>
<div class='col-sm-2'>".
$registro["email"]."</div>
<div class='col-sm-2'>".
$registro["datanascimento"]."</div>
<div class='col-sm-1'>".
$registro["endereco"]."</div>
<div class='col-sm-1'>".
$registro["telefone"]."</div>
<div class='col-sm-2'>".
$registro["tipoatendimento"]."</div>";
echo "<br><br>";
}
}else{
    echo"Não Existe Esse Nome No Banco De Dados";
}
}
} 
?>
<a href = "index.php"> Cadastro de Paciente </a>
</main>
<footer class="container-fluid p-5 my-5 bg-primary text-white"></footer>
</body>
</html>