<?php get_header(); ?>
<section class="page__main">
  <main class="main">
    <div class="main__content">
      <ul class="article-list">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php if (is_category('news')): ?>
              <li class="article-list__item">
                <a class="article-list__link" href="<?php the_permalink() ?>">
                  <p class="article-list__date"><?php the_time('Y年m月d日') ?></p>
                  <p class="article-list__title"><?php the_title() ?></p>
                </a>
              </li>
            <?php endif; ?>
            <?php if (is_category('works')): ?>
              <li class="article-list__item">
                <a class="article-list__link article-list__link--hasImg" href="<?php the_permalink() ?>">
                  <div class="article-list__imgWrapper">
                    <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail('', array('class' => 'article-list__img')) ?>
                    <?php endif;?>
                  </div>
                  <div class="article-list__titleWrapper">
                    <p class="article-list__title"><?php the_title() ?></p>
                    <p class="article-list__client">
                      <?php
                        $cat_client = get_category_by_slug('client');
                        $cat_id_client = intval($cat_client->cat_ID);
                        foreach (get_the_category() as $child_cat) {
                          if (cat_is_ancestor_of($cat_id_client, $child_cat)) {
                            echo $child_cat->cat_name;
                          }
                        }
                      ?>
                    </p>
                    <p class="article-list__date article-list__date--type-works"><?php the_time('Y年m月d日') ?></p>
                  </div>
                </a>
              </li>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php else : ?>
          <li class="article-list__item">記事がありません</li>
        <?php endif; ?>
      </ul>
    </div>
    <div class="main__content">
      <?php
        $args = array(
          'format' => '?paged=%#%',
          'prev_text' => '',
          'next_text' => '',
        );
        the_posts_pagination($args);
      ?>
    </div>
  </main>
</section>
<?php get_footer(); ?>
