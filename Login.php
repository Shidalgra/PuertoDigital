<!DOCTYPE html>
<html lang="es">

<head>
    <title>Puerto Automatizado</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Gestiona el puerto desde donde estes">
    <meta name="keywords" content="Puerto Automatizado, gestion de puerto, puerto">
    <link rel="canonical" href="http://localhost/ProyectoAmbienteWeb/Login.php">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/Login.css" rel="stylesheet" type="text/css" />
    <script src="js/preconnect.js" type="text/javascript"></script>
    <link rel="stylesheet" href="Sign-in-up.css" type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b29e93a16f.js" crossorigin="anonymous"></script>
</head>

<body>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!----------------------------------------------ARRIBA ENLACES DE INGRSAR Y REGISTRAR------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------------------------------------>

    <div class="switch-header">
        <button class="sign-in-header sign">Ingresar</button>
        <button class="sign-up-header sign">Registrarse</button>
        <span class="bottom-border"></span>
    </div><br><br><br><br><br>

    <!------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!----------------------------------------------INGRESAR------------------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="sign-in-wrapper">
        <span class="fa-stack Ship">
            <i class="fas fa-circle fa-stack-2x icon-bg"></i>
            <i class="fas fa-ship fa-stack-1x icon-V"></i>
            <i class="pi pi-spin pi-spinner" style="font-size: 2rem"></i>
        </span>
        <h3 class="header">Puerto <span class="beats">Automatizado</span></h3>
        <form name="form1" id="form1" action="validarUsuarioPswd.php" method="POST">
            <!-- Cambiar action aqui y abajo -->
            <!--1er cuadro----------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="reg reg0">
                <input type="text" name="username" id="username" class="form-input sign-in input-sign-in" placeholder="Usuario:" />
            </div>
            <span class="error error0">Este espacio no puede estar vacio</span>
            <!--2do cuadro----------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="reg reg1">
                <input type="password" name="pswd" id="password" class="form-input sign-in input-sign-in" placeholder="Pass:"><i class="fas fa-eye-slash hide"></i>
            </div>
            <span class="error error1">Este espacio no puede estar vacio</span>
            <!--Boton Zarpar---------------------------------------------------------------------------------------------------------------------------------------------------->
            <button type="submit" class="form-input button" id="button">Zarpemos</button>
            <!--Botones de registro--------------------------------------------------------------------------------------------------------------------------------------------->
        </form>
        <span class="or">O</span><br>
        <p class="or-text">Ingrese usando:</p>
        <div class="alt">
            <a href="https://accounts.google.com/signin/v2/challenge/pwd?continue=https%3A%2F%2Fmyaccount.google.com%2Fsigninoptions%2Fpassword%3Fhl%3Des&service=accountsettings&hl=es&osid=1&rart=ANgoxceVLvvrncp-H_Q4XFP3nADf8vhQpwHlzpzN7--nNhy0oTKJ7nNy56dSL2H-dJNgWU2yne6qRNGOxhDN2SYscrCYhfZUwA&TL=AM3QAYbiZQqvAQvcZw9TIavyX_uIuVFBstkFphDTp0C-LXRxJsUCWQOHMr6Uj1lu&flowName=GlifWebSignIn&cid=1&flowEntry=ServiceLogin" class="icon-link"><span><i id="alt-icon1" class="fab fa-google alt-icon"></i></span></a>
            <a href="https://www.facebook.com/?stype=lo&jlou=AfePhWJjkNuF5oYx0ZDDq_RGs_Bswbct7wX4xMWGpKIiG28itdWueUAofciMizm-RFKOk0maSwL66x9x4gh0Hn2VR1CZJ3xnyZ3J5vcZ8vxYiA&smuh=51104&lh=Ac9s2C55LU-WBNgBlgY" class="icon-link"><span><i id="alt-icon2" class="fab fa-facebook alt-icon"></i></span></a>
            <a href="https://www.tiktok.com/login?lang=es" class="icon-link"><span><i id="alt-icon3" class="fab fa-tiktok alt-icon"></i></span></a>
        </div>
        <!--Footer---------------------------------------------------------------------------------------------------------------------------------------------------->
        <span class="author author-text"><a href="https://www.sololearn.com/profile/12582974" class="author-link" target="_self">Shidalgra.Solutions</a> &copy;2021</span>
    </div>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------>
    <!----------------------------------------------REGISTRAR----------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="sign-up-wrapper">
        <span class="fa-stack Ship2">
            <i class="fas fa-circle fa-stack-2x icon-bg2"></i>
            <i class="fas fa-ship fa-stack-1x icon-V2"></i>
        </span>
        <h3 class="header2">Puerto <span class="beats2">Automatizado</span></h3>
        <!--<form name="form2" id="form2" action="" method="get">-->
        <form name="form2" id="form2" action="ProcesamientoLogin.php" method="POST">
            <!-- Para cambiar por el php -->
            <!--1er cuadro---------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="reg reg00">
                <input type="text" name="id2" id="id2" class="form-input sign-in2 input-sign-up" placeholder="Cedula:" />
            </div>
            <span class="error error00">Este espacio no puede estar vacio</span>
            <!--2do cuadro---------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="reg reg11">
                <input type="text" name="Nombre2" id="Nombre2" class="form-input sign-in2 input-sign-up" placeholder="Nombre:" />
            </div>
            <span class="error error11">Este espacio no puede estar vacio</span>
            <!--3er cuadro---------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="reg reg22">
                <input type="text" name="Apellidos2_1" id="Apellidos2_1" class="form-input sign-in2 input-sign-up" placeholder="Primer apellido:" />
            </div>
            <span class="error error33">Este espacio no puede estar vacio</span>
            <!--4to cuadro---------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="reg reg33">
                <input type="text" name="Apellidos2_2" id="Apellidos2_2" class="form-input sign-in2 input-sign-up" placeholder="Segundo apellido:" />
            </div>
            <span class="error error33">Este espacio no puede estar vacio</span>
            <!--5to cuadro---------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="reg reg44">
                <input type="text" name="Usuario2" id="Usuario2" class="form-input sign-in2 input-sign-up" placeholder="Usuario:" />
            </div>
            <span class="error error44">Este espacio no puede estar vacio</span>
            <!--6to cuadro---------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="reg reg55">
                <input type="password" name="pswd2" id="password2" class="form-input sign-in2 input-sign-up" placeholder="Pass:" ><i class="fas fa-eye-slash hide2"></i>
            </div>
            <span class="error error55">Este espacio no puede estar vacio</span>
            <!--Boton Registrar-------------------------------------------------------------------------------------------------------------------------------------------------------->
            <button class="form-input button2" id="button2" type="submit" onclick="return validaciones();">Crear cuenta nueva</button>
            <!--Botones de registro---------------------------------------------------------------------------------------------------------------------------------------------------->
        </form>
        <span class="or2">O</span><br>
        <p class="or-text2">Registrese usando:</p>
        <div class="alt2">
            <a href="https://accounts.google.com/signin/v2/challenge/pwd?continue=https%3A%2F%2Fmyaccount.google.com%2Fsigninoptions%2Fpassword%3Fhl%3Des&service=accountsettings&hl=es&osid=1&rart=ANgoxceVLvvrncp-H_Q4XFP3nADf8vhQpwHlzpzN7--nNhy0oTKJ7nNy56dSL2H-dJNgWU2yne6qRNGOxhDN2SYscrCYhfZUwA&TL=AM3QAYbiZQqvAQvcZw9TIavyX_uIuVFBstkFphDTp0C-LXRxJsUCWQOHMr6Uj1lu&flowName=GlifWebSignIn&cid=1&flowEntry=ServiceLogin" class="icon-link2"><span><i id="alt-icon4" class="fab fa-google alt-icon"></i></span></a>
            <a href="https://www.facebook.com/?stype=lo&jlou=AfePhWJjkNuF5oYx0ZDDq_RGs_Bswbct7wX4xMWGpKIiG28itdWueUAofciMizm-RFKOk0maSwL66x9x4gh0Hn2VR1CZJ3xnyZ3J5vcZ8vxYiA&smuh=51104&lh=Ac9s2C55LU-WBNgBlgY" class="icon-link2"><span><i id="alt-icon5" class="fab fa-facebook alt-icon"></i></span></a>
            <a href="https://www.tiktok.com/login?lang=es" class="icon-link2"><span><i id="alt-icon6" class="fab fa-tiktok alt-icon"></i></span></a>
        </div>
        <!--Footer---------------------------------------------------------------------------------------------------------------------------------------------------->
        <span class="author author-text2"><a href="https://www.sololearn.com/profile/12582974" class="author-link2" target="_self">Shidalgra.Solutions</a> &copy;2021</span>
    </div>
    <script src="Sign-in-up.js" type="text/javascript" charset="utf-8"></script>
    <noscript>
        javaScript is required
    </noscript>
</body>

</html>