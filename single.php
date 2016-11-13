<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="blog___wrapper">
  <header class="blog___header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <p><?php the_date(); ?></p>
        <div class="entry-meta">
            <?php wp_nav_menu( array(
              'container' => false,
              'theme_location' => 'primary'
            )); ?>
        </div><!-- .entry-meta -->
  </header>
  <section class="blog">
      <div class="blog___content">
          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
              <?php the_content(); ?>
              <?php wp_link_pages(array(
                'before' => '<div class="page-link"> Pages: ',
                'after' => '</div>'
              )); ?>
            </div><!-- .entry-content -->
          </div><!-- #post-## -->
          <div id="nav-below" class="navigation">
            <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
            <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
          </div><!-- #nav-below -->

          <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>