<?php
    /** 
    *
    *@package mytheme_scratch_theme
    */

    get_header();
?>

    <?php
        if(have_posts()):
            /*Start the loop*/
            while(have_posts()) : the_post();?>

                <div id="post-<?php the_ID();?>">
                    <h2><?php the_title();?></h2>
                    <div class="post-excerpt"><?php the_excerpt();?></div>
                </div>
    <?php
            endwhile;
        endif;
    ?>
<?php get_footer();?>