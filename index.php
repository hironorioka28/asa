<?php
  $arg = array(
    'category_name' => 'works'
  );
  $posts = get_posts($arg);
 ?>
<?php get_header(); ?>
<section class="page__main">
  <main class="main">
    <div class="main__content">
      <ul class="article-img-list">
        <? if ($posts): ?>
          <? foreach ($posts as $post): setup_postdata($post) ?>
            <li class="article-img-list__item">
              <a class="article-img-list__link" href="<? the_permalink() ?>">
                <? if (has_post_thumbnail()): ?>
                  <? the_post_thumbnail('', array('class' => 'article-img-list__img')) ?>
                <? endif;?>
              </a>
            </li>
          <? endforeach; ?>
        <? endif; ?>
      </ul>
    </div>
  </main>
</section>
<?php get_footer(); ?>
