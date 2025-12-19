<?php
// Подключает шапку сайта 
get_header();
?>

<!-- Основной контейнер страницы -->
<main class="main">

    <!-- Основной контентный блок -->
    <section class="content">
        <?php
        // Проверяем, есть ли записи для отображения 
        if (have_posts()) :
            // Проходим по всем доступным записям
            while (have_posts()) : the_post();?>
             <!-- Карточка записи -->
        <div class="news-card">
            <h2 class="news-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="title">
        <p class="date">Опубликовано <?php the_time('F jS, Y'); ?></p>
        <p class="autor">Автор: <?php the_author(); ?>.</p>
        <p class="categ">Категория: <?php the_category(', '); ?></p>
        </div>
         <?php the_excerpt(); ?>
        </div>
       
          <?  endwhile;
        else :
            ?>
            <p>Записи отсутствуют.</p>
        <?php endif; ?>

       
    </section>

    <!-- Боковая панель с категориями -->
    <section class="categories">
        <h2 class="categories_title">Категории</h2>

        <!-- Список всех категорий сайта -->
        <ul class="categories_list">
            <?php
            // Параметры для получения списка категорий
            $args = array(
                'orderby'     => 'name',     // сортировка по названию
                'order'       => 'ASC',      // по возрастанию (A–Z)
                'hide_empty'  => 0           // показывать даже пустые категории
            );

            // Получаем массив всех категорий
            $categories = get_categories($args);

            // Перебираем категории и выводим каждую как ссылку
            foreach ($categories as $category) {
                echo '<li>
                        <a href="' . esc_url(get_category_link($category->term_id)) . '">
                            ' . esc_html($category->name) . '
                        </a>
                      </li>';
            }
            ?>
        </ul>
    </section>
</main>

<?php
// Подключает подвал сайта
get_footer();
?>