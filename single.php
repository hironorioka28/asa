<?php
$previous_post = get_previous_post(true);
$next_post = get_next_post(true);
?>

<?php get_header(); ?>
<section class="page__main">
  <article class="article">
    <? if (have_posts()): while(have_posts()): the_post(); ?>
      <h1 class="article__title">
        <a class="article__titleLink" href="<? the_permalink(); ?>"><? the_title(); ?></a>
      </h1>
      <div class="article__content">
        <time class="article__date" datetime="<? the_time('Y-m-dTH:i'); ?>"><? the_time('Y年m月d日'); ?></time>
      </div>
      <div class="article__content">
        <div class="article-body">
          <p><? the_content('Read more'); ?></p>
        </div>
      </div>
    <? endwhile; endif; ?>
    <div class="article__content">
      <div class="article__prevNext">
        <? if (!empty($previous_post)): ?>
          <a class="article__prev" href="<? echo get_permalink($previous_post->ID); ?>">Prev</a>
        <?php endif; ?>
        <?php if (!empty($next_post)): ?>
          <a class="article__next" href="<? echo get_permalink($next_post->ID); ?>">Next</a>
        <?php endif; ?>
      </div>
    </div>
  </article>
</section>
<?php get_footer(); ?>
