<?php get_header();?>

<section class="single-post">  
  <div class="container">
   
    <div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <div class="col-md-9 m-auto">   

		<div class="post-title">
	          <strong><?php the_title();?></strong>
        </div>

      	<div class="post-img">
      		            <?php the_post_thumbnail('singlePostImage', array('class' => 'post_img'));?>

<!-- 	       <img src="<?php echo get_template_directory_uri();?>/assets/img/Layer.png" alt="post img">
 -->      	</div>	      
        
        <div class="post-text">
	          <?php the_content();?>
        </div>            
      </div>
      <?php endwhile;?>
      <?php endif;?>

    </div>
  </div>
</section>

<?php get_footer();?>