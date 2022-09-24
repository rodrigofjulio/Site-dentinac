<?php
   $servername = "127.0.0.1";
   $username = "root";
   $password = "";
   $banco = "dentinac";
   // conectando o banco de dados...
  // servidor, usuario, senha banco
   $con = new mysqli($servername, $username, $password, $banco);
  
   if (mysqli_connect_error()){
       die("Falha da Conexão: " . mysqli_connect_error());
   }else{
   echo "Banco de dados Conectado!";
}


?>