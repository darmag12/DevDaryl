<?php get_header(); ?>
    <!-- all blogs container -->
    <div class="all__blogspage">
      <div class="page__header">
        <!-- Insert Main Nav -->
      <?php get_template_part('main-nav'); ?>
      </div>
      <section class="all__blogs">
        <div class="blogs__heroimg" style="background-image: linear-gradient(to right, #1f2833cc, #1f2833cc),url(<?php echo get_theme_file_uri('/resources/hero-blog.jpg'); ?>);">
          <h2>Blogs</h2>
          <span class="breadcrums">
            <a href="<?php echo site_url(); ?>">Home</a>
            <strong class="breadcrums__divider">/</strong>
            <a href="<?php echo site_url('/blog'); ?>">Blogs</a>
          </span>
        </div>
        <div class="post__container">
          <div class="post__items">
          <?php 
          while(have_posts()) {
            the_post(); ?>
          <article class="post__item">
              <img class="post__image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
              <span class="post__category"><?php echo get_the_category_list(','); ?></span>
              <h4 class="post__headline"><a href="<?php the_permalink(); ?>" title="Link to individual blog post"><?php the_title(); ?></a></h4>
              <p><?php echo wp_trim_words(get_the_content(), 50); ?></p>
              <p class="post__author">Posted by: <?php the_author_posts_link(); ?></p>
              <div class="post__bottom">
                <div>
                  <span class="post__date"><?php the_time('F jS, Y'); ?></span>
                  <span class="divider divider--font">/</span>
                  <a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>"><span class="post__commentcount"><?php echo get_comments_number(); ?> Comments</span></a>
              </div>
              <button class="readmore"><span>&mdash;</span><a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>">Read More</a></button>
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

