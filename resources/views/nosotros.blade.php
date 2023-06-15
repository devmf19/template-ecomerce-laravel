<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <title>Nosotros</title>
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
        <h2 class="title text-center">Sobre nosotros</h2>

        <div class="nosotros">
            <div class="imagen">
                <img src="{{asset('assets/img/nosotros.jpg')}}" alt="nosotros.jpg">
            </div>
    
            <div class="informacion-nosotros">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis, ab ipsum pariatur dolores sed
                    ipsam aperiam modi quasi laudantium recusandae nemo nostrum itaque libero, maxime vitae placeat
                    accusantium laborum inventore!</p>
    
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto consequuntur odio fuga rem
                    repellendus, dolorum itaque mollitia non illum porro reiciendis voluptatibus voluptates pariatur quas,
                    deleniti quo provident quidem inventore?</p>
                    
            </div>
        </div>

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
                <h3>Sobre nostros</h3>

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