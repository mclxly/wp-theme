<p class="byline author vcard">
  <time class="published" datetime="<?php echo get_the_time('c'); ?>">
  <?php echo get_the_date(); ?>
  </time>
  <?php echo __('By', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a>
  <span style="tag-list">
  <?php the_terms( $post->ID, 'category', '标签: ', ' / ' ); ?>
  </span>
  moment-with-locales.min.js
</p>
