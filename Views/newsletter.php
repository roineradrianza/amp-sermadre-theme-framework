<div class="container newsletter">
    <div class="container">
        <h3 class="newsletter-title">¿Te gustó lo que leíste?</h3>
        <p class="heading-text">
            Suscríbete para recibir información que te interesa.
        </p>
    </div>
    <form class="form" action-xhr="<?= site_url() ?>/wp-admin/admin-ajax.php?action=serma_sendy_subscribe"
        id="newsletter_form" method="POST">
        <div class="form_container">
            <input type="hidden" name="url_referrer" title="<?= $referrer_url ?>">
            <div class="container">
                <input class="input_field" type="email" name="email" title="Correo electrónico"
                    placeholder="Ingresa tu correo electrónico" style="width: 90%">
            </div>
            <div class="container mt-1">
                <input type="checkbox" name="tos_accepted" required="required" aria-required="true">
                <label for="tos_accepted">
                    <span class="secondary-text">
                        He leído y acepto los
                        <a href="https://staging10.sermadre.com/terminos-y-condiciones/" style="color: #5FC2EC">
                            Términos y
                            condiciones
                        </a>
                    </span>
                </label>
                <br>
                <small class="secondary-text">
                    Acepto recibir comunicaciones por correo electrónico de sermadre.com que incluyen noticias,
                    actualizaciones, alertas de acción y otros mensajes que envía sermadre.
                </small>
            </div>
            <div class="d-flex justify-center mt-2">
                <button class="newsletter-form_submit" type="submit" title="Subscribirme" aria-label="Subscribirme">
                    <span class="white-text">
                        Subscribirme
                    </span>
                </button>
            </div>

            <div class="text-center" submit-success>
                <template type="amp-mustache">
                    <img src="<?= SERMA_AMP_THEME_URL ?>assets/icons/check.svg" width="15px"> Gracias por subscribirte a
                    nuestro newsletter!
                </template>
            </div>
        </div>
    </form>
</div>