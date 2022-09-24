<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
    
    
  }
  #carousel-inner
  {
    border-radius:10px;
    
  }
  </style>
    <title>Document</title>
</head>
<body>
<header class="container-fluid p-5 my-5 bg-primary text-white">

<center>
<h3>Sistema de Cadastro de Paciente</h3>

<div><div class="img_face" style="float: left"><img src="img/dentinac.png" width = "150" heigth = "150" ALIGN="RIGHT" margin="top"/>

</center>

    <p ></p>
    </header>
    <main  class="container p-5 my-5 border" >
    <div class="container-fluid">
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-3 ">
<a href = "consulta.php"> Consulta Paciente </a>

    <form action="gravar.php" method="post">

    Nome.:<br>
    <input type="text" name="nome"/>
    <br>
    
    CPF.:<br>
    <input type="number" name="cpf"/>
    <br>
    
    E-mail.:<br>
    <input type="email" name="email"/>
    <br>

    Data de Nascimento.:<br>
    <input type="date" name="datanascimento">
   <br>

    Endereço.:<br>
    <input type="text" name="endereco"/>
    <br>
    
    Telefone.:<br>
    <input type="number" name="telefone"/>
    <br>
    
    Tipo de Atendimento.:<br>
    <select name="tipoatendimento">
        <option value="">Selecione</option>
        <option value="endodontia">Endodontia</option>
        <option value="periodontia">Periodontia</option>    
        <option value="ortodontia">Ortodontia</option>
        <option value="clinicageral">Clínica geral</option> 
        
    <select/>
    <br><br>
    <input type="submit" value="Cadastrar Cliente"/>
</form>
</div>
<div class="col-sm-10 col-md-9  ">
<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" id="carousel-inner">
    <div class="carousel-item active">
      <img src="img/dente1.jpg" alt="" width="1500px" height="200px">
    </div>
    <div class="carousel-item">
      <img src="img/dente3.jpg" alt="" width="1000px" height="1000px">
    </div>
    <div class="carousel-item">
      <img src="img/dentista.jpg" alt="" width="800px" height="200px">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>
</div>
    </div>
  </div>
</div>
    
</main>
<footer class="container-fluid p-5 my-5 bg-primary text-white">

</footer>  
</body>
</html>