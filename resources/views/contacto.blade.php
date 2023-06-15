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
        <h2 class="title text-center">Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Tus datos personales</legend>

                <div class="campo">
                    <label for="nombre">Nombre: </label>
                    <input type="text" id="nombre" placeholder="Tu nombre" required/>
                </div>

                <div class="campo">
                    <label for="asunto">Asunto: </label>
                    <input type="text" id="asunto" placeholder="Tu asunto" required/>
                </div>

                <div class="campo">
                    <label for="email">E-mail: </label>
                    <input type="email" id="email" placeholder="Tu E-mail" required/>
                </div>

                <div class="campo">
                    <label for="telefono">Teléfono: </label>
                    <input type="tel" id="telefono" placeholder="Tu teléfono" />
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje: </label>
                    <textarea id="mensaje" placeholder="Tu mensaje"></textarea>
                </div>

            </fieldset>

            <fieldset>
                <legend>País</legend>

                <div class="campo">
                    <label for="pais">País: </label>
                    <select id="pais">
                        <option value="CO">Colombia</option>
                    </select>
                </div>
            </fieldset>

            <fieldset>
                <legend>Información Extra</legend>

                <div class="campo">
                    <label for="cliente">Cliente</label>
                    <input ide="cliente" type="radio" name="tipo" value="cliente">
                </div>
                <div class="campo">
                    <label for="proveedor">Proveedor</label>
                    <input ide="proveedor" type="radio" name="tipo" value="proveedor">
                </div>
                <div class="campo">
                    <label for="categoria">Categoria</label>
                    <input list="categorias" name="categorias">
                    <datalist id="categorias">
                        <option value="Cocina">
                        <option value="Exterior">
                        <option value="Recamaras">
                        <option value="Oficina">
                        <option value="Televisión">
                    </datalist>
                </div>
            </fieldset>
            <input type="submit" value="Enviar datos" class="btn max-width-30">

        </form>

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