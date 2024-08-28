<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ecommerce</title>
    <link rel="stylesheet" href="./estilos2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    

     <!--EMPIEZA NAVBAR -->
     <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/Practica%20Profesionalizante/inicio.html"><img class="logo"
                    src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi9F391fjZKzfbZrvZsJeseHoASXQjhNYUEj9HJBmcPKNGm_hbOi3jgZqv8AepXKgGvokucFzcJvrSgq2IaKLpAY5jTkVO22i_iMS8y7sq1GYCvwItZmMo13r0kL-gwOypCJj-NwMq0mCVMzrEZLzEuO1gfjIvUOWDKja1aZ55Zc3JRvpyftoCx_uwnp1E/s200/logoSupersonico.png">SuperSónicos</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://localhost/Practica%20Profesionalizante/accsesorios.php">Accesorios</a></li>
                            <li><a class="dropdown-item" href="http://localhost/Practica%20Profesionalizante/indumentaria.php">Indumentaria</a></li>
                            <li><a class="dropdown-item" href="http://localhost/Practica%20Profesionalizante/producto_calzado.php">Calzado</a></li>
                        </ul>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/Practica%20Profesionalizante/PreguntasFrecuentes.html">Preguntas Frecuentes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--FIN DE NAVBAR-->
<!--BOTON PARA VOLVER-->
<a href="http://localhost/Practica%20Profesionalizante/inicio.html">
    <button type="button" class="btn btn-dark mt-5 mx-5"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
        Volver
    </button>
    </a>
    <!--BOTON PARA VOLVER-->
   


    <div class="row mt-2 mb-2">
        <div class="col-lg-5 m-auto text-center">
            <h1>Calzado</h1>
        </div>
    </div>

    <!--COMIENZO Indumentaria-->
    <?php
    //Cambiar con los datos de la Base de Datos
    $link = mysqli_connect("localhost", "root", "", "supersonicos", "3307"); mysqli_select_db($link, "supersonicos");
    $tildes = $link->query("SET NAMES 'utf8'"); 
$result = mysqli_query($link, "SELECT * FROM calzado"); 
mysqli_data_seek ($result, 0);
$extraido= mysqli_fetch_array($result); ?>


    <div class="container p-3 pt-3 pb-4">
        <div class="row">
                     <div class="col-md-3 p-1">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="card-img-top"
                            src="https://www.digitalsport.com.ar/files/products/5abbfad8a9d6a-436246-500x500.jpg"
                            alt="Zapatillas Nike">
                    </div>

                    <h5 class="card-title mx-2"><?php echo $extraido['Nombre'] ?></h5>
                    <p class="card-text mx-2"><?php echo $extraido['Descripcion'] ?></p>
                        <p class="card-text mx-2"><?php echo "Precio: $".$extraido['Precio'] ?></p>
                        <p class="card-text mx-2"><?php echo "Talle: ".$extraido['Talle'] ?></p>
                </div>
            </div>

    <?php
    //Cambiar con los datos de la Base de Datos
    $link = mysqli_connect("localhost", "root", "", "supersonicos", "3307"); mysqli_select_db($link, "supersonicos");
    $tildes = $link->query("SET NAMES 'utf8'"); 
    $result = mysqli_query($link, "SELECT * FROM calzado"); 
    mysqli_data_seek ($result, 1);
$extraido= mysqli_fetch_array($result); 
mysqli_free_result($result); ?>

            <div class="col-md-3 p-1">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="card-img-top"
                            src="https://assets.adidas.com/images/w_600,f_auto,q_auto/89eace13aef44d55b4e9beb2ae0f128c_9366/Zapatillas_Ultraboost_1.0_Azul_ID2344_01_standard.jpg"
                            alt="zapatillas Adidas">
                    </div>

                    <h5 class="card-title mx-2"><?php echo $extraido['Nombre'] ?></h5>
                    <p class="card-text mx-2"><?php echo $extraido['Descripcion'] ?></p>
                        <p class="card-text mx-2"><?php echo "Precio: $".$extraido['Precio'] ?></p>
                        <p class="card-text mx-2"><?php echo "Talle: ".$extraido['Talle'] ?></p>
                </div>
            </div>
  <?php
    //Cambiar con los datos de la Base de Datos
