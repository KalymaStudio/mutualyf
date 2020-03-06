<?php include "inc/header.php" ?>

<div class="content">
      <div class="container no-bottom">
          <div class="heading">
              <div class="heading-left">
                  <em>CONTACTO</em>
                  <h3>Pongase en contacto con nosotros</h3>
              </div>
              <div class="heading-right">
                  <span class="icon icon-pencil"></span>
              </div>
          </div>
      </div>

      <div class="decoration"></div>

         <div class="container">
            <div class="maps-container">
        		<iframe class="responsive-image maps" src="https://maps.google.com/?ie=UTF8&amp;ll=-32.9514659,-60.6453238&amp;spn=0.006186,0.016512&amp;t=m&amp;z=17&amp;output=embed"></iframe>
            </div>
        </div>

        <div class="decoration"></div>

    	<div class="container no-bottom">
            <div class="contact-form no-bottom">
                <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                    <div class="notification-box green-box">
                        <h4>El mensaje ha sido enviado!</h4>
                        <a href="#" class="close-notification">x</a>
                        <div class="clear"></div>
                        <p>
                            Su mensaje ha sido enviado, responderemos a la brevedad!
                        </p>
                    </div>
                </div>

                <form action="inc/contact.php" method="post" class="contactForm" id="contactForm">
                    <fieldset>
                        <div class="formValidationError" id="contactNameFieldError">
                            <div class="small-notification red-notification no-bottom">
                                <p>NOMBRE ES REQUERIDO</p>
                            </div>
                        </div>
                        <div class="formValidationError" id="contactEmailFieldError">
                            <div class="small-notification red-notification no-bottom">
                                <p>EMAIL ES REQUERIDO</p>
                            </div>
                        </div>
                        <div class="formValidationError" id="contactEmailFieldError2">
                            <div class="small-notification red-notification no-bottom">
                                <p>NUMERO DE AFILIADO</p>
                            </div>
                        </div>
                        <div class="formValidationError" id="contactMessageTextareaError">
                            <div class="small-notification red-notification no-bottom">
                                <p>DEBE INGRESAR UN MENSAJE</p>
                            </div>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title contactNameField" for="contactNameField">Nombre:<span>(required)</span></label>
                            <input type="text" name="contactNameField" value="" class="contactField requiredField" id="contactNameField"/>
                        </div>
                        <div class="formFieldWrap">
                            <label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span></label>
                            <input type="text" name="contactEmailField" value="" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                        </div>
                        <div class="formTextareaWrap">
                            <label class="field-title contactMessageTextarea" for="contactMessageTextarea">Mensaje: <span>(required)</span></label>
                            <textarea name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                        </div>
                        <div class="formSubmitButtonErrorsWrap">
                            <input type="submit" class="buttonWrap button-minimal grey-minimal contactSubmitButton" id="contactSubmitButton" value="ENVIAR" data-formId="contactForm"/>
                            <a class="button-minimal grey-minimal" href="tel:+54 341 480 3804">LLAMENOS</a>
                            <a class="button-minimal grey-minimal" href="sms:+54 341 210 0012">ENVIENOS UN SMS</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    <div class="decoration"></div>
</div>

<?php include "inc/footer.php" ?>
