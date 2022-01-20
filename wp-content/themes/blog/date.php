<?php get_header(); ?>

<div class="container wrapper">
  <main class="main">
    <h1 class="main__page-title">
      <?php echo get_query_var('year').'年'.get_query_var('monthnum').'月'; ?>
    </h1>

    <?php
      if (have_posts()):
        get_template_part('loop');

        if (function_exists("pagination")) {
          pagination($wp_query->max_num_pages);
        }
      endif;
    ?>
  </main>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>