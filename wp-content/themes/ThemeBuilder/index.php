<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- De onderstaande regel code gebruikt de WordPress-functies bloginfo() welke de naam en de omschrijving van de applicatie ophaalt -->
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

    <!-- De onderstaande regel code gebruikt de WordPress-functie get_stylesheet_uri() om de URL van het huidige thema's style.css-bestand op te halen en dit te koppelen aan het stijlblad van je website. -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <style>
    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .entry-title {
      animation: slideIn 0.5s ease-in-out;
    }
  </style>

</head>

<body>
    <header>
        <!-- De onderstaande regel code gebruikt de WordPress-functie  -->
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav>

            <!-- De onderstaande regel code gebruikt de WordPress-functie  -->
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
        <div class="container-footer w-container">
            <div class="w-row">
                <div class="footer-column w-clearfix w-col w-col-4"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/596d33f36607b12cfdaf8ad2_LogoWhite.png" alt="Company image" width="40" class="failory-logo-image">
                    <h3 class="footer-failory-name">MijnBedrijf</h3>
                </div>
                <div class="footer-column w-col w-col-8">
                    <div class="w-row">
                        <div class="w-col w-col-8">
                            <div class="w-row">
                                <div class="w-col w-col-7 w-col-small-6 w-col-tiny-7">
                                    <h3 class="footer-titles">Content</h3>
                                    <p class="footer-links"><a href=""><span class="footer-link">Homepage</span></a><span><br></span><a href="http://localhost/ThemeBuilder/ThemeBuilder/2023/06/15/de-voordelen-van-regelmatige-lichaamsbeweging/"><span class="footer-link">Post 1<br></span></a><a href="http://localhost/ThemeBuilder/ThemeBuilder/2023/06/15/tips-voor-het-opstarten-van-een-succesvolle-blog/"><span class="footer-link">Post 2<br></span></a><strong><br></strong></p>
                                </div>
                                <div class="w-col w-col-5 w-col-small-6 w-col-tiny-5">
                                    <h3 class="footer-titles">Learn</h3>
                                    <p class="footer-links"><a href="http://localhost/ThemeBuilder/ThemeBuilder/over-ons/"><span class="footer-link">Over Ons<br></span></a><strong><br></strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="column-center-mobile w-col w-col-4">
                            <h3 class="footer-titles">Follow Us!</h3><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbf0a2f2b67e3b3ba079c_Twitter%20Icon.svg" width="20" alt="Twitter icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbfe70fcf5a0514c5b1da_Instagram%20Icon.svg" width="20" alt="Instagram icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbe42e1e6034fdaba46f6_Facebook%20Icon.svg" width="20" alt="Facebook Icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0002f2b676eb4ba0869_LinkedIn%20Icon.svg" width="20" alt="LinkedIn Icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0112f2b6739c9ba0871_Pinterest%20Icon.svg" width="20" alt="Pinterest Icon" class=""></a>
                            <p class="footer-description">Email me at: <a href=""><strong class="link-email-footer">Lorem Ipsum</strong></a><br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
  document.addEventListener("DOMContentLoaded", function () {
    var elements = document.getElementsByClassName("entry-content");
    var windowHeight = window.innerHeight;

    function checkPosition() {
      for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        var positionFromTop = elements[i].getBoundingClientRect().top;

        if (positionFromTop - windowHeight <= 0) {
          element.classList.add("show");
        }
      }
    }

    window.addEventListener("scroll", checkPosition);
    window.addEventListener("resize", checkPosition);

    checkPosition();
  });
</script>

</body>

</html>