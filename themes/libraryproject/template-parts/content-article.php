
<main class="container mt-3" id="main">
    <h1 class="text-center mb-4">
        <?php echo get_the_title(); ?>
    </h1>

    <span class="post-date"><i class="bi bi-calendar me-2"></i><?php the_date(); ?></span>
    <br>
    <?php the_tags('<span class="post-tag me-2"><i class="bi bi-tag me-1"></i>', '</span><span class="post-tag me-2"><i class="bi bi-tag me-1"></i>', '</span>'); ?>
    <br>
    <?php
        $categories = get_categories();
        foreach($categories as $category) {
            echo '<span class="post-category me-2"><i class="bi bi-bookmark me-1"></i><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></span>';
        }
    ?>
    <hr>

    <div class="article-post-content">

        <?php the_content(); ?>

    </div>
</main>
