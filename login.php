<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Centro Médico de Bogotá</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link rel="icon" href="vista/img/Logo.png">
  <link href="vista/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vista/css/dani.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
 
  <nav class="navbar navbar-expand-lg navbar-light  micolor">
  <a class="navbar-brand" href="#"><img src="vista/img/dani.png " class="dani"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav  mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Ingrese</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactenos.php">PQR</a>
      </li>
      
    </ul>
    
  </div>
</nav>

 <section> 
  <main >
    <br><br>
    <div class="bg-white">
     <h2 class="text-center micolor2" style="color:#4caf9d">Inicio de Sesión</h2>
      <div class="col-sm-12 col-md-6 col-lg-4  m-auto">
          <form action="controladores/login.php" method="POST"  class="form-signin">
              <div class="form-group">
              <label for="inputEmail">Email:</label>
              <input
                type="email"
                id="inputEmail"
                name="inputemail"
                class="form-control"
                placeholder="Ingrese email"
                required
                autofocus
              />
            <div class="text-danger" id="correoinicio"></div>
            </div>
            
            <div class="form-group">
              <label for="inputPassword">Contraseña:</label>
              <input
                type="password"
                id="inputPassword"
                name="inputcontrasena"
                class="form-control"
                placeholder="Ingrese Contraseña"
                required
              />
              <div class="text-danger" id="contrasenainicio"></div>
              </div>
              <p>
                <input type="submit" class="btn" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" value="Continuar" onclick="return validariniciosesion(this.form)">
              </p>
            </form>
      </div>
    </div>
  </main>
</section>


<footer>
<div  class="container-fluid pie dapa">
  Correo Electronico: paularomero4512@gmail.com <br>
  Numero de Contacto: 3213046705 </div>
</footer>

<script src="vista/js/jquery.js"></script>
<script src="vista/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

