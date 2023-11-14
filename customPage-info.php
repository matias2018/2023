<?php /* Template Name: CustomPageInfo */ ?>
<?php
get_header();
?>

<section class="candidaturas features-head bg-light py-3 init">
    <div class="container">
      <div>
        <div class="page_header">
          <h1>Informações</h1>
          <div class="page_header--intro">
            <p class="page_header--intro-p">
              Rua do Carmo, 15 - 2º Esq <br>
              1200-093 Lisboa <br>
              T:213 401 170 <br>
              F:213 401 171
            </p>
          </div>
        </div>
      </div>
    </div>
    <br id="target" />
  </section>

  <section class="map">
    <div class="mapouter container">
      <div class="gmap_canvas">
        <iframe
          title="map"
          width="100" 
          height="300" 
          id="gmap_canvas" 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d778.3218149004256!2d-9.140279872453334!3d38.71121332607782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd193478d19ca847%3A0x37634d50c8dcf651!2sR.%20do%20Carmo%2015%2C%201200-092%20Lisboa!5e0!3m2!1sen!2spt!4v1639059276900!5m2!1sen!2spt"
          >
        </iframe>
      </div>
    </div>
  </section>

<?php 
  while( have_posts() ) {
    the_post(); 
?>
  <?php
    }
  ?>



    <section class="faqs mb-100">
      <div class="container">
        <div class="accordion container">
          <h2>Perguntas frequentes</h2>
          
            <button class="faq faq-1">O que é o Fundo Rainha D. Leonor?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              O Fundo Rainha D. Leonor foi criado pela SCML e pela UMP para ajudar as Misericórdias a concluírem respostas prioritárias que propiciem a inovação social e a recuperação do património.
            </p>
          
          
            <button class="faq faq-2">Quem pode candidatar-se ao Fundo Rainha D. Leonor?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              Podem concorrer todas as Misericórdias portuguesas legalmente constituídas e ativadas.
            </p>
          
          
            <button class="faq faq-3">Que projectos podem candidatar-se ao Fundo?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              O Fundo destina-se a projetos nas áreas social e do património previstas no art.º 2 do Regulamento.
            </p>
          
          
            <button class="faq faq-4">O que é valorizado nas candidaturas?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              O Fundo dá prioridade a projetos com inovação social, que promovam o envelhecimento ativo, o contacto com espaços exteriores e a recuperação de edifícios simbólicos para as Misericórdias. Os parâmetros de avaliação das candidaturas podem ser consultados nos anexos I e II ao Regulamento.
            </p>

            <button class="faq faq-5">Qual o valor máximo a que pode candidatar-se um projeto?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              Há um teto financeiro de 300 mil euros para o apoio de uma candidatura. São raros os projetos que recebem este valor máximo.
            </p>

            <button class="faq faq-6">E qual a taxa de apoio do Fundo?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              O Fundo requer uma comparticipação do promotor de mais de 50% do total do projeto. O FRDL financia até 90% dos custos elegíveis. O financiamento do Fundo não é reembolsável.
            </p>

            <button class="faq faq-7">Que candidaturas não são aprovadas?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              Candidaturas que não sejam necessárias às populações; que não tenham qualidade; ou que não deem garantias de sustentabilidade financeira.
            </p>

            <button class="faq faq-8">Quando abrem as candidaturas?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              O Conselho de Gestão anuncia, anualmente, se há concurso de candidaturas. Em caso de haver concurso, o período de entrega das candidaturas vai de 1 de janeiro a 31 de março.
            </p>

            <button class="faq faq-9">Como posso apresentar uma candidatura?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              No Regulamento pode ler-se as condições de admissibilidade e seguir as instruções para preencher o formulário. O vídeo ‘Como candidatar-se’, neste site, explica as etapas das candidaturas.
            </p>

            <button class="faq faq-10">Uma Misericórdia pode apresentar várias candidaturas?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              Cada entidade só pode submeter uma candidatura por triénio.
            </p>

            <button class="faq faq-11">Posso candidatar-me se o projecto já tiver beneficiado de um Fundo Comunitário?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              Sim. Nesse caso, o Fundo considera apenas a parte não elegível do apoio europeu.
            </p>
            <button class="faq faq-12">Qual o regime de contratação imposto pelo Fundo?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              São aplicáveis as regras dos contratos públicos às aquisições de bens e serviços (Art.º 19º do Regulamento). Qualquer aquisição acima de 5000 euros pede consulta a três fornecedores.
            </p>
            <button class="faq faq-13">Exemplos de Custos não elegíveis (Art. 18º)?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              Despesas com taxas e impostos (por exemplo o IVA); Projectos de Arquitectura e de especialidades; Custo com consultores/assessoria para o projecto de candidatura; Aquisição/instalação do sistema de AVAC.
            </p>

            <button class="faq faq-14">Como são apurados os custos elegíveis?
              <i class="faq-rotator">+</i>
            </button>
            <p class="answer">
              Todos os itens considerados elegíveis são comparados com uma tabela de preços médios de mercado da SCML para evitar injustiças na valoração das rúbricas dos Orçamentos das diferentes Misericórdias.
            </p>
          
        </div>
      </div>
    </section>
    <section class="politics pt-100">
      <div class="container">
        <div class="accordion container">
          <h2 class="mb-100">política de privacidade</h2>
          <h3 class="law_title mb-50">
            Desde 25 de maio de 2018 que se aplica o Regulamento Geral sobre a Proteção de Dados (Regulamento (UE) 2016/679 do Parlamento Europeu e do Conselho, de 27 de abril de 2016), que estabeleceu novas regras relativas à proteção, tratamento e livre circulação dos dados pessoais das pessoas singulares.
          </h3>
          <p class="law">
            A Santa Casa da Misericórdia de Lisboa, na medida em que trata dados pessoais no âmbito da atividade que desenvolve nas suas diferentes áreas de atuação, de acordo com a prossecução dos fins estatutários da organização, previstos no Decreto-Lei n.º 235/2008, de 3 de dezembro, garante a proteção daqueles dados, cujo tratamento é efetuado ao abrigo da legislação aplicável e da presente Política de Privacidade.
          </p>
          <h3 class="law_title mt-50 mb-50">
            O COMPROMISSO DA SANTA CASA
          </h3>
          <p class="law">
          Através desta política, a instituição compromete-se, designadamente, a reconhecer a segurança dos dados pessoais que trata e a assegurar a proteção da privacidade dos respetivos titulares como dimensões fundamentais da atividade da organização, cruciais para a concretização plena das diferentes áreas de missão em que atua. <br>
          A Misericórdia de Lisboa presta ainda informação sobre as regras, os princípios e as boas práticas que a organização observa no âmbito do tratamento dos dados pessoais que lhe são confiados, em conformidade com o Regulamento Geral sobre a Proteção de Dados (RGPD) e demais legislação aplicável, e sobre os meios que os titulares dos dados têm ao seu dispor para exercício dos respetivos direitos.
          </p>
          <h3 class="law_title mt-50 mb-50">
            RESPONSÁVEL PELO TRATAMENTO DE DADOS PESSOAIS
          </h3>
          <p class="law">
          No âmbito da atividade que desenvolve nas suas diferentes áreas de atuação, de acordo com os fins estatutários da organização, a Santa Casa da Misericórdia de Lisboa – pessoa coletiva de direito privado e utilidade pública administrativa, com o número único de pessoa coletiva 500 745 471 – é uma entidade responsável pelo tratamento de dados pessoais, podendo ser contactada através dos seguintes canais:
          </p>
        </div>

        <div class="black-box mt-100 pt-50 pb-50">
          <div class="container">
            <h3 class="law_title mt-50 mb-50 font-light">
              RESPONSÁVEL PELO TRATAMENTO DE DADOS PESSOAIS
            </h3>
            <p class="font-light">
              Rua do Carmo, 15 - 2º Esq <br>
              1200-093 Lisboa <br>
              <a class="number-link" href="tel:+1-333-333-4444">T:213 401 170</a><br>
              <a class="number-link" href="tel:+1-333-333-4444">F:213 401 171</a><br>
            </p>
            <div class="cta">
              <a href="mailto:dadospessoais@scml.pt?subject=Site&nbsp;FRDL:&nbsp;Pedido&nbsp;de&nbsp;informação" class="uppercase cta-link">pedir informações</a>
            </div>
          </div>
        </div>

        <div class="accordion container">
          <h3 class="law_title mt-50 mb-50">
            ENCARREGADO DE PROTEÇÃO DE DADOS
          </h3>
          <p class="law">
            Na medida em que algumas das atividades principais da organização pressupõem o tratamento de um grande volume de dados de categorias especiais, a Santa Casa designou um Encarregado de Proteção de Dados, responsável por garantir, entre outros aspetos, a conformidade das atividades de tratamento e proteção de dados pessoais sob a responsabilidade da instituição, de acordo com a legislação aplicável e com a presente política. 
          </p>
          <br>
          <p class="law">
            Assim, os titulares de dados pessoais, caso o pretendam, podem endereçar uma comunicação ao Encarregado da Proteção de Dados, relativamente a assuntos relacionados com o tratamento de dados pessoais, utilizando, para o efeito, os seguintes canais:
          </p>
        </div>


      </div>
    </section>

<script>
  jQuery(document).ready(function($) {
    $(".cta").click(function() {
      window.location = $(this).find("a").attr("href"); 
      return false;
    });
  });
  </script>

<?php get_footer(); ?>