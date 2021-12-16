<div class="social-media-share mb-2">
    <div class="d-flex social-container sticky">
        <a class="col-6 social-button facebook d-flex justify-center"
            on="tap:AMP.navigateTo(url='https://www.facebook.com/sharer.php?u=<?= $url ?>', target='_blank')"
            data-social-link="">
            <img src="<?= SERMA_AMP_THEME_URL ?>/assets/icons/social-share/facebook.svg" alt="Compartir por facebook"
                width="18px" height="18px">
        </a>
        <a class="col-6 social-button whatsapp d-flex justify-center"
            on="tap:AMP.navigateTo(url='https://api.whatsapp.com/send?text=*<?= $title ?>* <?= $url ?>', target='_blank')"
            data-social-link="">
            <img src="<?= SERMA_AMP_THEME_URL ?>/assets/icons/social-share/whatsapp.svg" alt="Compartir por whatsapp"
                width="18px" height="18px">
        </a>
    </div>
</div>