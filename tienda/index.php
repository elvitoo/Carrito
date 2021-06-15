<!DOCTYPE HTML>
<HTML lang="en">
<head>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title> Tienda</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
         <a class="navbar-brand" href="index.php">Logo de la empresa</a>
         <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
         </button>
         <div id="my-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                        <a class="nav-link" href="#">Item 1 <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                        <a class="nav-link disabled" href="index.php" tabindex="-1" aria-disabled="true">Home</a>
                   </li>
                   <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Carrito</a>
                   </li>
              </ul>
         </div>
    </nav>
    <br/>
    <br/>
  <div class="conteiner">
    <br>
     <div class="alert alert-success">
         Pantalla de mensaje...    
         <a href="#" class="badget badget-success">Ver carrito</a>
     </div>

    <div class="row">
         <div class="col-3">
         <div class="card">
              <img 
              title="Titulo Producto"
              class="card-img-top" src="" 
              alt="Titulo">
              <div class="card-body">
              <span>Titulo del Producto</span>  
                   <h5 class="card-title">$10.000</h5>
                   <p class="card-text">Descripcion</p>
                  
                   <button class="btn btn-primary"
                    name="btnAccion" 
                    values="Agregar" 
                    type="submit">Agregar al carrito</button>
              </div>
         </div>

         </div>
    </div>

  </div>
</body>
</HTML>