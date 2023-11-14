<?php
get_header();
?>

<section class="obras features-head bg-light py-3">
  <div class="container">
    <div class="page_header">
      <h1>Obras</h1>
      <div class="page_header--intro">
        <p class="page_header--intro-p">
          Desde 2015 que este Fundo ajuda as Misericórdias portuguesas em causas sociais prioritárias e inovadoras, contribuindo para a coesão social e territorial do país.
        </p>
      </div>
    </div>
    <div>
      <h2 class="padding-10-on-desktop">Arquivo de obras realizadas</h2>
    </div>

    <div class="filter filter-btn-container padding-10-on-desktop" id="target">

      <a href="#" class="filter-btn" data-filter="Obras e Equipamentos Sociais">
        Requalificação de património
      </a>
      <a href="#" class="filter-btn" data-filter="Recuperação de Património">
        Obras e Equipamentos Socias
      </a>

      <a href="#" class="filter-btn conclusionState" data-filter="Concluded">
        Obras concluídas
      </a>
      <a href="#" class="filter-btn conclusionState" data-filter="Concluded">
        Obras em processo de conclusão
      </a>

    </div>

  </div>
</section>
<section id="main-content" class="posts-container features-head bg-light py-3">
  <div class="container obras_container">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
    ?>

        <div class="archive_work obra done_<?php echo get_field('estado_da_obra'); ?>" data-category="<?php the_field('tipo_de_obra') ?>">
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
    <?php echo paginate_links(); ?>
  </div>
</section>

<?php
get_footer();
?>