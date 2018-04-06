<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title> @yield('titulo')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
	
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" />
	 <link href={{ asset('css/style.css') }} rel="stylesheet">
	 <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> 
  </head>

	 <!-- Body -->
  <body>
		<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
		   <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img src="{{ asset('image/sigeadcon.png') }}" alt="" width="200" height="40"></a>
			<form class="form-control-dark w-100" method="POST" action="{{ route('admin.buscarcontador') }}">
			{{ csrf_field() }}
		   	<input class="form-control form-control-dark w-100" name="buscarcont" type="text" placeholder="Buscar Contador" aria-label="Search">
			</form>
		   <ul class="navbar-nav px-3">
		     <li class="nav-item text-nowrap">
		       <a class="nav-link text-nowrap" href="{{ route('home') }}">Salir</a>
		     </li>
		   </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
              	 <a href="{{ route('admin.inicio') }}" class="nav-link text-danger" >
                  <span data-feather="alert-octagon"></span>
                  Notificaciones @yield('notificaciones')
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="{{ route('admin.listacontadores') }}">
                  <span data-feather="align-left"></span>
                  Contadores
                </a>
              </li>
					<li class="nav-item">
                <a class="nav-link text-danger" href="{{ route('admin.listaradmin') }}">
                  <span data-feather="align-left"></span>
                  Listar Admin
                </a>
              </li>
				  <li class="nav-item">
              	 <a href="{{ route('admin.crearadmin')}}" class="nav-link text-danger" >
                  <span data-feather="shopping-cart"></span>
                  Crear Admin
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger" href="{{ route('admin.editaradmin') }}">
                  <span data-feather="users"></span>
                  Cambiar Perfil
                </a>
              </li>
            </ul>
				<br>
				<hr>
				<br>
				<!--<div class="mx-auto">
					<p class="text-center">
						<img  src="{{ asset('image/logo.png') }}" alt="" width="120" height="120">
					</span>
				</div>
				<br>
				<div class="mx-auto">
					<p class="text-center">
						<img  src="{{ asset('image/feclave.jpg') }}" alt="" width="170" height="130">
					</span>
				</div>
          </div> -->
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          
          @yield('contenido')
        </main>
      </div>
    </div>

	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="{{ asset('js/sigeadcon.js') }}"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>
</html>

