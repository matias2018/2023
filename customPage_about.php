<?php /* Template Name: CustomPageAboutUs */ ?>
<?php
get_header();
?>

<section class="candidaturas features-head bg-light py-3 init">
  <div class="page-container">
    <div class="page_header">
      <div class="page_header--intro">
        <h1 class="page-title"><?= the_title(); ?></h1>
        <p class="page_header--intro-p">
          Uma iniciativa da Santa Casa da Misericórdia de Lisboa
        </p>
      </div>
    </div>
  </div>
</section>

<section class="about-us">
  <div class="page-container">
      <div class="inner-container page-container">
        <p>
        São diversas as iniciativas desenvolvidas pela Santa Casa para reconhecer, valorizar e distinguir pessoas e instituições que, em diversas áreas de atuação, trabalham com objetivos claramente associados à missão da instituição. <br><br>
        
        Anualmente são atribuídos vários prémios nas áreas da Investigação Científica, Ação Social, Saúde e outras áreas complementares, que visem a melhoria da qualidade de vida da população.
        </p>
      </div>

      <div class="right-info mt-100">
        <h3 class="right-info-content">
          Apoio financeiro para o fomento da investigação científica nacional
        </h3>
      </div>

      <h2 class="title title-news max-1000 mt-200">Comissão Científica <br>de Biociências</h2>

      <div class="right-info">
        <p class="max-500">
          No âmbito de atividades de Investigação Científica desenvolvidas pela Santa Casa, ou em projetos em que esta participe, bem como na atribuição de Prémios e Bolsas de Investigação Científica, a Comissão Científica de Biociências (CCB) assume funções de aconselhamento técnico e promoção das atividades científicas. <br><br>
          Os membros da Comissão Científica de Biociências encontram-se, de forma preferencial, ligados a Instituições de Ensino Superior e/ou Centros ou Institutos de Investigação Científica e Hospitais, nacionais ou internacionais, do domínio das Ciências Biomédicas.
        </p>
      </div>

      <div class="comite_cards">

        <div class="comite_card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" alt="search" class="search">
            <p class="comite_card--name">Ana Espada Sousa</p>
            <p class="comite_card--description">Instituto de Medicina Molecular, Faculdade de Medicina de Lisboa, Universidade de Lisboa</p>
            <a href="#">CURRICULUM VITAE</a>
        </div>
        <div class="comite_card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" alt="search" class="search">
            <p class="comite_card--name">Ana Espada Sousa</p>
            <p class="comite_card--description">Instituto de Medicina Molecular, Faculdade de Medicina de Lisboa, Universidade de Lisboa</p>
            <a href="#">CURRICULUM VITAE</a>
        </div>
        <div class="comite_card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" alt="search" class="search">
            <p class="comite_card--name">Ana Espada Sousa</p>
            <p class="comite_card--description">Instituto de Medicina Molecular, Faculdade de Medicina de Lisboa, Universidade de Lisboa</p>
            <a href="#">CURRICULUM VITAE</a>
        </div>

      </div>
  </div>
</section>



<?php get_footer(); ?>