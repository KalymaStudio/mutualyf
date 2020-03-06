<?php include "inc/header.php"; ?>

<div class="content">

    <div class="decoration"></div>

    <div class="container no-bottom">
       <h4 class="uppercase">PRESTADORES</h4>
       <p>Seleccione la localidad y obtenga los prestadores</p>

       <?=do_shortcode('[prestadores]'); ?>

    </div>

    <div class="decoration"></div>

    <?php Prestadores_Widget::javascript(); ?>

</div>

<?php include "inc/footer.php"; ?>
