<div class="container mt-3 mb-2">
    <h2 class="text-center mb-2">Publicaciones relacionadas</h2>
    <?php foreach ($posts as $post): ?>
    <div class="related-posts">
        <article class="post-card mb-2">
            <a href="<?= get_permalink($post->ID) ?>" class="thumbnail">
                <amp-img src='<?= get_the_post_thumbnail_url( $post->ID )?>' width="200px" height="125px"
                    alt="<?= $post->post_title ?>" fallback layout="responsive"></amp-img>
            </a>
            <div class="category_container px-1 mb-3">
                <?php if(!empty($categories = get_the_category($post->ID))) : ?>
                <a class="single-post-category" href="<?= esc_url(get_category_link($categories[0]->term_id)) ?>">
                    <span>
                        <?= $categories[0]->name ?>
                    </span>
                </a>
                <?php endif ?>
            </div>
            <div class="px-1 pb-1">
                <a href="<?= get_permalink($post->ID) ?>">
                    <h3 class="heading-text">
                        <?= $post->post_title ?>
                    </h3>
                </a>
                <p style="font-size: 13px">Por <span class="primary-text"><?= get_the_author($post->ID) ?></span>
                </p>
                <div class="post-excerpt secondary-text">
                    <?= wp_trim_excerpt($post->content) ?>
                </div>
            </div>
            <hr>
            <div class="px-1 pb-1">
                <span class="secondary-text" style="font-size: 13px"><?= get_the_date('', $post->ID) ?></span>
            </div>
        </article>
    </div>
    <?php endforeach ?>
</div>

</div>