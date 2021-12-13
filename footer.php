</div>
<script>
let newsletter_form = document.querySelector('#newsletter_form');

window.addEventListener('load', () => {
    let search_bar_icon = document.querySelector('#search_icon')
    let search_bar_container = document.querySelector('#search_form_container')
    let mobile_logo_container = document.querySelector('#mobile_logo_container')
    let search_form = document.querySelector('#search_form')
    search_bar_icon.onclick = () => {
        search_bar_container.classList.remove('d-none')
        search_bar_container.classList.add('row')
        mobile_logo_container.classList.add('d-none')
        search_form.focus()
    }
    search_form.onblur = () => {
        search_bar_container.classList.add('d-none')
        search_bar_container.classList.remove('row')
        mobile_logo_container.classList.remove('d-none')
    }
})


newsletter_form.addEventListener('submit', (e) => {
    e.preventDefault()
    let result = subscribeToNewsletter('#newsletter_form')
})

async function subscribeToNewsletter(form_id) {

    let form_data = new FormData(form_id)

    console.log(form_data)

}
</script>
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
                id="newsletter_form" method="POST">
                <div class="form_container">
                    <input type="hidden" name="url_referrer" title="<?= get_permalink() ?>">
                    <input class="input_field" type="email" name="email" title="Correo electrónico">
                    <button class="newsletter-form_submit" type="submit" title="Subscribirme" aria-label="Subscribirme">
                        <img alt="subscribirme" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/paper-plane.svg"
                            width="16px">
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
                            <img src="<?= SERMA_AMP_THEME_URL ?>assets/icons/check.svg"
                            width="15px"> Gracias por subscribirte a nuestro newsletter!
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
                <img alt="facebook" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/brands/facebook.svg" target="_blank">
            </a>
            <a class="social-icon d-flex align-center" href="">
                <img alt="twitter" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/brands/twitter.svg" target="_blank">
            </a>
            <a class="social-icon d-flex align-center" href="" target="_blank">
                <img alt="google+" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/brands/google-plus-g.svg">
            </a>
            <a class="social-icon d-flex align-center" href="https://www.instagram.com/sermadreoficial/?hl=es"
                target="_blank">
                <img alt="instagram" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/brands/instagram.svg" target="_blank">
            </a>
        </div>
    </div>

    <div class="container copy_footer mt-3">
        <p class="font-weight-light">Todos los derechos reservados &copy; 2021</p>
    </div>
</footer>