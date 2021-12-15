<div class="container mb-2">
    <h3 class="text-center">Compartir es ayudar a otros</h3>
</div>
<div class="social-media-share mb-2">
    <div class="d-flex social-container sticky">
        <div class="col-6 social-button facebook d-flex justify-center"
            social-link="https://www.facebook.com/sharer.php?u=<?= $url ?>">
            <img src="<?= SERMA_AMP_THEME_URL ?>/assets/icons/social-share/facebook.svg" alt="Compartir por facebook"
                width="18px">
        </div>
        <div class="col-6 social-button whatsapp d-flex justify-center"
            social-link="https://api.whatsapp.com/send?text=*<?= $title ?>* <?= $url ?>">
            <img src="<?= SERMA_AMP_THEME_URL ?>/assets/icons/social-share/whatsapp.svg" alt="Compartir por whatsapp"
                width="18px">
        </div>
    </div>
</div>