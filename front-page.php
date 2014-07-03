<?php
/*
* Template Name: Front Page
*/
get_header();
?>

<section class="about">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      // the_content();
      endwhile;
      mayconnect_edit_link();
      wp_reset_query();
      endif;
    ?>
</section>    
<?php
// else:

get_footer();
?>