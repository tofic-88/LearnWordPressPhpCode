<?php 

  get_header();

      if ( $wp_query->have_posts()) :
      
        while ($wp_query->have_posts()) : $wp_query->the_post();?>

        <article class="post">
          <h3><?php the_title();?></h3>
          <p><?php the_content(); ?></p> 
        </article>
        
        <?php  wp_reset_postdata();
       endwhile;

  else :
    echo 'No Content found!';
  endif;

  get_footer();
?>

