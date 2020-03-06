<?php $private = true; include "inc/header.php"; ?>
<?php


global $current_user;
get_currentuserinfo();

$afiliado_numero = get_user_meta( $current_user->ID, 'afiliado_numero', true ); 
$afiliado_docnro = get_user_meta( $current_user->ID, 'afiliado_docnro', true ); 
           
?>

<div class="content">

      <div class="container no-bottom">
          <div class="heading">
              <div class="heading-left">
                  <em>PERFIL</em>
                  <h3>Encuentre aquí la información de su cuenta</h3>
              </div>
              <div class="heading-right">
                  <span class="icon icon-pencil"></span>
              </div>
          </div>
      </div>

        <div class="decoration"></div>

        <div class="container">

            <ul id="tab" class="tab">
                <li class="active"><a class="tab-but" href="#datos">Datos Afiliado</a></li>
                <li><a class="tab-but" href="#medicamentos">Medicamentos</a></li>
                <li><a class="tab-but" href="#ambulatorio">Ambulatorio</a></li>
                <li><a class="tab-but" href="#prolongados">Trat. Prolong.</a></li>
                <li><a class="tab-but" href="#reintegros">Reintegros</a></li>
            </ul>

            <div id="datos" class="tab-content">
                <?php show_datos_by_afiliado($afiliado_numero, $afiliado_docnro); ?>
            </div>

            <div id="medicamentos" class="tab-content">
      			<?php show_medicamentos_by_afiliado($afiliado_docnro); ?>
            </div>

            <div id="ambulatorio" class="tab-content">
    			<?php show_ambulatorio_by_afiliado($afiliado_docnro); ?>
            </div>

            <div id="prolongados" class="tab-content">
      			<?php show_prolongado_by_afiliado($afiliado_numero); ?>
            </div>

            <div id="reintegros" class="tab-content">
      			<?php /*show_reintegros_by_afiliado($profileuser->afiliado_numero, $profileuser->afiliado_docnro);*/ ?>
            </div>

            <div class="clear"></div>
        </div>


	  

</div>

<?php include "inc/footer.php"; ?>
