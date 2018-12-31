<?php
$previous_post = get_previous_post(true);
$next_post = get_next_post(true);
?>

<?php get_header(); ?>
<section class="page__main">
  <article class="article">
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
      <h1 class="article__title">
        <a class="article__titleLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h1>
      <div class="article__content">
        <time class="article__date" datetime="<?php the_time('Y-m-dTH:i'); ?>"><?php the_time('Y年m月d日'); ?></time>
      </div>
      <div class="article__content">
        <div class="article-body">
          <p><?php the_content('Read more'); ?></p>
        </div>
      </div>
    <?php endwhile; endif; ?>
    <div class="article__content">
      <div class="prev-next">
        <?php if (!empty($previous_post)): ?>
          <a class="prev-next__prev" href="<?php echo get_permalink($previous_post->ID); ?>">Prev</a>
        <?php else: ?>
          <div class="prev-next__empty"></div>
        <?php endif; ?>
        <?php if (!empty($next_post)): ?>
          <a class="prev-next__next" href="<?php echo get_permalink($next_post->ID); ?>">Next</a>
        <?php else: ?>
          <div class="prev-next__empty"></div>
        <?php endif; ?>
      </div>
    </div>
  </article>
</section>
<?php get_footer(); ?>
