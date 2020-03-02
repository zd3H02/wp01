
<?php get_header() ?>
<p>aaaa</p>
  <!-- <?php var_dump($wp_query); ?> -->

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="post">
        <h2>
          <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        </h2>
        <p class="postmeta">
          Posted in <?php the_category(', ') ?> | <?= get_the_date() ?> | <a href="<?php get_comments_link() ?>"><?= get_comments_number(); ?> comments</a>
        </p>
        <div class="entry">
          <p><?php the_content("（続きを読む...）"); ?></p>
        </div>
      </article><!-- post -->
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer() ?>
