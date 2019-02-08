<?php get_header();?>

 

        <header>
          <!-- here’s the avatar -->
          <a target="_blank" href="#">
            
            <img src="<?php echo get_template_directory_uri() . '/iwatch4.png'; ?>" alt="">
          </a>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <!-- it of a bio; who are you? -->
            <div class="profile-bio">
        
                <p><?php the_content(); ?></p>   

            </div>
            <div class="file-upload">
                <button class="file-upload__label file-upload__input" type="submit"></button>
            </div>
            
            
            <?php endwhile; else :?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
      
          
               
        </header>




<?php get_footer(); ?>
