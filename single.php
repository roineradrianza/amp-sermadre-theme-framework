<?php require SERMA_AMP_THEME . '/Classes/Template.php'?>

<?php amp_header()?>
<div style="margin-top: 130px;">
    <?php amp_breadcrumb(); ?>
</div>

<div class="d-flex mt-2" style="">
    <?=SERMA_AMP_TEMPLATE::load_template('post/categories', ['categories' => get_the_category(get_the_ID())])?>
</div>
<?php amp_title()?>
<div class="d-flex mb-2">
    <?=SERMA_AMP_TEMPLATE::load_template('post/author', ['author' => get_the_author()])?>
    <?=SERMA_AMP_TEMPLATE::load_template('post/post-date', ['date' => get_the_date()])?>
</div>
<?php amp_featured_image()?>
<?php amp_content()?>
<?php amp_post_pagination()?>
<?php amp_author_box()?>
<?=SERMA_AMP_TEMPLATE::load_template('related-posts', ['posts' => serma_related_posts()])?>
<?=SERMA_AMP_TEMPLATE::load_template('post/social-media', ['title' => get_the_title(), 'url' => get_permalink()])?>
<div class="mb-3"></div>
<div class="px-2">
    <?=SERMA_AMP_TEMPLATE::load_template('newsletter', ['referrer_url' => get_permalink()])?>
</div>
<div class="mb-2"></div>
<?php amp_footer()?>
<div class="mb-3"></div>