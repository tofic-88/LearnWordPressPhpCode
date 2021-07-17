<?php 
  get_header();
  $wp_query = new WP_Query('posts_per_page=5&orderby=title');
                      if ( $wp_query->have_posts()) :
                        while ($wp_query->have_posts()) : $wp_query->the_post();?>
                              <article class="post">
                                <h2><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h2>
                                <p><?php the_content(); ?></p> 
                              </article>
                        <?php  wp_reset_postdata();
                      endwhile;
                  else :
                    echo 'No Content found!';
                  endif; 
  get_footer();
?>


