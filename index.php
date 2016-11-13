<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
<div class="blog___wrapper">
  <header class="blog___header">
    <h1 class="entry-title">Blog</h1>
    <p><?php the_date(); ?></p>
    <div class="entry-meta">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
    </div><!-- .entry-meta -->
  </header>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="blog___posts">
          <h2><?php the_title(); ?></h2>
          <?php $blogDate = get_the_date(); ?>
          <?php $commentsNumber = get_comments_number(); ?>
          <p class="blog___post--info">
            <p>Posted: <?php echo $blogDate; ?></p>
            <p><a class="blog--comments" href="<?php comments_link(); ?>">Comments: <?php echo $commentsNumber; ?></a></p>
          </p>
          <p>
            <?php echo the_excerpt(100); ?>
          </p>
        </div>
      <?php endwhile; // end the loop?>
      <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>

<?php get_footer(); ?>
</div>