<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
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
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">

                    <div class="slide first">
                        <img src="/images/perfil.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="/images/perfil.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="/images/perfil.jpg" alt="">
                    </div>

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>
                </div>
                <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                </div>               
            </div>
            <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter > 4){
                    counter = 1;
                }
            }, 5000);
            </script>
</main>
    <footer class="footer">
        <div class="container">
            <p>Pagina Diseñada por @JASSC</p>
        </div>
    </footer>
</body>
</html>