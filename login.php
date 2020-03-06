<?php include "inc/header.php"; ?>

<div class="content">

    <div class="container no-bottom">
      <div class="heading">
          <div class="heading-left">
              <em>Inicio de Sesion</em>
              <h3>Acceda a información de su cuenta</h3>
          </div>
          <div class="heading-right">
              <span class="icon icon-pencil"></span>
          </div>
      </div>
    </div>

    <div class="decoration"></div>
      

    <?php if($login_error) : ?>
        <div class="notification-box red-box">
                <h4>Usuario o Contraseña incorrecta</h4>
                <a href="#" class="close-notification">x</a>
            <div class="clear"></div>
        </div> 
	<?php endif; ?>

    <div class="container no-bottom">
          
		<form name="loginform" id="loginform" action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
			
			<p class="login-username">
				<label for="user_login">Usuario</label>
				<input type="text" name="log" id="user_login" class="input" value="<?=$user_login; ?>" size="20" />
			</p>

			<p class="login-password">
				<label for="user_pass">Contraseña</label>
				<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
			</p>
			
			<p class="login-submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Acceder" />
			</p>
			
		</form> 

      </div>

	  <div class="decoration"></div>

</div>

<?php include "inc/footer.php"; ?>
