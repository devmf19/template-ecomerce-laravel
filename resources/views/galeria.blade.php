<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <title>E-Comerce</title>
</head>

<body>

    <header>
        <h1 class="nombre-sitio">Tienda<span>Muebles</span> </h1>
    </header>

    <div class="contenedor-nav">
        <nav class="nav-principal contenedor">
            <a href="/">Inicio</a>
            <a href="/nosotros">Nosotros</a>
            <a href="/tienda">Tienda</a>
            <a href="/blog">Blog</a>
            <a href="/galeria">Galería</a>
            <a href="/contacto">Contacto</a>
        </nav>
    </div>

    <main class="contenedor contenido-principal">
        <h2 class="title text-center">Galería</h2>

        <ul class="grid-galeria">
            <li class="imagen-galeria no-listar">
                <a href="{{asset('assets/img/galeria_01.jpg')}}">
                    <img src="{{asset('assets/img/galeria_01.jpg')}}" alt="galeria1">
                </a>
                
            </li>
            
            <li class="imagen-galeria no-listar">
                <a href="{{asset('assets/img/galeria_02.jpg')}}">
                    <img src="{{asset('assets/img/galeria_02.jpg')}}" alt="galeria2">
                </a>

            </li>

            <li class="imagen-galeria no-listar">
                <a href="{{asset('assets/img/galeria_08.jpg')}}">
                    <img src="{{asset('assets/img/galeria_08.jpg')}}" alt="galeria3">
                </a>

            </li>

            <li class="imagen-galeria no-listar">
                <a href="{{asset('assets/img/galeria_09.jpg')}}">
                    <img src="{{asset('assets/img/galeria_09.jpg')}}" alt="galeria4">
                </a>

            </li>

            <li class="imagen-galeria no-listar">
                <a href="{{asset('assets/img/galeria_03.jpg')}}">
                    <img src="{{asset('assets/img/galeria_03.jpg')}}" alt="galeria5">
                </a>

            </li>

            <li class="imagen-galeria no-listar">
                <a href="{{asset('assets/img/galeria_04.jpg')}}">
                    <img src="{{asset('assets/img/galeria_04.jpg')}}" alt="galeria6">
                </a>

            </li>

            <li class="imagen-galeria no-listar">
                <a href="{{asset('assets/img/galeria_05.jpg')}}.jpg">
                    <img src="{{asset('assets/img/galeria_05.jpg')}}" alt="galeria7">
                </a>

            </li>

            <li class="imagen-galeria no-listar">
                <a href="{{asset('assets/img/galeria_06.jpg')}}">
                    <img src="{{asset('assets/img/galeria_06.jpg')}}" alt="galeria8">
                </a>

            </li>

            <li class="imagen-galeria no-listar">
                <a href="{{asset('assets/img/galeria_07.jpg')}}">
                    <img src="{{asset('assets/img/galeria_07.jpg')}}" alt="galeria9">
                </a>

            </li>
            
        </ul>

    </main>

    <footer class="site-footer">
        <div class="grid-footer contenedor">
            <div>
                <h3>Categorías</h3>

                <nav class="footer-menu">
                    <a href="#">Cocina</a>
                    <a href="#">Oficina</a>
                    <a href="#">Jardín</a>
                    <a href="#">Cochera</a>
                    <a href="#">Dormitorios</a>
                </nav>
            </div>

            <div>
                <h3>Sobre nosotros</h3>

                <nav class="footer-menu">
                    <a href="#">Nuestra historia</a>
                    <a href="#">Misión, Visión y Valores</a>
                    <a href="#">Carreras</a>
                    <a href="#">Política de privacidad</a>
                    <a href="#">Términos del servicio</a>
                </nav>
            </div>

            <div>
                <h3>Soporte</h3>

                <nav class="footer-menu">
                    <a href="#">Preguntas frecuentes</a>
                    <a href="#">Ayuda en línea</a>
                    <a href="#">Confianza y seguridad</a>
                </nav>
            </div>
        </div>

        <p class="text-center">Todos los derechos Reservados, TiendaMuebles</p>
    </footer>

</body>

</html>