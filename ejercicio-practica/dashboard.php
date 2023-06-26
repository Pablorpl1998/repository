<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="author" content="">
    <meta name="copyright" content="">
    <meta name="contact" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="NoIndex, NoFollow">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="icon/png" href="favicon.png">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard-style.css">
    <script type="text/javascript" src="rsc/js/javascript-dashboard.js"></script>
    <link rel="javascript" type="text/css" href="css/dashboard-style.css">

    <title>Dashboard</title>
</head>
<body>
<div class="container-web">
    <div class="cabecera-web">
        <div class="block-left">
				<img src="rsc/img/pr.png" id="imagen-cabecera"  >
			</div>
			<div class="block-center">
				<form action="">
                    <input type="search" class="buscar-lupa" placeholder=" Search">
                </form>
			</div>
			<div class="block-right">
            <i class="fa-solid fa-envelope"></i>
            <i class="fa-solid fa-gear"></i>
            <i class="fa-sharp fa-solid fa-right-from-bracket" id="exit"></i>
			</div>
            <div class="block-right-2">
                <img src="rsc/img/user.png" alt="" id="user-img">
                <h3>Login</h3>
			</div>
            <div class="block-mobile">
                <i class="fa-solid fa-bars" id="abrir"></i>
                <i class="fa-sharp fa-solid fa-xmark" id="cerrar"></i>
            </div>
    </div>

    <div class="estructura-izq"><br><br><br>
       <div class="block-left-fix" id="block-dashboard"><i class="fa-sharp fa-solid fa-house"></i><h4>Dashboard</h4></div>
       <div class="block-left-fix" id="block-chart"><i class="fa-sharp fa-solid fa-chart-simple"></i><h4>Chart</h4></div>
       <div class="block-left-fix" id="block-apps"><i class="fa-solid fa-star"></i><h4>Apps</h4></div>
       <div class="block-left-fix" id="block-forum"><i class="fa-brands fa-rocketchat"></i><h4>Forum</h4></div>
       <div class="block-left-fix" id="block-email"><i class="fa-solid fa-envelope"></i><h4>Email</h4></div>
       <div class="block-left-fix" id="block-settings"><i class="fa-solid fa-screwdriver-wrench"></i><h4>Settings</h4></div>
       <br><br>
       <div class="second-part-fixed">
        <h2>Proyects</h2>
        <p>Options</p>
        <p>Case</p>
        <p>Local</p>
       </div>
    </div>
    <!-- estructure mobile left -->
   <div class="estructura-mobile-left" >
    <div class="block-mobile-left" id="block-mobile-dashboard"><i class="fa-sharp fa-solid fa-house"></i><h4>Dashboard</h4></div>
    <div class="block-mobile-left" id="block-mobile-chart"><i class="fa-sharp fa-solid fa-chart-simple"></i><h4>Chart</h4></div>
    <div class="block-mobile-left" id="block-mobile-apps"><i class="fa-solid fa-star"></i><h4>Apps</h4></div>
    <div class="block-mobile-left" id="block-mobile-forum"><i class="fa-brands fa-rocketchat"></i><h4>Forum</h4></div>
    <div class="block-mobile-left" id="block-mobile-email"><i class="fa-solid fa-envelope"></i><h4>Email</h4></div>
    <div class="block-mobile-left" id="block-mobile-settings"><i class="fa-solid fa-screwdriver-wrench"></i><h4>Settings</h4></div>
   </div> 
    <div class="estructura-derecha">
        <!-- CREAR DIFERENTES ESTRUCTURAS QUE ESTEN EN DISPLAY NONE Y CUANDO PULSES CHART O APPS APAREZCA ESE CONTENIDO Y EL RESTO SE QUITE. DASHBOARD APARECE DE FORMA PRINCIPAL -->

        <div class="estructura-dashboard" id="contenido-dashboard">
            <div class="cabecera-estructura-dashboard">
                <h3>Dashboard / <span>HOME</span></h3>
            </div>
            <div class="header-estructura-dashboard">
                <div class="banner">
                    <h2>Demuestrales lo que vales</h2>
                    <i class="fa-sharp fa-solid fa-plane"><h4>Conectate</h4></i>
                </div>
            </div>
            <div class="body-estructura-dashboard">
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
            </div>
        </div>

        <div class="estructura-dashboard" id="contenido-chart">
            <div class="cabecera-estructura-dashboard">
                <h3>Chart / <span>HOME</span></h3>
            </div>
            <div class="header-estructura-dashboard">
                <div class="banner">
                    <h2>Demuestrales lo que vales</h2>
                    <i class="fa-sharp fa-solid fa-plane"><h4>Conectate</h4></i>
                </div>
            </div>
            <div class="body-estructura-dashboard">
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
            </div>
        </div>

        <div class="estructura-dashboard" id="contenido-apps">
            <div class="cabecera-estructura-dashboard">
                <h3>Apps / <span>HOME</span></h3>
            </div>
            <div class="header-estructura-dashboard">
                <div class="banner">
                    <h2>Demuestrales lo que vales</h2>
                    <i class="fa-sharp fa-solid fa-plane"><h4>Conectate</h4></i>
                </div>
            </div>
            <div class="body-estructura-dashboard">
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
            </div>
        </div>

        <div class="estructura-dashboard" id="contenido-forum">
            <div class="cabecera-estructura-dashboard">
                <h3>Forum / <span>HOME</span></h3>
            </div>
            <div class="header-estructura-dashboard">
                <div class="banner">
                    <h2>Demuestrales lo que vales</h2>
                    <i class="fa-sharp fa-solid fa-plane"><h4>Conectate</h4></i>
                </div>
            </div>
            <div class="body-estructura-dashboard">
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
            </div>
        </div>

        <div class="estructura-dashboard" id="contenido-email">
            <div class="cabecera-estructura-dashboard">
                <h3>Email / <span>HOME</span></h3>
            </div>
            <div class="header-estructura-dashboard">
                <div class="banner">
                    <h2>Demuestrales lo que vales</h2>
                    <i class="fa-sharp fa-solid fa-plane"><h4>Conectate</h4></i>
                </div>
            </div>
            <div class="body-estructura-dashboard">
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
            </div>
        </div>

        <div class="estructura-dashboard" id="contenido-setting">
            <div class="cabecera-estructura-dashboard">
                <h3>Setting / <span>HOME</span></h3>
            </div>
            <div class="header-estructura-dashboard">
                <div class="banner">
                    <h2>Demuestrales lo que vales</h2>
                    <i class="fa-sharp fa-solid fa-plane"><h4>Conectate</h4></i>
                </div>
            </div>
            <div class="body-estructura-dashboard">
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
                <div class="box-dashboard-dates"></div>
            </div>
        </div>
