  <?php get_header(); ?>

  <article class="content px-3 py-5 p-md-5">

  </article>

  <?php

  if (have_posts()) {
    while (have_posts()) {
      the_post();
      the_content();
    }
  };

  ?>


  </div>

  <?php get_footer(); ?>