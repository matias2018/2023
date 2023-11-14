<?php get_header(); ?>
<div class="main-wrapper">

  <div id="particles-js"></div>

  <!-- hero -->
  <section class="hero" id="one">
    <div class="container ">

      <div class="index-hero-text">
        <h1 class="slogan">I build things <br>and create digital experiences</h1>
        <p id="wheel" contentEditable class="intro">Hi! My name's Pedro Matias</p>
      </div>
      <div class="email_container">
        <a class="toCopy">pvmatias@gmail.com</a>
      </div>
      
      <div class="btn-container">
        <a href="#two" class="link-btn scramble">
          Know more
        </a>
      </div>
    </div>
  </section>

  <section id="two">
    <div class="container">
      <h2 class="section-heading">
        I'm a full-stack developer and I'm creating experiences for the next generation of user-centric companies
      </h2>

      <div class="my-4">
        <p class="fat-text">
          I mostly build WordPress themes and plugins, I also work with other technologies like React, Vue, Astro, Node, and Laravel.
        </p>
      </div>
      <div class="page_header--intro mb-10">
        <p class="page_header--intro-p">
        I'm a curious and deep critic kind of person. Growing up, I enjoyed disassemble and reassemble things... And I still do.
        </p>
      </div>
      <div class="btn-container mt-0">
        <a href="#three" class="link-btn scramble">
          Work
        </a>
      </div>
    </div>
  </section>

  <section class="news container mt-100" id="three">
    <h2 class="title title-news">Work</h2>
    <div class="page_header--intro">
      <p class="page_header--intro-p">
        I'm always looking for new ways to improve my work and myself. Here are some projects that I've worked on.
      </p>
    </div>
    <div class="news-last-two">
      <?php
      $homePageWorks = new WP_Query(
        array(
          'posts_per_page' => 10,
          'post_type' => 'project',
          'posts_per_page' => 2,
          'orderby' => 'date',
          'order' => 'ASC',
          'post_status' => 'publish'
        )
      );
      while ($homePageWorks->have_posts()) {
        $homePageWorks->the_post();
      ?>
        <div class="news-card">
          <a href="<?php the_permalink(); ?>" class="the_card">
            <div class="news-card-header">
              <img class="news-card__image" src="<?php the_post_thumbnail_url(); ?>" alt="
                <? if (get_the_post_thumbnail_caption($post)) {
                  echo get_the_post_thumbnail_caption($post);
                } else {
                  echo get_the_title();
                }
                ?>
              ">
            </div>
            <div class="project-cat">
              <p class="project-date"><?php echo get_field('year'); ?></p><br/>
              <p class="project-title scramble"><?php the_title(); ?></p>
            </div>
          </a>
        </div>
      <?php
      }
      ?>
      <?php echo paginate_links(); ?>
    </div>
  </section>

  <!-- spare parts -->

  <main class="newsHeadlines mt-100">
    <!-- seccao destaque -->
    <div class="container">
      <div class="destaque_container">
        <div class="destaques">
          <?php
          $destaques = new WP_Query(
            array(
              'posts_per_page' => 1,
              'post_type' => 'destaque'
            )
          );
          while ($destaques->have_posts()) {
            $destaques->the_post();
          ?>
            <div class="destaque">
              <a href="http://musica6.santillana.pt/home" target="_blank" class="wp-video-popup">
                <div class="banner" style="background: url('<?php $destaque_img = get_field('destaque_img'); ?>');">

                  <img class="destaque_img obra-card__image" src="<?php echo $destaque_img['url']; ?>" alt="
                    <? if (get_the_post_thumbnail_caption($post)) {
                      echo get_the_post_thumbnail_caption($post);
                    } else {
                      echo get_the_title();
                    } ?>" style="object-fit: cover; width: 100%; height: 100%;">
                  <!-- <?php echo do_shortcode('[wp-video-popup id="video-" video="https://www.youtube.com/watch?v=2xxonKSQ-1M"]'); ?> -->
                </div>
              </a>
            </div>
          <?php
          }
          ?>
          <?php echo paginate_links(); ?>
        </div>
      </div>
    </div>
  </main>
  <!-- marquee -->
  <div class="marquee-wrapper">
    <div class="fp-marquee">
      <p class="marquee-message">
        UX DESIGN / Interactivity / Communication / Accessibility / UI Design / Web Development
      </p>
    </div>
  </div>

  <div class="flex btn-ruller container mb-100 mt-100">
    <a href="#four" class="link-btn scramble">
      Philosophies
    </a>
    <a href="/noticias/" class="link-btn scramble">
      See all projects
    </a>
  </div>

  <div id="four" class="container mt-200">
    <h2 class="title title-thoughts">Philosophies</h2>
  </div>
  <section class="programs">
    <div class="container">

      <!-- SLIDER -->

      <div class="slider">

        <!-- BUTTONS (input/labels) -->
          
        <input type="radio" name="slider" id="slide-1-trigger" class="trigger" checked>
        <label class="slider-btn" for="slide-1-trigger"></label>
        <input type="radio" name="slider" id="slide-2-trigger" class="trigger">
        <label class="slider-btn" for="slide-2-trigger"></label>
        <input type="radio" name="slider" id="slide-3-trigger" class="trigger">
        <label class="slider-btn" for="slide-3-trigger"></label>
        <input type="radio" name="slider" id="slide-4-trigger" class="trigger">
        <label class="slider-btn" for="slide-4-trigger"></label>


        <!-- SLIDES -->
        <div class="slide-wrapper">
          <div id="slide-role">
            <div class="slide slide-1">
              <h3 class="slider_text">Astro<br>My newest love</h3>
              <p class="slider_text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
              </p>
              <div class="btn-container">
                <a href="<?= site_url('/obras'); ?>" class="btn-slider btn-neuro-round">
                  Know More
                </a>
              </div>
            </div>
            <div class="slide slide-2">
              <h3 class="slider_text">Laravel<br>Robustness and simplicity</h3>
              <p class="slider_text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
              </p>
              <div class="btn-container">
                <a href="<?= site_url('/programas'); ?>" class="btn-slider btn-neuro-round">
                  Know More
                </a>
              </div>
            </div>
            <div class="slide slide-3">
              <h3 class="slider_text">Vue<br>& Nuxt</h3>
              <p class="slider_text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
              </p>
              <div class="btn-container">
                <a href="<?= site_url('/programas'); ?>" class="btn-slider btn-neuro-round">
                  I Love Vue
                </a>
              </div>
            </div>
            <div class="slide slide-4">
              <h3 class="slider_text">WordPress<br>Still a great choice</h3>
              <p class="slider_text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
              </p>
              <div class="btn-container">
                <a href="<?= site_url('/programas'); ?>" class="btn-slider btn-neuro-round">
                  Know More
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- SLIDER -->
      <div class="btn-container">
      <a href="#five" class="link-btn scramble">
        Biography
      </a>
    </div>
    </div>
  </section>

  <section class="bio mt-200" id="five">
    <div class="container">
      <h2 class="title title-aboutMe hoverJumpEffect">Bio</h2>
      <p>
        Pedro Matias has a passion for culture and science.
        He is currently a developer at <a href="https://scml.pt" target="_blank" class="link_blue">Santa Casa da Misericórdia de Lisboa</a></p>
      <p>
        In 2014 co-founded <a href="https://portugalmultimedia.pt" target="_blank" class="link_blue">Portugal Multimedia</a> and has worked as a freelancer for several companies and institutions.
      </p>
      <p>
        From 2016 to 2020, also served as a Web Design teacher at both <a href="http://epci.pt" target="_blank" class="link_blue">EPCI</a> and <a href="https://www.valdorio.net/" target="_blank" class="link_blue">Val do Rio, Oeiras</a>.
      </p>

      <p>
        He has a degree in Multimedia at <a href="https://escs.ipl.pt" target="_blank" class="link_blue">School of Communication and Media Studies, IPL-Lisboa</a>.
      </p>
      <p>Pedro's enthusiasm extends to the realms of the arts, music, and technology and he plays classical and electrical guitar on his spare time.</p>
    </div>
  </section>

  <section class="container mt-200">
    <h2 class="title title-aboutMe">Contact</h2>
    <div class="contact">
      <div class="contact__form">
        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
      </div>
      <div class="contact__info">
        <div class="contact__info--item">
          <h3 class="contact__info--item-title">Email</h3>
          <p class="contact__info--item-text">
            <a href="mailto:<EMAIL>"><EMAIL></a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="container mt-200 wordSoup">
    
  </section>

</div>


<?php get_footer(); ?>