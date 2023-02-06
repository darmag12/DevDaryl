<div class="header__top">
        <!-- Logo Starts Here -->
        <a href="<?php echo site_url(); ?>" title="Site Logo">
          <div id="logo" class="logo">
          <?php include get_stylesheet_directory() . "/resources/devdaryl-logo.svg"; ?>
          </div>
        </a>
        <!-- Top Navigation Starts Here -->
        <div class="overlay" data-navContainer>
          <!-- Button to close the overlay navigation -->
          <a href="javascript:void(0)" class="closebtn" data-closeNav
            >&times;</a
          >
          <nav class="topnav overlay-content" data-navItemsContainer>
            <a class="topnav__link" href="<?php echo site_url(); ?>">Home</a>
            <a class="topnav__link" href="/#about">About</a>
            <a class="topnav__link" href="/#projects"
              >Projects</a
            >
            <a class="topnav__link <?php if (get_post_type() == 'post') echo 'topnav__link--active' ?>" href="/#blog">Blog</a>
            <a class="topnav__link" href="/#contact">Contact</a>
            <a class="topnav__link button" href="<?php echo get_theme_file_uri('/resources/Daryl-Magera-Resume.PDF'); ?>" target="_blank">Resume</a>
          </nav>
        </div>
        <div class="openbtn" data-openNav>
          <a href="javascript:void(0)">&#9776;</a>
        </div>
</div>