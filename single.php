<?php get_header(); ?>
    <!-- all blogs container -->
    <div class="all__blogspage">
      <div class="page__header">
        <!-- Insert Main Nav -->
      <?php get_template_part('main-nav'); ?>
      </div>
      <section class="all__blogs">
        <div class="blogs__heroimg" style="background-image: linear-gradient(to right, #1f2833cc, #1f2833cc),url(<?php echo get_theme_file_uri('/resources/hero-blog.jpg'); ?>);">
          <h2><?php the_title(); ?></h2>
          <span class="breadcrums">
            <a href="<?php echo site_url('/blog'); ?>" title="Link to blog page">Blog Home</a>
            <strong class="breadcrums__divider">/</strong>
            <?php while(have_posts()) {
            the_post(); ?>
            <span href="<?php the_permalink(); ?>">Author: <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?></span>
            <?php } ?>
          </span>
        </div>
        <div class="post__container">
          <div class="post__items">
          <?php 
          while(have_posts()) {
            the_post(); ?>
          <article class="post__item post__item--noborder">
              <img class="post__image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
              <span class="post__category"><?php echo get_the_category_list(','); ?></span>
              <p class="post__author">Posted by: <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?></p>
              <h4 class="post__headline"><?php the_title(); ?></h4>
              <?php the_content(); ?>
              <div class="post__comments">
              <?php comments_template(); ?>
              </div>
          </article>
          <?php } wp_reset_postdata();
          ?>
          </div>
        <div class="post__sidebars">
          <div class="widget__recentpostcontainer">
          <?php dynamic_sidebar( 'recentposts' ); ?>
          </div>
          <div class="widget__postcategoriescontainer">
          <?php dynamic_sidebar( 'postcategories' ); ?>
          </div>
        </div>
        <div class="pagination__container">
            <?php echo paginate_links(); ?>
        </div>
        </div>
      </section>
    </div>


<?php get_footer();?>

