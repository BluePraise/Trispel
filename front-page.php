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

<section class="portfolio kids">
  <h2 class="title section-title">Kids</h2>
  <ul class="portfolio-list">
    <?php
        $args = array(
          'category_name'    => 'kids',
          'order'           => 'DESC',
          'orderby'         => 'date',
          'nopaging'        => false
          );

      $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <li class="portfolio-item front">
          <a class="portfolio-item-title" href="<?php wp_get_attachment_url( get_post_thumbnail_id() );?>" rel="lightbox">
            <?php the_post_thumbnail(); ?>
          </a>
        </li>
      <?php
        endwhile;
        wp_reset_query();
        wp_reset_postdata();
      ?>
  </ul>
</section>
<section class="portfolio portretten">
  <h2 class="title section-title">Portretten</h2>
  <ul class="portfolio-list">
    <?php
        $args = array(
          'category_name'    => 'portraits',
          'order'           => 'DESC',
          'orderby'         => 'date',
          'nopaging'        => false
          );

            $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <li class="portfolio-item front">
          <a class="portfolio-item-title" href="<?php wp_get_attachment_url( get_post_thumbnail_id() );?>" rel="lightbox">
            <?php the_post_thumbnail(); ?>
          </a>
        </li>
      <?php
        endwhile;
        wp_reset_query();
        wp_reset_postdata();
      ?>
  </ul>
</section>
<section class="portfolio projects">
  <h2 class="title section-title">Projects</h2>
  <ul class="portfolio-list">
    <?php
        $args = array(
          'category_name'    => 'projects',
          'order'           => 'DESC',
          'orderby'         => 'date',
          'nopaging'        => false
          );

            $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <li class="portfolio-item front">
          <a class="portfolio-item-title" href="<?php wp_get_attachment_url( get_post_thumbnail_id() );?>" rel="lightbox">
            <?php the_post_thumbnail(); ?>
          </a>
        </li>
      <?php
        endwhile;
        wp_reset_query();
        wp_reset_postdata();
      ?>
  </ul>
</section>
<?php
// else:

get_footer();
?>

