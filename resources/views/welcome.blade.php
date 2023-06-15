<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <div class="hero"></div>

    <section class="contenedor categorias">
        <h2 class="title text-center">Categorías de productos</h2>

        <div class="listado-categorias">
            <div class="categoria">
                <img src="{{asset('assets/img/categoria1.jpg')}}" alt="Imagen categoría 1" />
                <a href="#">Oficina</a>

            </div>

            <div class="categoria">

                <img src="{{asset('assets/img/categoria2.jpg')}}" alt="Imagen categoría 2" />
                <a href="#">Hogar</a>

            </div>

            <div class="categoria">

                <img src="{{asset('assets/img/categoria3.jpg')}}" alt="Imagen categoría 3" />
                <a href="#">Cocina</a>

            </div>
        </div>
    </section>

    <section class="sobre-nosotros">
        <div class="contenedor sobre-nosotros-grid">
            <div class="texto-nosotros">
                <h2 class="title">Sobre nosotros</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, eligendi! Fugit, ut atque
                    similique
                    velit possimus sint cupiditate dicta veniam, accusantium ratione ipsa nihil distinctio laborum nulla
                    quia facere dolorem.
                </p>
            </div>
        </div>
    </section>

    <main class="contenedor contenido-principal">
        <h2 class="title text-center">Nuestros productos</h2>

        <div class="listado-productos">
            <div class="producto">
                <!--producto 1 -->
                <img src="{{asset('assets/img/producto1.jpg')}}" alt="producto1">
                <div class="texto-producto">
                    <!--info producto 1 -->
                    <h3>Producto 1</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio architecto laboriosam et, quis
                        laborum repellat consequuntur quod atque fuga minus aspernatur rerum consequatur laudantium
                        placeat ducimus expedita, fugit perspiciatis nostrum!
                    </p>
                    <p>
                        $1,000,000
                    </p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- fin info producto 1 -->
            </div> <!-- fin producto 1 -->

            <div class="producto">
                <!--producto 2 -->
                <img src="{{asset('assets/img/producto2.jpg')}}" alt="producto2">
                <div class="texto-producto">
                    <!--info producto 2 -->
                    <h3>Producto 2</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio architecto laboriosam et, quis
                        laborum repellat consequntur quod atque fuga minus aspernatur rerum consequatur laudantium
                        placeat ducimus expedita, fugit perspiciatis nostrum!
                    </p>
                    <p>
                        $1,000,000
                    </p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- fin info producto 2 -->
            </div> <!-- fin producto 2 -->

            <div class="producto">
                <!--producto 3 -->
                <img src="{{asset('assets/img/producto3.jpg')}}" alt="producto3">
                <div class="texto-producto">
                    <!--info producto 3 -->
                    <h3>Producto 3</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio architecto laboriosam et, quis
                        laborum repellat consequuntur quod atque fuga minus aspernatur rerum consequatur laudantium
                        placeat ducimus expedita, fugit perspiciatis nostrum!
                    </p>
                    <p>
                        $1,000,000
                    </p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- fin info producto 3 -->
            </div> <!-- fin producto 3 -->

            <div class="producto">
                <!--producto 4 -->
                <img src="{{asset('assets/img/producto4.jpg')}}" alt="producto3">
                <div class="texto-producto">
                    <!--info producto 3 -->
                    <h3>Producto 4</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio architecto laboriosam et, quis
                        laborum repellat consequuntur quod atque fuga minus aspernatur rerum consequatur laudantium
                        placeat ducimus expedita, fugit perspiciatis nostrum!
                    </p>
                    <p>
                        $1,000,000
                    </p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- fin info producto 4 -->
            </div> <!-- fin producto 4 -->

            <div class="producto">
                <!--producto 5 -->
                <img src="{{asset('assets/img/producto5.jpg')}}" alt="producto5">
                <div class="texto-producto">
                    <!--info producto 5 -->
                    <h3>Producto 5</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio architecto laboriosam et, quis
                        laborum repellat consequuntur quod atque fuga minus aspernatur rerum consequatur laudantium
                        placeat ducimus expedita, fugit perspiciatis nostrum!
                    </p>
                    <p>
                        $1,000,000
                    </p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- fin info producto 5 -->
            </div> <!-- fin producto 5 -->

            <div class="producto">
                <!--producto 6 -->
                <img src="{{asset('assets/img/producto6.jpg')}}" alt="producto3">
                <div class="texto-producto">
                    <!--info producto 6 -->
                    <h3>Producto 6</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio architecto laboriosam et, quis
                        laborum repellat consequuntur quod atque fuga minus aspernatur rerum consequatur laudantium
                        placeat ducimus expedita, fugit perspiciatis nostrum!
                    </p>
                    <p>
                        $1,000,000
                    </p>
                    <a class="btn" href="#">Agregar al carrito</a>
                </div> <!-- fin info producto 6 -->
            </div> <!-- fin producto 6 -->

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