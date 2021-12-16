</div>
<footer class="footer container">
    <div class="links_section">
        <?php amp_logo(); ?>
        <p class="text-center mt-2">
            Somos el portal para madres líder en Latinoamérica. Te brindamos la mejor ayuda para tu bebé y para ti.
        </p>

        <h2 class="text-center mt-2">
            Descubre
        </h2>
        <ol>
            <li>
                Comunidad
            </li>

            <li>
                Tarjeta de Invitación
            </li>

            <li>
                Calculadoras
            </li>

            <li>
                Nombres para bebés
            </li>
            <li>
                Blog
            </li>
        </ol>

        <h2 class="text-center mt-2">
            Información
        </h2>
        <ol>
            <li>
                Preguntas frecuentes
            </li>

            <li>
                Contacto
            </li>

            <li>
                Condiciones de uso
            </li>

            <li>
                Políticas de privacidad
            </li>
        </ol>

        <h2 class="text-center mt-2">
            Suscríbete
        </h2>
        <div class="container">
            <form class="form" action-xhr="<?= site_url() ?>/wp-admin/admin-ajax.php?action=serma_sendy_subscribe"
                id="newsletter_form" method="POST" target="_top">
                <div class="form_container">
                    <input type="hidden" name="url_referrer" title="<?= get_permalink() ?>">
                    <input class="input_field" type="email" name="email" title="Correo electrónico">
                    <button class="newsletter-form_submit" type="submit" title="Subscribirme" aria-label="Subscribirme">
                        <amp-img alt="subscribirme" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/paper-plane.svg"
                            width="16px" height="18px"></amp-img>
                    </button>
                    <div class="container mt-1">
                        <input type="checkbox" name="tos_accepted" required="required" aria-required="true">
                        <label for="tos_accepted">He leído y acepto los <a
                                href="https://staging10.sermadre.com/terminos-y-condiciones/"
                                style="color: #5FC2EC">Términos y
                                condiciones </a></label>
                    </div>
                    <div submit-success>
                        <template type="amp-mustache">
                            Gracias por
                            subscribirte a nuestro newsletter!
                        </template>
                    </div>
                </div>
            </form>
        </div>

        <h2 class="text-center mt-2">
            Síguenos
        </h2>
        <div class="row justify-center align-center">
            <a class="social-icon d-flex align-center" href="https://www.facebook.com/sermadrela/" target="_blank">
                <amp-img alt="facebook" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/brands/facebook.svg" width="18px" height="18px"></amp-img>
            </a>
            <a class="social-icon d-flex align-center" href="" target="_blank">
                <amp-img alt="twitter" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/brands/twitter.svg" width="18px" height="18px"></amp-img>
            </a>
            <a class="social-icon d-flex align-center" href="" target="_blank">
                <amp-img alt="google+" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/brands/google-plus-g.svg" width="18px" height="18px"></amp-img>
            </a>
            <a class="social-icon d-flex align-center" href="https://www.instagram.com/sermadreoficial/?hl=es"
                target="_blank">
                <amp-img alt="instagram" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/brands/instagram.svg" width="18px" height="18px"></amp-img>
            </a>
        </div>
    </div>

    <div class="container copy_footer mt-3">
        <p class="font-weight-light white-text">Todos los derechos reservados &copy; 2021</p>
    </div>
</footer>