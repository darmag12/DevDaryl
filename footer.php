<!-- FOOTER STARTS HERE -->
 <footer id="contact" class="footer">
      <div class="footer__top">
        <!-- Footer Logo Starts Here -->
        <a href="<?php echo site_url(); ?>" title="Site Logo">
          <div id="logo" class="logo">
          <?php include get_stylesheet_directory() . "/resources/devdaryl-logo.svg"; ?>
          </div>
        </a>
      </div>
      <div class="footer__middle">
        <a class="footer__tel" href="tel:+17574020354"
           title="Link to Phone Number"
          ><i class="fa-solid fa-phone"></i> <span>(757) 402-0354</span></a
        >
        <a class="footer__email" href="mailto:Mageradaryl12@gmail.com"
           title="Link to Email"
          ><i class="fa-solid fa-envelope"></i>
          <span>Mageradaryl12@gmail.com</span></a
        >
        <a class="footer__location"
           title="Location not linked"
          ><i class="fa-solid fa-location-dot"></i> <span>Orlando FL</span></a
        >
      </div>
      <hr class="footer__sepline" />
      <div class="footer__bottom">
        <div class="footer__socials">
          <a href="https://github.com/darmag12" target="_blank" title="Link to githib"><i class="fa-brands fa-github"></i></a>
          <a href="https://www.linkedin.com/in/daryl-magera-957140164/" target="_blank" title="Link to linkedin"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://www.codewars.com/users/darmag12" target="_blank" title="Link to codewars"><i class="fa-solid fa-c"></i></a>
          <span class="footer__copyright"
            >Copyright &copy; <?php the_time('Y'); ?> -
            <strong class="footer__copyright--coloredlink"
              ><a href="mailto:mageradaryl12@gmail.com" title="Link to Email">Daryl Magera</a></strong
            ></span
          >
        </div>
      </div>
    </footer>
    <!-- FOOTER ENDS HERE -->
    <?php wp_footer(); ?>
  </body>
</html>