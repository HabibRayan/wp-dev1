<?php get_header();?>

<main role="main">
  <!-- hero section  -->
  <section class="hero-section">
    <div class="container-fluid hero-bg">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-8 text-center">
          <div class="content">
            <div class="sub-title">
              <h2>Gift Of Sight</h2>
            </div>
            <div class="title">
              <h1>Art and photography <br> competition</h1>
            </div>
            <div class="time">
              <h3>JUNE 30, 7:00 PM EDT</h3>
            </div>
            <div class="text">
              <span>Online Event</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- hero section end  -->

  <!-- about  -->
  <section class="about text-center">
    <div class="container">
      <h1>About The Competition</h1>
      <strong>Suport The cause with  chance to win a cash prize</strong>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely. Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely</p>
      <div class="about-btn">
        <a href="#" class="btn btn-success my-2 px-5">Read More</a
      </div>
   
    </div>
  </section>
<!-- about end  -->

<!-- form section  -->
<section class="form-section">
  <div class="container">
    <div class="title">
      <h3>Choose Your Entry</h3>
    </div>
    <div class="form">
      <form method="POST">
        <div class="form-group">         
          <select class="form-control " id="art_entry" name="art_entry">
            <option value="1">option one</option>
            <option value="2">option two</option>
            <option value="3">option three</option>            
          </select>
        </div>

        <div class="form-group">          
          <input type="text" class="form-control" id="pieces" name="pieces" placeholder="5 Pieces">
        </div>
        <div class="form-group">         
          <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name">
        </div>
        <div class="form-group">          
          <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
        </div>

        <div class="form-group text-white mb-0">
          <span>Optional</span>
        </div>
        <div class="form-group">          
          <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Postal Code">
        </div>

        <div class="form-group">         
          <input type="text" class="form-control" id="extra_donation" name="extra_donation" placeholder="Extra Donation Value">
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="photo_file" name="photo_file" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          </div>
        </div>
        <div class="form-group">
          <input type="submit"  class="btn form-btn" name="insert" value="Submit">
        </div>
      </form>
      <?php
        if (isset($_POST['insert'])) {
          $artName = $_POST['art_entry'];
          $pieces = $_POST['pieces'];
          $fullName = $_POST['full_name'];
          $email = $_POST['email'];
          $postCode = $_POST['postal_code'];
          $extraDonation = $_POST['extra_donation'];
          $photo = $_POST['photo_file'];

          global $wpdb;

          $sql = $wpdb->insert('entry_files', array('art_entry' => $artName , 'pieces' => $pieces , 'full_name' => $fullName , 'email' => $email, 'postal_code' => $postCode, 'extra_donation' =>$extraDonation, 'photo_file' => $photo ));
          if ($sql == true) {
            echo "<script>alert('Data Inserted')</script>";
          }else {
            echo "<script>alert('Database Errors')</script>";
          }
        }

       ;?>
    
    </div>
  </div>
</section>
<!-- form section end  -->

<!-- recent new  -->
<section class="recent-news bg-light">  
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title">
          <span>Recent </span><b>News</b>
        </div>
      </div>
    </div>
    <div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <div class="post-img">
            <?php the_post_thumbnail('postImage', array('class' => 'post_img'));?>
          <!--   <a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/Layer.png" alt="post img"></a> -->
          </div>
          <div class="card-body pt-0">
            <div class="post-title">
              <a href="<?php the_permalink();?>"><strong><?php the_title();?></strong></a>
            </div>
            <div class="post-text">
              <?php the_excerpt(200);?>
            </div>              
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="<?php the_permalink();?>" class="btn btn-sm btn-outline-secondary">Rean More</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php endwhile; else : ?>
     <p><?php esc_html_e('Sorry, No post Matched Your Url');?></p>
      <?php endif;?>

    </div>
  </div>
</section>
</main>

<?php get_footer();?>