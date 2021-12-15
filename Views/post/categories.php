<?php foreach($categories as $category) : ?>
<a class="single-post-category" href="<?= esc_url( get_category_link( $categories[0]->term_id ) ) ?>">
    <span>
        <?= $category->name ?>
    </span>
</a>
<?php endforeach ?>