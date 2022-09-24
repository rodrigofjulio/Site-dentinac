<?phpinclude "db.conf";
$idCliente =$_GET["idCliente"];
$sql = "DELETE FROM cliente WHERE idCliente =". $idCliente;
if(mysqli_query($con,$sql)){
    echo "<script LANGUAGE='JavaScript'>    
    window.alert('Deletado com Sucesso');    
    window.location.href='index.php';    
    </script>";    
}     
    else{     
        echo"Erro ao Apagar!";  };


//href='delete.php?idUser='+id;
?>