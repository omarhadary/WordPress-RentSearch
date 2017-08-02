<?php 

get_header();
    

    
if(have_posts()) :
    while(have_posts()): the_post(); ?>
        
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <small>Posted on: <?php the_time('F j, Y'); ?>, at <?php the_time('g:i a'); ?></small>
    <?php the_content(); ?>

    <?php endwhile;
        
    else :
        echo '<p>No content found</p>';
    
    endif;

get_footer(); 

?>