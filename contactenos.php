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
    <ul class="navbar-nav mr-auto">
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
    <div class="container bg-white">
            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4" style="color:#4caf9d">CONTACTENOS </h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">¿Tienes alguna pregunta que hacernos? porfavor no dudes en contactarnos directamente, te ayudaremos lo mas rapido y eficiente posible.</p>
        
                <!--Grid column-->
                <div class="container-fluid col-md-12 mb-md-0 mb-5 ml-auto">
                    <form id="contact-form" class='ml_auto'name="contact-form" action="" method="POST">
                        <!--Grid row-->
                        <div class="row">
        
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Nombre</label>
                                </div>
                            </div>
                            <!--Grid column-->
        
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Correo electronico</label>
                                </div>
                            </div>
                            <!--Grid column-->
        
                        </div>
                        <!--Grid row-->
        
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">¿De que se trata tu problema?</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
        
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12">
        
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Tu queja</label>
                                </div>
        
                            </div>
                        </div>
                        <!--Grid row-->
        
                    </form>
                    <div class="enviarr">
        
                    <div class="text-center">
                        <a class="btn" style="background-color:#7AD5C4; color: rgb(255, 255, 255);" onclick="document.getElementById('contact-form').submit();">ENVIAR</a>
                    </div>
                    <div class="status"></div>
                </div>
            

    </div>

</section>


<footer>
  <div  class="container-fluid dapa">
  Correo Electronico: paularomero4512@gmail.com <br>
  Numero de Contacto: 3213046705 </div>
</div>
</footer>


<script src="vista/js/jquery.js"></script>
<script src="vista/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>