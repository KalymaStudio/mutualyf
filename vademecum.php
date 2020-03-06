<?php include "inc/header.php"; ?>

<div class="content">

    <div class="decoration"></div>

    <div class="container no-bottom">
       <h4 class="uppercase">VADEMECUM</h4>
       <p>Seleccione la droga genérica y obtenga los nombres comerciales</p>

       <?=do_shortcode('[vademecum]'); ?>

    </div>

    <div class="decoration"></div>
    
    <?php Vademecum_Widget::javascript(); ?>
</div>

<?php include "inc/footer.php"; ?>
