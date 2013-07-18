<div id="preloader-container">
<div id="container" style="top:120px">
  <?php
          while(have_posts()){
            the_post();
  ?>
  <div class="widget portfolio web homepage">
    <div class="entry-container span4">

      <?php if(has_post_thumbnail()){ ?>
      <!-- Portfolio Image -->
      <div class="entry-image" data-narsis="vulvul" data-effect="i" data-theme="gray">
        <a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" class="fancybox">
          <?php the_post_thumbnail('medium'); ?>
        </a>
      </div>
      <?php } 
            else {
      ?> 
        <div class="entry-image" data-narsis="vulvul" data-effect="i" data-theme="gray">
          <a href="images/playmakers_ronal.jpg" class="fancybox">
            <!-- <span class="entry-image-overlay"></span> -->
            <img src="images/playmakers_ronal.jpg" alt="" />
          </a>
          </div>
      <?php } ?>    
           
        <div class="entry drop-shadow curved ">
        
          <!-- Portfolio Heading -->
          <h5 class="heading">
            <a href="portfolio-single.html">
              <?php the_title(); ?>
            </a>
          </h5>
          
          <div class="entry-footer">
            <ul>
              <li class="left">گرافیک</li>
              <li class="right no-margin"><div class="icon like"></div> 3</li>
        
            </ul>
          </div>
            <p><?php the_excerpt() ?></p>
          <div class="stripes"></div>
      </div>      
    </div>
  </div>
  <?php
          }
  ?>
</div>
</div>