$link = mysqli_connect("localhost", "root", "", "supersonicos", "3307"); mysqli_select_db($link, "supersonicos");
$tildes = $link->query("SET NAMES 'utf8'"); 
$result = mysqli_query($link, "SELECT * FROM calzado"); 
mysqli_data_seek ($result, 2);
$extraido= mysqli_fetch_array($result); 
mysqli_free_result($result); ?>


            <div class="col-md-3 p-1">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="card-img-top"
                            src="https://www.moov.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw2815c170/products/PU_388981-01/PU_388981-01-1.JPG"
                            alt="Puma Suede">
                    </div>

                    <h5 class="card-title mx-2"><?php echo $extraido['Nombre'] ?></h5>
                    <p class="card-text mx-2"><?php echo $extraido['Descripcion'] ?></p>
                        <p class="card-text mx-2"><?php echo "Precio: $".$extraido['Precio'] ?></p>
                        <p class="card-text mx-2"><?php echo "Talle: ".$extraido['Talle'] ?></p>
                </div>
            </div>

  <?php
    //Cambiar con los datos de la Base de Datos
$link = mysqli_connect("localhost", "root", "", "supersonicos", "3307"); mysqli_select_db($link, "supersonicos");
$tildes = $link->query("SET NAMES 'utf8'"); 
$result = mysqli_query($link, "SELECT * FROM calzado"); 
mysqli_data_seek ($result, 3);
$extraido= mysqli_fetch_array($result); 
mysqli_free_result($result); ?>
     
            <div class="col-md-3 p-1">
                <div class="card h-100">
                    <div class="card-body">
                        <img class="card-img-top"
                            src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/380cd0128db4445baaaaaf430126820f_9366/Zapatillas_Ozelle_Cloudfoam_Azul_H03506_01_standard.jpg"
                            alt="Adidas Ozelle">
                    </div>

                    <h5 class="card-title mx-2"><?php echo $extraido['Nombre'] ?></h5>
                    <p class="card-text mx-2"><?php echo $extraido['Descripcion'] ?></p>
                        <p class="card-text mx-2"><?php echo "Precio: $".$extraido['Precio'] ?></p>
                        <p class="card-text mx-2"><?php echo "Talle: ".$extraido['Talle'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!--Fin Productos destacados-->
    <div class="row justify-content-center">
        <div class="col-10 col-md-6">
            <h2 class="text-center">Suscribete a nuestro newsletter</h2>
            <h5 class="text-center">10% de descuento en tu próxima compra</h3>
                <div class="pb-1">
                    <input type="email" class="form-control" placeholder="Ingrese su Email">
                </div>
                <a href="inicio.html" class="btn btn-secondary">Suscribirse</a>
        </div>
    </div>


     <!--Empieza Footer-->
     <footer>
        <div class="container-fluid">

            <div class="row mt-3 p-3 pb-1 bg-dark text-white">

                <div class="col-xs-12 col-md-6 col-lg-4">
                    <p class="h3"><img class="logo"
                            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi9F391fjZKzfbZrvZsJeseHoASXQjhNYUEj9HJBmcPKNGm_hbOi3jgZqv8AepXKgGvokucFzcJvrSgq2IaKLpAY5jTkVO22i_iMS8y7sq1GYCvwItZmMo13r0kL-gwOypCJj-NwMq0mCVMzrEZLzEuO1gfjIvUOWDKja1aZ55Zc3JRvpyftoCx_uwnp1E/s200/logoSupersonico.png">SuperSónicos
                    </p>
                    <p class="text-secondary">IES 9008 GC</p>
                </div>
                <div class="mb-3 col-xs-12 col-md-6 col-lg-4">
                    <p class="h5">Contacto <img class="iconB" src="imagenes/correo-de-contacto.png"></p>
                    <div class="mb-2">
                        <a class="text-secondary text-decoration-none" href="https://web.whatsapp.com"
                            target="_blank"><img class="icon" src="imagenes/whatsapp.png">WhatsApp</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-secondary text-decoration-none" href="https://www.instagram.com"
                            target="_blank"><img class="icon" src="imagenes/instagram.png">Instagram</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-secondary text-decoration-none" href="https://mail.google.com"
                            target="_blank"><img class="icon" src="imagenes/gmail.png">Email</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4">
                    
                    <div class="mb-2">
                        <a class="text-secondary text-decoration-none" href="http://localhost/Practica%20Profesionalizante/PreguntasFrecuentes.html">Preguntas Frecuentes</a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <hr>
                    <p class="text-white text-center">Copyright - All rights © reserved - SS Company - <span
                            id="anioCopy"></span></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="scriptFecha.js"></script>
    <script src="scriptSub.js"></script>
    <script src="scriptQS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>