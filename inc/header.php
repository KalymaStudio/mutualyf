<?php

// Load Wordpress Framework
if ( !defined('ABSPATH') ) { require_once( dirname(__FILE__) . "/../../wp-load.php"); }

// If this is a private page, check if user is logged in
if( $private === true )
{
    if(! is_user_logged_in() )
    {
        $url = ( is_ssl() ? 'https://' : 'http://' ) . 'mobile.mutualyf.com.ar/login.php';
        wp_redirect($url);
        exit();
    }
}

//
$user_login = '';
$user_pass = '';
$login_error = false;
$login_error_message = '';

if( isset($_POST['wp-submit']) && $_POST['wp-submit'] == 'Acceder' )
{
    $user_login = isset($_POST['log']) ? $_POST['log'] : '';
    $user_pass = isset($_POST['pwd']) ? $_POST['pwd'] : '';

    $creds = array();
    $creds['user_login'] = $user_login;
    $creds['user_password'] = $user_pass;
    $creds['remember'] = false;

    // Try to loggin the user
    $user = wp_signon( $creds, false );
    if ( is_wp_error($user) )
    {
        $login_error = true;
        $login_error_message = $user->get_error_message();
    }
    else
    {
        $url = ( is_ssl() ? 'https://' : 'http://' ) . 'mobile.mutualyf.com.ar/perfil.php';
        wp_redirect($url);
        exit();
    }
}


?>
<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Declare page as mobile friendly -->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
<!-- iPhone 3, 3Gs -->
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" 			media="screen and (max-device-width: 320px)" />
<!-- iPhone 4 -->
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" 		media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" />
<!-- iPhone 5 -->
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />

<!-- Page Title -->
<title>MUTUALYF | Mutual del sindicato de Luz y Fuerza de Rosario</title>

<!-- Stylesheet Load -->
<link href="styles/style.css"				rel="stylesheet" type="text/css">
<link href="styles/framework-style.css" 	rel="stylesheet" type="text/css">
<link href="styles/framework.css" 			rel="stylesheet" type="text/css">
<link href="styles/bxslider.css"			rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"			rel="stylesheet" type="text/css">
<link href="styles/icons.css"				rel="stylesheet" type="text/css">
<link href="styles/retina.css" 				rel="stylesheet" type="text/css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" />


<!--Page Scripts Load -->
<script src="scripts/jquery.min.js"		type="text/javascript"></script>
<script src="scripts/hammer.js"			type="text/javascript"></script>
<script src="scripts/jquery-ui-min.js"  type="text/javascript"></script>
<script src="scripts/subscribe.js"		type="text/javascript"></script>
<script src="scripts/contact.js"		type="text/javascript"></script>
<script src="scripts/jquery.swipebox.js" type="text/javascript"></script>
<script src="scripts/jquery.filtertable.min.js" type="text/javascript"></script>
<script src="scripts/bxslider.js"		type="text/javascript"></script>
<script src="scripts/colorbox.js"		type="text/javascript"></script>
<script src="scripts/retina.js"			type="text/javascript"></script>
<script src="scripts/custom.js"			type="text/javascript"></script>
<script src="scripts/framework.js"		type="text/javascript"></script>
<script src="scripts/jsontable.js"		type="text/javascript"></script>

</head>
<body>

<div id="preloader">
	<div id="status">
    	<p class="center-text">
			Cargando...
            <em>Aguarde unos instantes</em>
        </p>
    </div>
</div>

<?php if(!$ishome) : ?>
<div class="header">
    <a class="logo-home" href="index.php"><img src="images/logo.png" alt="img" width="100"></a>
    <div class="header-text">
        <?php if( !is_user_logged_in() ) : ?>
            <strong><a href="/login.php">Iniciar Sesion</a></strong>
            <em>área del asociado</em>
        <?php else : ?>
            <strong><a href="/logout.php">Cerrar Sesion</a></strong>
            <em><?=$current_user->user_email; ?></em>
        <?php endif; ?>


    </div>
</div>
<div class="header-clear"></div>
<?php endif; ?>
