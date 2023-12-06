pagina html proyecto mipyme center


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal Mi Pyme Center</title>
    <link rel="shortcut icon" href="./images/cosmo.jpg" type="image/x-icon">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
    </style>
</head>

<body>
   
      <header class="hero" >

              
        <div class="nav__logo my-5">
            <img src="images/Logo_MYPYME_CENTER-remove.png" alt="" width="230 px"> 
        </div>

        <nav class="navbar bg-body-tertiary fixed-top" style="font-family: ">
            <div class="container-fluid">
              <a class="navbar-brand fw-bold" style="font-size:25px" href="#">Mi Pyme Center</a>
              <nav class="nav nav--footer p-0">
              
                <ul class="nav__link nav__link--footer" style="font-size: 10xp">
                    <li class="nav__items fw-bold">
                        <a href="#" class="nav__links"></a>
                    </li>
                    <li class="nav__items fw-bold">
                        <a href="#" class="nav__links">Quiénes Somos</a>
                    </li>
                    <li class="nav__items fw-bold">
                        <a href="#" class="nav__links">Contactanos</a>
                    </li>
                    <li class="nav__items fw-bold">
                        <a href="#" class="nav__links">303998109</a>
                    </li>
                    <img style="width: 30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAmlJREFUOE+t1E9IFFEcB/Dvb2b/VCSltM7swYjaIqrFGa3olHTqj2Y7bnjoD3hL6VCnQiLwVBCERQQdIzJCcEcjAjsmQRu4O7sVHjwkYe6MRUFFmbPzfjGisrtuEOEc5/ubz3u/9+Y9wio9tEoO/gopQ00HSPZaAGgQFGDQuMw8NpO0XlYbfAVUO9i8IRTy7hLjNBhPQMgyk0qSaAHTTgYeuuHw+S/H0t9KwTJo89N4revKaQZ+CEnqmj2RyZcWK8PxuMTyTQa2z4fDjaVYGaSY2igBdZ47f4jltTWfk+OFam2opv6YiYtOwjqzlC9DakpvAfFzErSDAt4aIaQcEfcWErn+SmyLqW2cI54IyNg7fTz30c+XoaipXWMgZhtWpzKsnSLGAAOWY1h6tVlFTW2AiUbtRPZBJfTI/9A2rBv1ZvM2Cd4kA1ccw7pevT3tEoBdtmF1lUGqqd0HMGUbVp8fKKbWS8A5ZtHmdOTfRgb3qVLgt3A68rN+rpp6D4hb7YTVVgHpVwHRaBu5k0szUE39DsA9BO5j0FkAtSykdieZebWY/bQN63IZFBlpislCvGMWDUuj+gVRU08y0A9wAwAm5oNycd14MfhrShLi6EwynymDFtpJadMS0YWCkR2qXJf6kT2K7IXqCh2ZCSWl3yPiBtuwWldsvzIU30qSPBkKepu8eSlSDLDrtOffl4KxZ7Hw97ma20R8GC7ttzuzn1ZA0ZTezcS3APi/fmSxIA3iLJicxXcGgLFQ0Ov+0Pbma9UjEjW1iwCv95jSblF+HQx5uyXmI/4WL6wMISMLvPjnQ/u/18qq3Ud/AJNqAyKjqlElAAAAAElFTkSuQmCC"/>
                    
                       
                </ul>
              
            </nav>
            
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Servicios</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                    
                      <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        {{-- esta ruta {{ url('/home') }} tambien lleva al login --}}
                      <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                      </li>
                    
                      
                  </ul>
                 

                  <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </div>
          </nav>
        
        <br><br>
        <center>
                <section class="hero__container">
                    <h1 class="hero__title fw-bold" style=""> Software de Digitalización y Centralización de la Información</h1><br>
                    <h2>En Mi Pyme Center proporcionamos las herramientas necesarias para la Digitalización y centralización de la información de tu empresa.</h2>
                </section>
        </center>

    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle fw-bold">¿Que es Mi Pyme Center?</h2>
            <p class="about__paragraph">Mi Pyme Center fue crado apartir de la necesidad de pequeños negocios y microempresas en poder tener un software para digitalización y centralización de la inforamción; así de esata manera salvaguardar la infroamción y minimizar perdidas de tiempo y dinero a la hora de la consulta y/o pérdida en la información. Sin duda, es un punto clave para mejorar la productividad y la competividad en el mercado actual.
            
                Mi Pyme Center es uno de los generadores de estas soluciones de plataformas de centralizacíon de la información y digitalización de tu empresa mediante un software central de información.
               
            <div class="about__main">
                <article class="about__icons">
                    <img src="{{ asset('./images/shapes.svg')}}" class="about__icon">
                    <h3 class="about__title">Plataforma Central de Información</h3>
                    <p class="about__paragrah">Digitaliza y Salvaguarda la información en una plataforma Central.
                    </p>
                </article>

                <article class="about__icons">
                    <img src="./images/paint.svg" class="about__icon">
                    <h3 class="about__title">Organización Administrativa </h3>
                    <p class="about__paragrah">Mejora la organización Administrativa de la información..
                    </p>
                </article>

                <article class="about__icons">
                    <img src="./images/code.svg" class="about__icon">
                    <h3 class="about__title">Cómodo y de Fácil Uso</h3>
                    <p class="about__paragrah">Software amigable y de fácil uso, permitiendo a todos los colaboradores una ágil interacción.
                    </p>
                </article>
            </div>
        </section>

        <section class="knowledge">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Información al alcance de tú mano</h2>
                    <p class="knowledge__paragraph">Interfaz amigable de fácil interacción.</p>
                    <a href="" class="cta">Inicia Sesión</a>
                </div>

                <img class="knowledge__picture" src="{{ asset('images/welcome.jpg')}}" alt="">

            </div>
        </section>


        <section class="testimony"></section>
                 
        </section>
        
        
        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">Comentarios </p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        
                        <h3 class="questions__title">¿Qué es MiPyme Center?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>
                       
                        <p class="questions__show">MIPYME CENTER software para digitalización y centralización de la información en un sitio web especialmente dirigido a las micro y pequeñas PYMES.
                        </p>
                    </article>
                    </div>
                 

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">Que beneficios obtengo con una Plataforma de información Centralizada?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img" style="width: 50px">
                            </span>
                            
                        </h3>

                        <p class="questions__show">El mayor beneficio de la centralización de los datos es la integridad de estos. Una de las reglas principales en el diseño y creación de una base de datos es que no se permite la redundancia. Es decir, ninguna pieza de los datos nunca debe repetirse dentro de la base de datos.
                        </p><br>
                    </div>
                </article>

            </section>

            <section class="questions__offer">
                <h2 class="subtitle">¿Estás listo para Sistematizar tu Empresa?</h2>
                <p class="questions__copy">.</p>
                <a href="#" class="cta">Inicia Ahora</a>
            </section>
        </section>
    </main>

    <footer class="footer">
     
        <section class="footer__copy container">
            <div class="footer__social">
                <h2 class="footer__title">MyPyme Center</h2>
                <a href="https://www.facebook.com/prodesti4.0/" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
                <a href="https://twitter.com/SENAComunica?t=t6Oshs1FZmxCyAZyiVGNyg&s=08" class="footer__icons"><img src="./images/twitter.svg" class="footer__img"></a>
                <a href="https://youtu.be/YUeyjAm7H3o" class="footer__icons"><img src="./images/youtube.svg" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; MyPyme Center</h3>
        </section>
    </footer>
 
    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/prueba.js"></script>
</body>

</html>


