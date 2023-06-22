<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
   $(document).ready(function() {
  $(window).scroll(function() {
    var introHeight = $('header').outerHeight(); // Get the height of the intro section
    var scrollPos = $(window).scrollTop(); // Get the current scroll position

    if (scrollPos > introHeight) {
      $("header nav").addClass("scrolled");
    } else {
      $("header nav").removeClass("scrolled");
    }
  });
});
  </script>
</head>

<body>
  <header>
    <div class="intro">
      <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
      <p class="slogan">YOUR SLOGAN HERE</p>
    </div>

    <nav>
      <?php
      wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'site-navigation'));
      ?>
    </nav>
  </header>


  <main>
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="entry-title"><a class="posts-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="entry-content">
            <?php the_content(); ?>
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="Post Image" width="200">
            <?php endif; ?>
          </div>
        </article>
    <?php
      endwhile;
    else :
    ?>
      <p>Geen berichten gevonden.</p>
    <?php endif; ?>

    
  </main>

  <footer>
    <div class="social-links">
      <a href="#"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/04/Facebook_f_logo_%282021%29.svg/1200px-Facebook_f_logo_%282021%29.svg.png" alt="facebook"></a>
      <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Instagram-Icon.png/1200px-Instagram-Icon.png"></a>
      <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/1200px-Logo_of_Twitter.svg.png"></a>
      <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/YouTube_social_white_squircle.svg/langnl-300px-YouTube_social_white_squircle.svg.png"></a>
    </div>
    <div class="copyright">
      &copy; 2023 Thijmen Hekkema. All rights reserved.
    </div>
  </footer>

</body>

</html>
