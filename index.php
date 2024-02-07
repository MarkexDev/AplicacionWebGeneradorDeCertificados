<?php 

session_start();

if($_POST){

    $mensaje = 'Usuario o contraseña incorrectos';

    if(($_POST['usuario']=="marcos") && ($_POST['contrasenia']=="12345")){

        $_SESSION['usuario'] = "marcos";

        header("location:secciones/index.php");
        
    }

}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            
            <div class="col-md-4"><br><br>
                <div class="card">
                    <div style="background-color:#0073FF; color:white;" class="card-header">
                    <h2 class="text-center">Iniciar sesión</h2>
                    </div>
                    <div class="card-body" >

                    <?php if(isset($mensaje)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <strong> <?php echo $mensaje."<br>";?></strong>
                        </div>             
                    <?php } ?>
                    
                    <br>
                    
                    <img style="width: 80px;height:80px;" class="img-fluid mx-auto d-block rounded" 
                        src="https://cdn.icon-icons.com/icons2/343/PNG/512/Teachers_35749.png" /> <br>
                        
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input id="usuario" name="usuario"
                                class="form-control" type="text"
                                placeholder="Escriba su Usuario">
                        </div> <br>
                        <div class="form-group">
                            <label for="contrasenia">Contraseña:</label>
                            <input id="contrasenia" name="contrasenia"
                                class="form-control" type="password"
                                placeholder="Escriba su Contraseña">
                        </div>
</br>
                        <button type="submit" class="btn btn-primary mb-2">
                            Ingresar
                        </button>
                        <br>
                        <a href="#">¿Ha olvidado su contraseña?</a>
                    </form>
                </div>
                    </div>
                    
                </div>
            </div>

        </div>
        
    </div>

  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>