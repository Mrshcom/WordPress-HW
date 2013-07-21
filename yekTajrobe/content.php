<div id="preloader-container">
<div id="container" style="top:120px">
<?php

$args = array(
  'post_type' => 'page',
  'nopaging' => 'true',
  'orderby' => 'name',
  'order' => 'ASC',
);

 $query = new WP_Query($args);

 if($query->have_posts()){
  while($query->have_posts()){
    // $query->the_post();
    echo '<h1>' . get_the_title() . '</h1>';
    // the_content();

?>
  <div class="widget portfolio web homepage">
  <div class="entry-container span4">




   
    <!-- Portfolio Image -->
    <div class="entry-image" data-narsis="vulvul" data-effect="f" data-theme="gray">
    <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="fancybox">
      <?php the_post_thumbnail('medium'); ?>
    </a>
    </div>   
       
    <div class="entry drop-shadow curved ">
    
      <!-- Portfolio Heading -->
      <h5 class="heading">
      <a href="portfolio-single.html">
        <?php $query->the_post(); ?>
      </a>
      </h5>
      
      <div class="entry-footer">
      <ul>
        <li class="left">گرافیک</li>
        <li class="right no-margin"><div class="icon like"></div> 3</li>
    
      </ul>
      </div>
      <p><?php the_content(); ?></p>
      <p>the_content();</p>
      <p>the_excerpt();</p>
      <p>the_category();</p>
      <p>the_tags();</p>
      <div class="stripes"></div>
    </div>      
  </div>
  </div>
  <?php
      }
  }
  ?>
</div>
</div>
