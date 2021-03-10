<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="./css/Administrador/administrador.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>

    <div class="wrapper">  
        <div class="header">
            <div class="header-menu">
                <div class="title">JAASC <span>Administrador</span></div>
                <div class="sidebar-btn">
                <i class="fas fa-bars"></i>
                </div>
                <li class="item" id="profile">
                    <a href="#profile" class="menu-btn">
                        <i class="fas fa-user-circle"></i><span>Perfil <i class="fas fa-chevron-down drop-dow"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-image"></i><span>Imagen</span></a>
                        <a href="#"><i class="fas fa-address-card"></i><span>Informacion</span></a>
                    </div>
                </li>
             </div>
        </div>
        
        <div class="sidebar">
            <div class="sidebar-menu">
                <center class="profile">
                    <img src="./images/perfil.jpg" alt="">
                    <p>Jehanpíero</p>
                </center>
                <li class="item" id="payment">
                    <a href="#payment" class="menu-btn">
                        <i class="fas fa-desktop"></i><span>Tablero <i class="fas fa-chevron-down drop-dow"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-money-check"></i><span>Pagos</span></a>
                        <a href="#"><i class="fas fa-clipboard"></i><span>Reportes</span></a>
                    </div>
                </li>
                <li class="item" id="register">
                    <a href="#register" class="menu-btn">
                        <i class="fas fa-folder-plus"></i><span>Registros <i class="fas fa-chevron-down drop-dow"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="Propiedad"><i class="fas fa-house-user"></i><span>Registro Propiedad</span></a>
                        <a href="Usuario"><i class="fas fa-user-friends"></i><span>Registro Usuario</span></a>
                    </div>
                </li>
                <li class="item" id="messages">
                    <a href="#messages" class="menu-btn">
                        <i class="fas fa-envelope"></i><span>Mensajes <i class="fas fa-chevron-down drop-dow"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-envelope"></i><span>Nuevo</span></a>
                        <a href="#"><i class="fas fa-envelope-square"></i><span>Informacion</span></a>
                        <a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
                    </div>
                </li>
                <li class="item" id="document">
                    <a href="#document" class="menu-btn">
                        <i class="fas fa-file-alt"></i><span>Documentos <i class="fas fa-chevron-down drop-dow"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="Tipo_Documento"><i class="fas fa-id-card-alt"></i><span>Tipo De Documento</span></a>
                        <a href="Tipo_Pago"><i class="fas fa-money-check-alt"></i><span>Tipo De Pago</span></a>
                        <a href="Tipo_Propiedad"><i class="fas fa-home"></i><span>Tipo De Propiedad</span></a>
                    </div>
                </li>
                <li class="item" id="settings">
                    <a href="#settings" class="menu-btn">
                        <i class="fas fa-cog"></i><span>Configuracion<i class="fas fa-chevron-down drop-dow"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="#"><i class="fas fa-lock"></i><span>Contraseña</span></a>
                        <a href="#"><i class="fas fa-language"></i><span>Idioma</span></a>
                    </div>
                </li>
                <li class="item">
                    <a href="#" class="menu-btn">
                        <i class="fas fa-info-circle"></i><span>Acerca De</span>
                    </a>
                </li>
                <li class="item">
                    <a href="Iniciar_Sesion" class="menu-btn">
                        <i class="fas fa-door-open"></i><span>Cerrar Sesion</span>
                    </a>
                </li>
            </div>
        </div>
        <div class="main-container">
            <div class="card">
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                </p>
            </div>
            <div class="card">
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                </p>
            </div>
            <div class="card">
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                </p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
        $(".sidebar-btn").click(function(){
            $(".wrapper").toggleClass("collapse");
        });
    });
    </script>
</body>
</html>