<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <title>Blog</title>
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
        <h2 class="title text-center">Nuestros Blog</h2>

        <section class="contenedor-blog">
            <div class="blog">
                <article class="articulo">
                    <header>
                        <h2>Guía de colores</h2>
                    </header>

                        <div class="imagen">
                            <img src="{{asset('assets/img/nosotros.jpg')}}" alt="imagen blog">
                        </div>

                        <div class="contenido-blog">
                            <div class="entrada-meta">
                                <p>Fecha: <span>08 de Octubre de 2022</span></p>
                                <p>Escrito por: <span>Francisco</span></p>
                            </div>
    
                            <div class="entrada-blog">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque saepe quo quis sed
                                    exercitationem deserunt iusto, ea esse libero natus, atque voluptates illo consectetur?
                                    Culpa sint pariatur reprehenderit voluptate commodi?</p>
    
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non repudiandae quaerat odio
                                    adipisci quod? Officiis praesentium, non, voluptatum laudantium maxime odit sequi beatae
                                    vero aperiam minima animi quisquam dolorum nihil.</p>
                                
                                <a href="/entrada" class="btn max-width-30">LEER</a>
                                
                            </div>
                        </div>

                </article> 
            
                <article class="articulo">
                    <header>
                        <h2>Guía de colores</h2>
                    </header>

                        <div class="imagen">
                            <img src="{{asset('assets/img/nosotros.jpg')}}" alt="imagen blog">
                        </div>

                        <div class="contenido-blog">
                            <div class="entrada-meta">
                                <p>Fecha: <span>08 de Octubre de 2022</span></p>
                                <p>Escrito por: <span>Francisco Arturo Martínez Torreglosa</span></p>
                            </div>
    
                            <div class="entrada-blog">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque saepe quo quis sed
                                    exercitationem deserunt iusto, ea esse libero natus, atque voluptates illo consectetur?
                                    Culpa sint pariatur reprehenderit voluptate commodi?</p>
    
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non repudiandae quaerat odio
                                    adipisci quod? Officiis praesentium, non, voluptatum laudantium maxime odit sequi beatae
                                    vero aperiam minima animi quisquam dolorum nihil.</p>
                                
                                <a href="/entrada" class="btn max-width-30">LEER</a>
    
                            </div>
                        </div>

                </article> 

            </div>

            <aside class="aside-blog">
                <h3>Otras entradas de blog</h3>

                <ul>
                    <li>
                        <a href="/entrada">Guía de colores</a>
                    </li>
                    <li>
                        <a href="/entrada">Nuevos modelos</a>
                    </li>
                    <li>
                        <a href="/entrada">Guía para diseño de interiores</a>
                    </li>
                    <li>
                        <a href="/entrada">Guía para diseño de exteriores</a>
                    </li>
                </ul>

            </aside>
        </section>

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