<?php get_header(); ?>
<?php
// ACF VARS
$project_img_one      =  get_field('project_image_one');
$project_img_two      =  get_field('project_image_two');
$project_img_three    =  get_field('project_image_three');
$project_client       =  get_field('project_client');
$project_skills       =  get_field('project_skills');
$project_code_link    =  get_field('project_code_link');
$project_live_link    =  get_field('project_live_link');
?>
 <!-- Single project page container -->
 <div class="single__projectpage">
      <div class="page__header">
        <div class="header__top">
          <!-- Insert Main Nav -->
          <?php get_template_part('main-nav'); ?>
        </div>
      </div>
      <h3 class="section__title section__title--padding">
        <?php the_title(); ?>
      </h3>
      <section class="project__overview">
        <div class="overview__img">
          <img src="<?php echo $project_img_one; ?>" alt="<?php the_title(); ?>"/>
          <img src="<?php echo $project_img_two; ?>" alt="<?php the_title(); ?>"/>
          <img src="<?php echo $project_img_three; ?>" alt="<?php the_title(); ?>"/>
        </div>
        <div class="overview__text">
          <div class="overview__desc">
            <h4>Overview:</h4>
            <?php the_content(); ?>
          </div>
          <div class="overview__client">
            <h4>Client:</h4>
            <p><?php echo $project_client; ?></p>
          </div>
          <div class="overview__skills">
            <h4>Skills:</h4>
            <p><?php echo $project_skills; ?></p>
          </div>
          <div class="overview__links">
            <h4>Links:</h4>
            <p>
              <a href="<?php echo $project_code_link; ?>" target="_blank" title="View the code">View Code <i class="fa-solid fa-code"></i></a>
              <span class="divider">|</span>
              <a href="<?php echo $project_live_link; ?>" target="_blank" title="View the live project">View Live <i class="fa-solid fa-wifi"></i></a>
            </p>
          </div>
        </div>
      </section>
<?php get_footer();?>