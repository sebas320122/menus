 <!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  <title>Actividad 11 @yield('title')</title> 
 <!-- Implementar bootstrap-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head> 
<body class="d-flex flex-column min-vh-100"> 
<!-- Implementar bootstrap- -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--Crear seccion menu-->
@section('navbar')
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TiendaOnline</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <!--Agregar codigo para resaltar view actual-->
      <a class="nav-item nav-link{{ Request::is('inicio') ? ' active' : '' }}" href="{{ route('menu.inicio') }}">Inicio</a>
      <a class="nav-item nav-link{{ Request::is('tienda') ? ' active' : '' }}" href="{{ route('menu.tienda') }}">Tienda</a>
      <a class="nav-item nav-link{{ Request::is('ubicacion') ? ' active' : '' }}" href="{{ route('menu.ubicacion') }}">Ubicacion</a></div>
  </div>
</nav>
@show
<style> 
.card{
    margin-top:40px;
    margin-bottom:40px;
}
</style>

  <div class="container"> 
    @yield('content') 
  </div> 
 
  <!--Crear seccion footer-->
  <footer class="bg-light text-center text-lg-start mt-auto">
  <div class="text-center p-3" style="background-color: #FFC045">
    Hecho por: Sebastian Garcia Lizarraga
  </div>
</footer>

</body>


</html> 