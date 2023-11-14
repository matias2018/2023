<?php
get_header();
?>

<section class="obras features-head bg-light py-3">
  <div class="container">
    <div class="page_header">
      <h1>Projects</h1>
      <div class="page_header--intro">
        <p class="page_header--intro-p">
          I am continually exploring avenues for enhancing both my professional endeavors and personal growth. Enclosed are select projects that underscore my commitment to excellence and continual improvement. 
        </p>
      </div>
    </div>
    <div>
      <h2 class="padding-10-on-desktop">Archive Projects</h2>
    </div>

  </div>
</section>
<section id="main-content" class="posts-container features-head bg-light py-3">
  <div class="container obras_container">
    <?php
    $args = array(
      'posts_per_page' => -1,
      'post_type' => 'project',
      'orderby' => 'date',
      'order' => 'ASC',
      'post_status' => 'publish'
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
    ?>
        <div class="archive_work obra done_<?php echo get_field('year'); ?>" data-category="<?php the_field('tipo_de_obra') ?>">
          <div class="lead obra-card">
            <a class="image-wrapper" href="<?php the_permalink(); ?>">
              <img class="obra-card__image" src="<?php the_post_thumbnail_url(); ?>" alt="<? if (get_the_post_thumbnail_caption($post)) {
                                                                                            echo get_the_post_thumbnail_caption($post);
                                                                                          } else {
                                                                                            echo get_the_title();
                                                                                          } ?>" style="object-fit: cover;">
            </a>
          </div>
          <div class="obra-card-excerpt">
            <h2 class="localDaObra"><?php echo get_field('local_da_obra'); ?></h2>
            <p><?php the_title(); ?></p>
          </div>
        </div>
      <?php }
    } else {
      ?>
      <h3>We have found no posts.</h3>
    <?php
    }
    ?>

  </div>
</section>

<?php
get_footer();
?>