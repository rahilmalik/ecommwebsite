<?php
/**
 * Template Name: Home Page Template
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'vw_bakery_before_slider' ); ?>

  <?php if( get_theme_mod( 'vw_bakery_slider_hide_show') != '') { ?>

  <section id="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
      <?php $vw_bakery_slider_pages = array();
        for ( $count = 1; $count <= 4; $count++ ) {
          $mod = intval( get_theme_mod( 'vw_bakery_slider_page' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $vw_bakery_slider_pages[] = $mod;
          }
        }
        if( !empty($vw_bakery_slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $vw_bakery_slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
      ?>     
      <div class="carousel-inner" role="listbox">
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <div class="inner-carousel-conetnt">
                  <h1><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; endwhile; 
        wp_reset_postdata();?>
      </div>
      <?php else : ?>
          <div class="no-postfound"></div>
      <?php endif;
      endif;?>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
        <span class="screen-reader-text"><?php esc_html_e( 'Previous','cafe-coffee-shop' );?></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
        <span class="screen-reader-text"><?php esc_html_e( 'Next','cafe-coffee-shop' );?></span>
      </a>
    </div>  
    <div class="clearfix"></div>
  </section>

  <?php } ?>

  <?php if( get_theme_mod( 'cafe_coffee_shop_about_page') != '') { ?>

  <section id="about-section">
    <div class="container">      
      <div class="row">
        <?php $cafe_coffee_shop_about_pages = array();
          for ( $count = 0; $count <= 0; $count++ ) {
            $mod = absint( get_theme_mod( 'cafe_coffee_shop_about_page' ));
            if ( 'page-none-selected' != $mod ) {
              $cafe_coffee_shop_about_pages[] = $mod;
            }
          }
          if( !empty($cafe_coffee_shop_about_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $cafe_coffee_shop_about_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $count = 0;
              while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-lg-7 col-md-7">
                  <?php if( get_theme_mod( 'cafe_coffee_shop_section_title') != '') { ?>
                    <strong><?php echo esc_html(get_theme_mod('cafe_coffee_shop_section_title',''));?></strong>
                  <?php } ?>
                  <h2><?php the_title(); ?></h2>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_bakery_string_limit_words( $excerpt, esc_attr(get_theme_mod('cafe_coffee_shop_about_excerpt_number','30')))); ?></p>
                  <div class="more-btn">
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('RESERVATION','cafe-coffee-shop'); ?><span class="screen-reader-text"><?php esc_html_e( 'RESERVATION','cafe-coffee-shop' );?></span></a>
                  </div>
                </div>
                <div class="col-lg-5 col-md-5">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php $count++; endwhile; ?>
            <?php else : ?>
                <div class="no-postfound"></div>
            <?php endif;
          endif;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>

  <?php }?>

  <?php if( get_theme_mod( 'vw_bakery_product_settings') != '') { ?>

  <section id="bakery-product">
    <div class="container">
      <?php $vw_bakery_product_page = array();
        $mod = absint( get_theme_mod( 'vw_bakery_product_settings','cafe-coffee-shop'));
        if ( 'page-none-selected' != $mod ) {
          $vw_bakery_product_page[] = $mod;
        }
        if( !empty($vw_bakery_product_page) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $vw_bakery_product_page,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $count = 0;
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <h2 class="bake-sec-title"><?php the_title(); ?></h2>
              <?php the_content(); ?>
            <?php $count++; endwhile; ?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
        endif;
        wp_reset_postdata()
      ?>
    </div>
  </section>

  <?php }?>

  <div class="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>