</div>

<script>

$("#block-dashboard").click(function(){
  $("#contenido-dashboard").show();
  $("#contenido-chart, #contenido-forum, #contenido-email, #contenido-setting, #contenido-apps").hide();
});

$("#block-chart").click(function(){
  $("#contenido-chart").show();
  $("#contenido-dashboard, #contenido-forum, #contenido-email, #contenido-setting, #contenido-apps").hide();
});

$("#block-apps").click(function(){
  $("#contenido-apps").show();
  $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-email, #contenido-setting").hide();
});

$("#block-forum").click(function(){
  $("#contenido-forum").show();
  $("#contenido-chart, #contenido-dashboard, #contenido-email, #contenido-setting, #contenido-apps").hide();
});

$("#block-email").click(function(){
  $("#contenido-email").show();
  $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-setting, #contenido-apps").hide();
});

$("#block-settings").click(function(){
  $("#contenido-setting").show();
  $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-email, #contenido-apps").hide();
});


// versión mobile

$("#block-mobile-dashboard").click(function(){
  $("#contenido-dashboard").show();
  $("#contenido-chart, #contenido-forum, #contenido-email, #contenido-setting, #contenido-apps").hide();
});

$("#block-mobile-chart").click(function(){
  $("#contenido-chart").show();
  $("#contenido-dashboard, #contenido-forum, #contenido-email, #contenido-setting, #contenido-apps").hide();
});

$("#block-mobile-apps").click(function(){
  $("#contenido-apps").show();
  $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-email, #contenido-setting").hide();
});

$("#block-mobile-forum").click(function(){
  $("#contenido-forum").show();
  $("#contenido-chart, #contenido-dashboard, #contenido-email, #contenido-setting, #contenido-apps").hide();
});

$("#block-mobile-email").click(function(){
  $("#contenido-email").show();
  $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-setting, #contenido-apps").hide();
});

$("#block-mobile-settings").click(function(){
  $("#contenido-setting").show();
  $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-email, #contenido-apps").hide();
});

$(".estructura-mobile-left").click(function(){
$(".estructura-mobile-left").hide(); 
$("#cerrar").hide();
$("#abrir").show();
});

// menu navegador mobile

$("#abrir").click(function(){
  $("#abrir").hide();
  $("#cerrar").show();
  $(".estructura-mobile-left").show();
});

$("#cerrar").click(function(){
  $("#cerrar").hide();
  $("#abrir").show();
  $(".estructura-mobile-left").hide();
});



</script>
</body> 
</html>