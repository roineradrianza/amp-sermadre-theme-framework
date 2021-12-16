<?php amp_header_core() ?>
<header class="header container">
    <amp-script src="<?= SERMA_AMP_THEME_URL ?>assets/js/header.min.js?v1.0.0">
        <div id="search_form_container" class="d-none">
            <form class="form" action="<?= site_url() ?>" method="GET" target="_top">
                <div class="form_container">
                    <input id="search_form" placeholder="Buscar" class="search-form__input" type="search" name="s"
                        title="Buscar" value="">
                    <button class="search-form__submit" type="submit" title="Buscar" aria-label="Buscar">
                        <amp-img class="searcher" alt="buscador"
                            src="<?= SERMA_AMP_THEME_URL ?>assets/icons/search_blue.svg" width="16px" height="18px">
                        </amp-img>
                    </button>
                </div>
            </form>
        </div>

        <div id="mobile_logo_container">
            <div class="left">
                <?php amp_logo(); ?>
            </div>

            <div class="right" id="search_icon">
                <span>
                    <amp-img class="searcher" alt="buscador" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/search-1.svg"
                        width="18px" height="20px"></amp-img>
                </span>
            </div>
        </div>

        <div class="clearfix"></div>
    </amp-script>
</header>

<div class="content-wrapper container">