<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Tienda de Camisetas</title>
</head>
<body>
    <div id="container">
        <!-- Cabecera -->
        <header>
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta logo" />
                <a href="index.php">
                    Tienda de Camisetas
                </a>
        </header>
        <!-- Menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Categoría 1</a>
                </li>
                <li>
                    <a href="#">Categoría 2</a>
                </li>
                <li>
                    <a href="#">Categoría 3</a>
                </li>
                <li>
                    <a href="#">Categoría 4</a>
                </li>
                <li>
                    <a href="#">Categoría 5</a>
                </li>
            </ul>
        </nav>

        <div id="content"><!--Inicio content -->
            <!-- Barra Lateral -->
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Entrar a la web</h3>
                    <form action"#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name"email" />

                        <label for="password">Contraseña</label>
                        <input type="password" name"password" />

                        <input type="submit" value="Enviar" />
                    </form>
                    
                    <ul>
                        <li><a href="#">Mis Pedidos</a></li>
                        <li><a href="#">Gestionar Pedidos</a></li>
                        <li><a href="#">Gestionar Categorías</a></li>
                    </ul>
                    
                </div>
            </aside>
            <!-- Contenido central -->
            <div id="central">
                <h1>Productos dstacados</h1>

                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta azul ancha</h2>
                    <p>30 €</p>
                    <a href="" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta azul ancha</h2>
                    <p>30 €</p>
                    <a href="" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta azul ancha</h2>
                    <p>30 €</p>
                    <a href="" class="button">Comprar</a>
                </div>
            </div>

        </div><!--Fin content -->

        <!-- Footer -->
        <footer id="footer">
            <p>Desarrollado por Nemodigital &copy; <?=date('Y')?></p>
        </footer>
    </div><!--Fin container-->
</body>
</html>
