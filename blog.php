<?php
/*
Template Name: Blog
*/

$args = array(
  'post_type' => 'post',
  'paged' => $paged,
);
query_posts( $args );
?>

<?php get_header(); ?>
<section class="page__main">
  <main class="main">
    <div class="main__content">
      <ul class="article-list">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php
              $category = get_the_category();
              $cat_name = $category[0]->cat_name;
            ?>
            <li class="article-list__item">
              <a class="article-list__link" href="<? the_permalink() ?>">
                <p class="article-list__date"><?php the_time('Y年m月d日') ?></p>
                <p class="article-list__title"><?php the_title() ?></p>
                <p class="article-list__category"><?php echo $cat_name ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <li class="article-list__item">
            <h3>記事がありません</h3>
            <p>表示する記事はありませんでした</p>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </main>
</section>
<?php get_footer(); ?>
