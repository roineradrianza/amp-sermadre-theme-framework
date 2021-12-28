<?php require SERMA_AMP_THEME . '/Classes/Template.php'?>

<?php amp_header()?>
<?php amp_title()?>
<?php amp_content()?>
<?=SERMA_AMP_TEMPLATE::load_template('post/author-profile', [
        'avatar' => get_avatar($post->post_author, 96, '', '', 
            [
                'class' => 'author-avatar'
            ]
        ),
        'meta' => [
            'ID' => $post->post_author,
            'first_name' => get_the_author_meta('first_name', $post->post_author),
            'last_name' => get_the_author_meta('last_name', $post->post_author),
            'bio' => get_the_author_meta('description', $post->post_author),
            'serma_job_title' => get_the_author_meta('serma_job_title', $post->post_author),
        ]
    ]
)?>
<div class="mt-3">
    <?php amp_tags_list(' ')?>
</div>
<?=SERMA_AMP_TEMPLATE::load_template('related-posts', ['posts' => serma_related_posts()])?>
<?=SERMA_AMP_TEMPLATE::load_template('post/social-media', ['title' => get_the_title(), 'url' => get_permalink()])?>
<div class="mb-3"></div>
<?php if( function_exists('the_ad_placement') ) { the_ad_placement('depues-de-publicaciones-relacionadas'); } ?>
<?php amp_footer()?>
<div class="mb-3"></div>