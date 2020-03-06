<?php include "inc/header.php"; ?>

<div class="content">

      <div class="container no-bottom">
          <div class="heading">
              <div class="heading-left">
                  <em>CONSULTORIO SINDICAL</em>
                  <h3><a href="https://goo.gl/maps/eaFpHxHCPcH2" target="_blank">Paraguay 1135</a> - <a href="tel: +54 0341 480 3891">Te. (0341) 480-3891</a></h3>
              </div>
              <div class="heading-right">
                  <span class="icon icon-pencil"></span>
              </div>
          </div>
      </div>

    <div class="decoration"></div>

    <div id="prestadores" class="container"></div>
</div>

<script>

jQuery.ajax({
    url: "http://mobile.mutualyf.com.ar/inc/clinica.json",
    dataType: "text",
    success: function(data) 
    {
        var json = jQuery.parseJSON(data);
        var table = createTableFromJSON(json,'table');
        jQuery('#prestadores').html(table);
        jQuery('#prestadores table').filterTable({ 
            "autofocus" : true, 
            "label": "Buscar:",
            "placeholder": "ingrese un texto a buscar",
            "inputName": "filter-input",
        });
    }
});
</Script>

<?php include "inc/footer.php"; ?>
