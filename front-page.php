<?php get_header();?>
<header id="particles-js" class="container header">
     <!-- Insert Main Nav -->
      <?php get_template_part('main-nav'); ?>
      <!-- Header's Middle Content Starts Here -->
      <div class="header__middle">
        <div class="header__text">
          <span class="header__text--smallcolored">Hi, my name is</span><br />
          <h1 class="header__text--white">Daryl Magera.</h1>
          <br />
          <span class="header__text--greyedout"
            >I build things for <nobr>the web.</nobr></span
          ><br />
          <p>
            I’m a Full-Stack Developer specializing in building exceptional
            <nobr>digital experiences.</nobr><br />
            Currently, I’m focused on <nobr>building accessible,</nobr>
            <nobr>human-centered products</nobr
            ><span class="no--break"></span>(while offering graphics support)
            <nobr
              >at
              <a
                class="header__text--coloredlink"
                href="https://www.global-5.com/"
                target="_blank"
                title="Link to the company I'm currently working for"
                >Global 5</a
              >.</nobr
            >
          </p>
        </div>
        <div class="header__img">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Daryl's Photo" />
        </div>
      </div>
      <div class="header__bottom">
        <div class="header__socials">
          <a href="https://github.com/darmag12" target="_blank" title="Link to my github"><i class="fa-brands fa-github"></i></a>
          <a href="https://www.linkedin.com/in/daryl-magera-957140164/" target="_blank" title="Link to my linkedin"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://www.codewars.com/users/darmag12" target="_blank" title="Link to codewars"><i class="fa-solid fa-c"></i></a>
          <span class="line"></span>
        </div>
        <a href="#about" title="Takes you to the about section">
          <div class="header__scroll">
            <div class="header__scroll--top"></div>
            <div class="header__scroll--bottom"></div>
          </div>
        </a>
      </div>
    </header>
    <!--BEGIN OF ABOUT BG CONTAINER -->
    <div class="bg__about">
      <!-- ABOUT SECTION STARTS HERE -->
      <h2 class="section__title">&#60; ABOUT &#8260; &#62;</h2>
      <section id="about" class="about">
        <div class="about__metext">
          <p>
          A versatile programmer and web developer, I deliver digital products and services that consistently exceed clients’ expectations. My current responsibilities include front-end user experience (UX), maintaining content management systems (WordPress), both server-side and client-side <nobr>application development,</nobr> and database management. I'm adept at testing and debugging; cross-platform compatibility and optimization; developing application programming interfaces (APIs) and RESTful services; search engine optimization; and ADA/508 compliance. I also provide graphic design support for Global-5’s public outreach efforts. When I'm not busy learning the latest programming techniques, I enjoy watching and <nobr>playing soccer.</nobr>
          </p>
          <div class="about__skills">
            <i class="fa-brands fa-html5"></i>
            <i class="fa-brands fa-css3"></i>
            <i class="fa-brands fa-js"></i>
            <i class="fa-brands fa-php"></i>
            <i class="fa-brands fa-react"></i>
            <nobr>
              <i class="fa-brands fa-bootstrap"></i>
              <i class="fa-brands fa-wordpress-simple"></i>
            </nobr>
          </div>
          <div class="about__resdownload">
            <a class="button button--secondary" href="<?php echo get_theme_file_uri('/resources/Daryl-Magera-Resume.PDF'); ?>" title="Download Resume" target="_blank">Download Resume</a>
          </div>
        </div>
        <div class="about__experience">
          <div class="about__tab">
            <button class="tablink active" data-id="global5" data-tablink>
              08/2021 - Current
            </button>
            <button class="tablink" data-id="ascend" data-tablink>
              04/2021 - 08/2021
            </button>
            <button class="tablink" data-id="markentum" data-tablink>
              03/2020 - 04/2021
            </button>
          </div>
          <div class="about__tabcontent">
            <!-- Expreience--01 -->
            <div id="global5" class="tabcontent active" data-tabcontent>
              <h3>Full-Stack Developer | Global 5</h3>
              <ul>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Manage both
                  back-end and front-end aspects of <nobr>development process.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Building
                  projects in PHP, MySQL, JavaScript and, custom <nobr>WordPress
                  themes.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Built a
                  downloadable WordPress plugin called <nobr>Apogee Menu.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Programming
                  applications and tools using object oriented languages with
                  goals of code abstraction, <nobr>stability and reuse.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Built the trip
                  planner for I-4 Express lanes, using vanilla JavaScript,
                  Webpack for bundling, Babel for backwards compatibility, and
                  <nobr>Google Maps API.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Picked up some
                  illustrator and, InDesign skills by drawing detour maps for
                  upcoming closures along the I-4, and graphical
                  handouts<nobr> (Graphics Support).</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Create Monthly
                  <nobr>newsletter templates.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Expert at
                  googling (:
                </li>
              </ul>
            </div>
            <!-- Expreience--02 -->
            <div id="ascend" class="tabcontent" data-tabcontent>
              <h3>Front End Developer | Ascend Inbound Marketing</h3>
              <ul>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Worked with
                  product designers and product managers to design user
                  interactions <nobr>in applications.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Worked on a
                  custom Wordpress theme that will later be converted into a
                  <nobr>hubspot theme.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Used a
                  templating language <nobr>called Hubl.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Contributed to
                  building modules and made continuous improvements on the
                  <nobr>parent theme.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Utilized Hubdb
                  to store data (not sensitive) and pulled the data into <nobr>a
                  project.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Certified in
                  Hubspot academy for the <nobr>development course.</nobr>
                </li>
              </ul>
            </div>
            <!-- Expreience--03 -->
            <div id="markentum" class="tabcontent" data-tabcontent>
              <h3>Jr Web Developer | Markentum</h3>
              <ul>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Maintained and
                  help build custom themes on one of the biggest CMS platforms
                  <nobr>called WordPress.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Pulled files
                  from the server to local development <nobr>using FTP.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Built pages
                  using Html, CSS, Bootstrap, Javascript, <nobr>and PHP.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Utilized ACF
                  <nobr>(Advanced Custom Fields).</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Created custom
                  <nobr>post types.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Optimized and
                  resized images <nobr>using Photoshop.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Added newly
                  requested features <nobr>to websites.</nobr>
                </li>
                <li>
                  <span class="arrow">&#10146;</span>&nbsp;&nbsp;Responsible for
                  <nobr>monthly backups.</nobr>
                </li>
              </ul>
            </div>
            <!-- End of Expreience -->
          </div>
        </div>
      </section>
    </div>
    <!--END OF ABOUT BG CONTAINER -->
    <!--BEGIN OF PROJECTS BG CONTAINER -->
    <div class="bg__projects">
      <!-- PROJECTS SECTION STARTS HERE -->
      <h2 class="section__title">&#60; Projects &#8260; &#62;</h2>
      <p class="section__desc">Latest Projects.</p>
      <section id="projects" class="projects">
        <?php
        // Custom query that pulls 3 latest projects
          $latestProjects = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'project'
          ));
          
          while($latestProjects->have_posts()) {
            $latestProjects->the_post(); ?>
              <div class="project__img">
              <a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>">
                <h5 class="project__title"><?php the_title(); ?></h5>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
              </a>
              </div>
          <?php } wp_reset_postdata(); ?>
        <div class="projects__browsemore">
          <a
            class="button button--primary"
            href="<?php echo site_url('/projects'); ?>"
            title="Link to all the projects"
            >Browse More</a
          >
        </div>
      </section>
    </div>
    <!--END OF PROJECTS BG CONTAINER -->
    <!--BEGIN OF BLOG BG CONTAINER -->
    <div class="bg__blog">
      <!-- BLOGS SECTION STARTS HERE -->
      <h2 class="section__title">&#60; Blog &#8260; &#62;</h2>
      <p class="section__desc section__desc--dark">Latest Blog Post.</p>
      <section id="blog" class="blog">
        <?php
        // Custom query that pulls 3 latest blog posts
        $latestPosts = new WP_Query(array(
          'posts_per_page' => 2
        ));

        while($latestPosts->have_posts()) {
          $latestPosts->the_post(); ?>
         <div class="blog__post">
          <div class="postimg__container">
            <a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>">
              <img class="post__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
            </a>
          </div>
          <div class="post__content">
            <span class="post__date"><?php the_time('F jS, Y'); ?> | <?php echo get_the_category_list(','); ?></span>
            <h5 class="post__title"><?php the_title(); ?></h5>
            <p class="post__desc">
              <?php echo wp_trim_words(get_the_content(), 18); ?>
            </p>
            <a class="post__readmore" href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>">Read More</a>
          </div>
        </div>
        <?php } wp_reset_postdata(); ?>
        <div class="blog__moreblogs">
          <a href="<?php echo site_url('/blog'); ?>" class="button button--secondary" title="Link to all the blogs">More Blogs</a>
        </div>
      </section>
    </div>
    <!--END OF BLOG BG CONTAINER -->
<?php get_footer(); ?>