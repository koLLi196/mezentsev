<?php get_header(); ?>

<main class="main_page">
    <section class="page_item">
        <?php while (have_posts()) : the_post(); ?>
        <div class="page_item_content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="page_item_title"><?php the_title(); ?></h1>
        

                <div class="content-wrapper">
                    <?php the_content(); ?>
                </div>
        </div>
        <?php endwhile; ?>
    </section>
</main>

<?php get_footer(); ?>