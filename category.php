<?php get_header(); ?>
<section class="page__main">
  <main class="main">
    <div class="main__content">
      <ul class="article-list">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="article-list__item">
              <a class="article-list__link" href="<?php the_permalink() ?>">
                <p class="article-list__date"><?php the_time('Y年m月d日') ?></p>
                <p class="article-list__title"><?php the_title() ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <li class="article-list__item">記事がありません</li>
        <?php endif; ?>
      </ul>
    </div>
  </main>
</section>
<?php get_footer(); ?>
