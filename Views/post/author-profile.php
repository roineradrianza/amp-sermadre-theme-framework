<div class="container mt-2 px-2 author-container">
    <p class="d-flex justify-center primary-text font-weight-regular black-text">
        <amp-img src="<?= SERMA_AMP_THEME_URL ?>/assets/icons/post/avatar.svg" alt="" width="20px" height="20px"></amp-img>
        Sobre el autor de este artículo
    </p>
    <hr>
    <div class="d-flex justify-center">
        <a href="<?= esc_url( get_author_posts_url( $meta['ID'] ) ) ?>">
            <?= $avatar ?>
        </a>
    </div>
    <a href="<?= esc_url( get_author_posts_url( $meta['ID'] ) ) ?>">
        <h4 class="text-center">
            <?= $meta['first_name'] ?>
            <?= $meta['last_name'] ?>
        </h4>
        <p class="black-text text-center">
            <?= $meta['serma_job_title'] ?>
        </p>
        <p class="black-text text-center">
            <?= $meta['bio'] ?>
        </p>
    </a>
</div>