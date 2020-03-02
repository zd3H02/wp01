      <footer>
        <?php if (is_single()) : ?>
          <div id="link">
            <?php previous_post_link('前の記事 : %link'); ?>
            <?php next_post_link('次の記事 : %link'); ?>
            <?php comments_template(); ?>
            <?php if (pings_open()): ?>
            <div id="trackback">
             <p>トラックバック URL</p>
             <p><input type="text" value="<?php trackback_url(); ?>"></p>
            </div>
            <?php endif; ?>
        <?php else :  ?>
          <div id="link">
            <?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>
          </div>
        <?php endif; ?>
        <div id="link">
        </div>
      </footer>
    </div><!-- contents -->
    <?php wp_footer() ?>
    <aside>
      <div class="widget widget_search">
        <form method="get" id="searchform" action="">
        <div>
          <div class="widget widget_search">
            <?php get_search_form(); ?>
          </div>
          <?php dynamic_sidebar(); ?>
        </div>
    </aside>
  </main>
  <footer>
    <p>Copyright &copy; ZDRiVE, K.K. All rights reserved.</p>
  </footer>
</div>
</body>
</html>
