<?php
  $arg = array(
    'posts_per_page' => 50,
    'category_name' => 'works'
  );
  $posts = get_posts($arg);
 ?>
<?php get_header(); ?>
<section class="page__main">
  <main class="main">
    <div class="main__content">
      <ul class="article-img-list">
        <?php if ($posts): ?>
          <?php foreach ($posts as $post): setup_postdata($post) ?>
            <li class="article-img-list__item">
              <a class="article-img-list__link" href="<?php the_permalink() ?>">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('', array('class' => 'article-img-list__img')) ?>
                <?php endif;?>
              </a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
  </main>
</section>
<?php get_footer(); ?>
