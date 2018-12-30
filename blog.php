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
      <ul class="article-img-list">
        <? if (have_posts()) : ?>
          <? while (have_posts()) : the_post(); ?>
            <li class="article-img-list__item">
              <a class="article-img-list__link" href="<? the_permalink() ?>">
                <p><? the_title() ?></p>
                <p><? the_time('Y/m/j') ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <li class="blogList__item">
            <h3>記事がありません</h3>
            <p>表示する記事はありませんでした</p>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </main>
</section>
<?php get_footer(); ?>
