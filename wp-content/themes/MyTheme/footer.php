    
    
    
    <!-- site-footer -->
    <footer class="site-footer">
          <!-- footer menu -->         
          <nav class="site-nav">
                <?php
                  $args = array(
                    'theme_location' => 'footer'
                  );
                  wp_nav_menu( $args );  
                ?>
          </nav>
          
          <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
    </footer><!-- /site-footer -->

    </div> <!-- Container end -->
    


  <?php wp_footer();  ?>
</body>
</html>