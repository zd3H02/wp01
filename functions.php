<?php
register_nav_menus();

register_sidebar(
     array(
        'before_widget' => '<section class="widget">',
        'after_widget' => '</nav></section>',
        'after_title' => '</h2><nav>'
    )
);
