{{-- <div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md-8 ">
            <div class="card bg-info">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../bootstrap.min.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
      rel="stylesheet"
    />
    <!--este link de boxicons es el que le da el movimiento al menú lateral-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="fuentes/iconic/css/material-design-iconic-font.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/paneladmin.css')}}">

    <title>Admin</title>
  </head>

  <body id="body-pd">
    <script src="../js/paneladmin.js"></script>
    @extends('layouts.app')
    {{-- @if (session('status'))
    {{ session('status') }}
      @endif  --}}
                        
    @section('content')
                   
                       
                            
                          
    
   

        <div class="card-header fw-bold text-success">{{ __('Estás Conectado!') }}</div>    
    
    <!-- header  -->
    <header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <div class="header_img">
        <img src="https://i.imgur.com/hczKIze.jpg" alt="" />
      </div>

      <i class='bx bxs-bell-ring position-relative b-5'' style='color:#2e31fc' ></i>
      

    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
          <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div>
  </form>
  <!-- Navbar horizontal-->
  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
          <a class="" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <!-- icono usuario cierre de sesion en el panel admin -->
            <i class='bx bxs-user-circle' style='color:#2e31fc'></i>
          </a>
        
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#!">Mi Perfil</a></li>
              <li><a class="dropdown-item" href="#!">Configuración</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#!">Cierre de Sesión</a>
          
            </li>
          </ul>
      </li>
  </ul>

    </header>

    <!-- menu lateral -->
  <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="#" class="nav_logo">
            <i class="bx bx-layer nav_logo-icon"></i>
            <span class="nav_logo-name">Menú</span>
          </a>
          <div class="nav_list">
            <a href="#" class="nav_link active">
              <i class="bx bx-grid-alt nav_icon"></i>
              <span class="nav_name">Dashboard</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-user nav_icon"></i>
              <span class="nav_name">Usuarios</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-message-square-detail nav_icon"></i>
              <span class="nav_name">Notificaciones</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-bookmark nav_icon"></i>
              <span class="nav_name">Marcadores</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-folder nav_icon"></i>
              <span class="nav_name">Archivos</span>
            </a>
            <a href="#" class="nav_link">
              <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
              <span class="nav_name">Estadísticas</span>
            </a>
          </div>
        </div>
        <a href="{{ url('/views/auth/login') }}" class="nav_link">
          <i class="bx bx-log-out nav_icon"></i>
          <span class="nav_name">SignOut</span>
        </a>
      </nav>
  </div>
    <!--Container de los modulos Main start-->
<div class="height-100 bg-light">
      <h3 style="font-weight: bold;">Panel de Administración</h3>

        <!-- div de tarjetas para los modulos de gestion documentos, comercial y talento humano-->
    <div class="container">
      
      <div class="row justify-content-between  ">
        <!-- tarjeta de gestion de documentos -->
        <div class="p-1 card position-relative m-5" style="width: 18rem; left:80px">
              <img src="../images/0080-Herramientas-Gestion-documental.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">Gestión de Documentos</h5>
                  <p class="card-text">Digitalice y gestione sus documentos en un sólo lugar.</p>
                  <a href="#" class="btn btn-primary">Ingresar</a>
              </div>                    
          </div>
        
          <div class="p-1 card position-relative m-5" style="width: 18rem; rigth:200px">
            <img src="../images/gestion-del-talento-humano-810x455.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gestión de Talento Humano</h5>
              <p class="card-text">Gestione la información del personal</p>
              <a href="#" class="btn btn-primary">Ingresar</a>
            </div>
          </div>    
      
      </div> 
  </div> 
</div>
  


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>

  </body>
</html>

@endsection
