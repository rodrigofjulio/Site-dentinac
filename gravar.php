<?php
// Faz a incousão do conteúdo do arquivo
include "db.conf";

$nome = $_POST["nome"]
;$cpf = $_POST["cpf"]
;$email =$_POST["email"]
;$datanascimento =$_POST["datanascimento"]
;$endereco =$_POST["endereco"]
;$telefone =$_POST["telefone"]
;$tipoatendimento =$_POST["tipoatendimento"]
;$sql = "insert into paciente values
 (null,'".$nome."','".$cpf."','".$email."','".$datanascimento."','".$endereco."','".$telefone."','".$tipoatendimento."')";if(mysqli_query($con,$sql))
{   //echo"Gravado com Sucesso!";         
    // Faz um redirecionamento    
    //header("location: index.php");
     echo "<script LANGUAGE='JavaScript'>   
      window.alert('Gravado com Sucesso');    
      window.location.href='index.php';    </script>";    
    }     
     else{     
         echo"Erro ao Gravar!";  
         }; 
         ?>