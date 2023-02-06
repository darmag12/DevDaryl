<?php get_header(); 

while(have_posts()) {
    the_post();
 ?>
    <!-- all project page container -->
    <div class="all__projectspage">
      <div class="page__header">
        <!-- Insert Main Nav -->
      <?php get_template_part('main-nav'); ?>
      </div>
      <section class="all__projects">
        <div class="projects__heroimg" style="background-image: linear-gradient(to right, #1f2833cc, #1f2833cc),url(<?php echo get_the_post_thumbnail_url(); ?>);">
          <h2><?php the_title(); ?></h2>
          <span class="breadcrums">
            <a href="<?php echo site_url(); ?>">Home</a>
            <strong class="breadcrums__divider">/</strong>
            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
          </span>
        </div>
        <div class="projects__tab">
          <ul>
            <li
              class="projectlink project--active"
              data-id="all"
              data-projectTabLink
            >
              All
            </li>
            <li class="projectlink" data-id="js" data-projectTabLink>
              JavaScript/React
            </li>
            <li class="projectlink" data-id="wordpress" data-projectTabLink>
              WordPress
            </li>
            <li class="projectlink" data-id="php" data-projectTabLink>
              PHP/mySQL
            </li>
            <li class="projectlink" data-id="design" data-projectTabLink>
              Design
            </li>
            <li class="projectlink" data-id="plugins" data-projectTabLink>
              WP Plugins
            </li>
          </ul>
        </div>
        <div class="projects__content">
          <?php
          // Custom query that pulls 3 latest projects
          $latestProjects = new WP_Query(array(
            'posts_per_page' => 6,
            'post_type' => 'project'
          ));
          
          while($latestProjects->have_posts()) {
            $latestProjects->the_post();
            $tags = get_the_tags( $post->ID );
            foreach($tags as $tag){
            ?>
                <div
                id="<?php echo $tag->slug; ?>"
                class="project project--active"
                data-projectTabContent>
                <a href="<?php echo get_permalink(); ?>" title="Link to <?php the_title(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                </a>
                <h6><?php the_title(); ?></h6>
                <span><?php echo get_the_tag_list(); ?></span>
              </div>
          <?php } } wp_reset_postdata(); ?>
        </div>
      </section>
    </div>

<?php } wp_reset_postdata();

get_footer();?>

