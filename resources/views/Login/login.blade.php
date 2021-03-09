<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/Login/login.css" rel="stylesheet">
    <title>JASSC</title>
</head>
<body>
    <header class="header">
        <div class="container logo-nav-container">
            <a href="Home" class="logo">LOGO</a>
            <nav class="navigation">
                <ul>
                <li><a href="Home">Principal</a></li>
                    <li ><a href="Servicio">Servicios</a></li>
                    <li ><a href="Obra">Obras</a></li>
                    <li ><a href="Personal">Personal</a></li>
                    <li ><a href="Estatuto">Estatuto</a></li>
                </ul>
            </nav>
            <a href="Iniciar_Sesion"><input type="button" value="Iniciar Sesion"></a>
        </div>
    </header>

    <main class="main">
        <div class="form">
        <center class="profile">
        <p>Iniciar Sesion</p>
                    <img src="./images/perfil.jpg" alt="">
                </center>
                <form >
                <select>
                        <option>Administrador</option>
                        <option selected="selected">Cliente</option>
                </select>
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <button>Iniciar Sesion</button>
                    <p class="message">No esta Registrado? <a href="#"> Crear Cuenta</a></p>
                </form>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <p>Pagina Diseñada por @JASSC</p>
        </div>
    </footer>
</body>
</html>