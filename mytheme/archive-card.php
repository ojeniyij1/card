<?php
get_header();
?>

<section>
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="card">
        <div class="card-img">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'medium', array( 'class' => 'team-photo' ) ); ?>
          <?php endif; ?>
        </div>
        <div class="card-desc">
          <h1 class="name"><span><?php echo get_post_meta( get_the_ID(), 'first_name', true ); ?></span><br/> <?php the_title(); ?></h1>
          <h4 class="job-desc"><?php echo get_post_meta( get_the_ID(), 'job_title', true ); ?></h4>
          <p>Phone Number: <?php echo get_post_meta( get_the_ID(), 'phone_number', true ); ?></p>
          <p>Email: <?php echo get_post_meta( get_the_ID(), 'email', true ); ?></p>
          <a href="" class="card-btn">Connect with <?php the_title(); ?></a>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php
get_footer();
?>