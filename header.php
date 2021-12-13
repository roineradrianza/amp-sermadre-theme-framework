<?php amp_header_core() ?>
<header class="header container">
    <div id="search_form_container" class="d-none">
        <form class="form" action="<?= site_url() ?>" method="GET">
            <div class="form_container">
                <input id="search_form" placeholder="Buscar" class="search-form__input" type="search" name="s"
                    title="Buscar" value="">
                <button class="search-form__submit" type="submit" title="Buscar" aria-label="Buscar">
                    <img class="searcher" alt="buscador" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/search_blue.svg">
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
                <img class="searcher" alt="buscador" src="<?= SERMA_AMP_THEME_URL ?>assets/icons/search.svg">
            </span>
        </div>
    </div>

    <div class="clearfix"></div>

</header>

<div class="content-wrapper container">