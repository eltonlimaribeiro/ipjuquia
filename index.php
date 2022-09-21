<?php include('head.php');?>
<title>Igreja Presbiteriana de Juquiá</title>
<?php include('nav.php');  ?>
  
  <div id="intro">
    <div class="container">
      <div class="texto-intro">

        <img src="/img/home/home-bg-texto.png" alt="Imagem 122 Anos Igreja Presbiteriana de Juquiá">
        <p>Venha Comemorar Conosco!</p>
        
        <a class="botao" href="/posts/2022/ip-juquia-comemora-122-anos.php"><span>Saiba Mais</span></a>
      </div>
    </div>
  </div>

  <div class="container" id="cards">
    <div class="cards">
      <div class="card">
        <div class="titulo-card">
          <?= file_get_contents('img/home/somos-uma-igreja-crista.svg') ?>
          <p>Somos Uma Igreja Cristã</p>
        </div>
        <div class="texto-card">
          <p>Somos discípulos de Cristo e cremos na salvação pela graça, por meio da fé.</p>
        </div>
        <a href="">Conheça a história da IP Juquiá</a>
      </div>

      <div class="card">
        <div class="titulo-card">
          <?= file_get_contents('img/home/somos-uma-igreja-reformada.svg') ?>
          <p>Somos Uma Igreja Reformada</p>
        </div>
        <div class="texto-card">
          <p>Temos nossas raízes  na Reforma Protestante. Somos herdeiros do pensamento Calvinista.</p>
        </div>
        <a href="">Conheça a história da IP Juquiá</a>
      </div>

      <div class="card">
        <div class="titulo-card">
          <?= file_get_contents('img/home/somos-uma-igreja-missionaria.svg') ?>
          <p>Somos Uma Igreja Missionária</p>
        </div>
        <div class="texto-card">
          <p>Somos desafiados por Cristo a ir e pregar o evangelho. Fazemos isso auxiliando os que saem por este mundo e também em nossas vidas diárias.</p>
        </div>
        <a href="">Conheça a história da IP Juquiá</a>
      </div>
    </div>
  </div>

  <section id="nossos-pilares">
    <div class="container">
      
      <picture>
        <source media="(max-width: 768px)" srcset="/img/home/nossos-pilares-600-300.jpg">
        <source media="(max-width: 1200px)" srcset="/img/home/nossos-pilares-992.jpg">
        
        <img src="/img/home/nossos-pilares-xlg.jpg" alt="Imagem Cruz">
      </picture>

      <div class="texto">
        <h2>Nossos Pilares</h2>

        <p>Estes são nossos pilares, pontos centrais do que nos move.</p>

        <div class="lista-nossos-pilares">
          <ul>
            <li>
              <?= file_get_contents('img/home/nossos-pilares-check.svg') ?>
              <div>
                <span>Adoração</span>
                <span>A adoração a Deus é o fim principal do homem, alvo central da igreja.</span>
              </div>
            </li>
            <li>
              <?= file_get_contents('img/home/nossos-pilares-check.svg') ?>
              <div>
                <span>Ensino</span>
                <span>Prezamos pela pregação expositiva da bíblia.</span>
              </div>
            </li>
            <li>
              <?= file_get_contents('img/home/nossos-pilares-check.svg') ?>
              <div>
                <span>Comunhão</span>
                <span>A comunhão fortalece os vínculos da igreja e nos leva sermos um só em Cristo. </span>
              </div>
            </li>
            <li>
              <?= file_get_contents('img/home/nossos-pilares-check.svg') ?>
              <div>
                <span>Serviço</span>
                <span>O cristão autêntico é aquele que serve espontaneamete.</span>
              </div>
            </li>
            <li>
              <?= file_get_contents('img/home/nossos-pilares-check.svg') ?>
              <div>
                <span>Missões</span>
                <span>A Igreja Presbiteriana de Juquiá busca ser fiel ao que nosso Senhor Jesus nos ordenou: "Ide por todo o mundo e pregai o evangelho"</span>
              </div>
            </li>

          </ul>
        </div>
      </div>

    </div>
  </section>

  <section id="nossas-reunioes">
    <div class="container">
      <h2>Nossas Reuniões</h2>

      <div class="nossas-reunioes-cards">
        <div class="nossas-reunioes-cards-item">
          <img src="/img/home/nossas-reunioes-ebd.jpg" alt="Foto Escola Bíblica Dominical">
          <div class="informacoes">
            <span class="titulo" >Escola Bíblica Dominical</span>
            <span class="texto">09h</span>
          </div>
        </div>
        
        <div class="nossas-reunioes-cards-item">
          <div id="culto-on-line">
            <?= file_get_contents('img/home/youtube.svg') ?>
            <p>Ao vivo no Youtube</p>
          </div>  

          <img src="/img/home/nossas-reunioes-culto-solene.jpg" alt="Foto Culto Solene">
          <div class="informacoes">
            <span class="titulo" >Culto Solene</span>
            <span class="texto">Domingo | 19h30</span>
          </div>
        </div>
        
        <div class="nossas-reunioes-cards-item">
          <img src="/img/home/nossas-reunioes-reuniao-de-oracao.jpg" alt="Foto Reunião de Oração">
          <div class="informacoes">
            <span class="titulo" >Reunião de Oração</span>
            <span class="texto">Terça-Feira | 19h30</span>
          </div>
        </div>
        
        <div class="nossas-reunioes-cards-item">
          <img src="/img/home/nossas-reunioes-estudo-biblico.jpg" alt="Foto Estudo Bíblico">
          <div class="informacoes">
            <span class="titulo" >Estudo Bíblico</span>
            <span class="texto">Quinta-Feira | 19h30</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="projetos-que-apoiamos">
    <div class="container">
      
      <picture>
        <source media="(max-width: 768px)" srcset="/img/home/projetos-que-apioamos-600x300.jpg">
        <source media="(max-width: 1024px)" srcset="/img/home/projetos-que-apioamos-300x700.jpg">
        <source media="(max-width: 1201px)" srcset="/img/home/projetos-que-apioamos-300x600.jpg">

        <img src="/img/home/projetos-que-apioamos-xlg.jpg" alt="Foto globo terrestre em cima de uma mão">
      </picture>
      <div class="texto">
        <h2>Projetos Que Apioamos</h2>
        <p>Apoiamos diversos projetos que visam anunciar o evangelho, tanto no Brasil, como mundo afora. Abaixo listamos alguns desses projetos.</p>

        <div class="cards">
          <div class="card">
            <a href="http://projetoabraao.com.br/" target="_blank" rel="noopener noreferrer">
              <?= file_get_contents('img/home/projetos-que-apioamos-projeto-abraao.svg') ?>
              <div class="titulo-card">
                <p>Projeto Abraão</p>
              </div>
              <div class="texto-card">
                <p>Um projeto que visa levantar um exército de intercessores em favor do país com a maior perseguição religiosa do mundo, a Coreia do Norte.</p>
              </div>
            </a>
          </div>
          
          <div class="card">
            <a href="https://www.meap.net.br/" target="_blank" rel="noopener noreferrer">
              <?= file_get_contents('img/home/projetos-que-apioamos-meap.svg') ?>
              <div class="titulo-card">
                <p>MEAP</p>
              </div>
              <div class="texto-card">
                <p>A Missão Evangélica de Assistência aos Pescadores é uma organização evangélica, formada por líderes de diferentes denominações históricas, com o objetivo de atender as necessidades das comunidades de pescadores, tão isoladas e tão pouco evangelizadas na costa oceânica e nos rios do Brasil.</p>
              </div>
            </a>
          </div>
          
          <div class="card">
            <a href="https://portasabertas.org.br/" target="_blank" rel="noopener noreferrer">
              <?= file_get_contents('img/home/projetos-que-apioamos-portas-abertas.svg') ?>
              <div class="titulo-card">
                <p>Missão Portas Abertas</p>
              </div>
              <div class="texto-card">
                <p>Portas abertas é uma missão não-denominacional de apoio a cristãos perseguidos em mais de 60 países onde o cristianismo é legalmente ou socialmente desencorajado, oprimido ou perseguido. Eles também estão envolvidos na distribuição de bíblias e literatura, gravações de áudio, transmissão e treinamento.</p>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="simbolos-de-fe">
    <div class="container">
      <h2>Nossos Símbolos de Fé</h2>

      <div class="simbolos-de-fe-cards">
        <div class="simbolos-de-fe-cards-item">
          <a href="">
            <img src="/img/home/nossos-simbolos-de-fe-confissao-de-fe.jpg" alt="Imagem mãos juntas sobre a bíblia">
            <div class="informacoes">
              <p class="titulo">
                <?= file_get_contents('img/home/nossos-simbolos-de-fe-confissao-de-fe.svg') ?>
                Confissão de Fé de Westminster</p>
              <p class="texto">É a principal declaração doutrinária adotada oficialmente pela Igreja Presbiteriana do Brasil</p>
            </div>
          </a>
        </div>

        <div class="simbolos-de-fe-cards-item">
          <a href="">
            <img src="/img/home/nossos-simbolos-de-fe-catessismo-maior.jpg" alt="Imagem mãos juntas sobre a bíblia">
            <div class="informacoes">
              <p class="titulo">
                <?= file_get_contents('img/home/nossos-simbolos-de-fe-catessismo-maior.svg') ?>
                Catessismo Maior de Westminster</p>
              <p class="texto">Formulado pela Assembleia de Westminster, é uma orientação calvinista, composto de 196 questões</p>
            </div>
          </a>
        </div>
        <div class="simbolos-de-fe-cards-item">
          <a href="">
            <img src="/img/home/nossos-simbolos-de-fe-breve-catecismo.jpg" alt="Imagem mãos juntas sobre a bíblia">
            <div class="informacoes">
              <p class="titulo">
                <?= file_get_contents('img/home/nossos-simbolos-de-fe-breve-catecismo.svg') ?>
                Breve Catessismo de Westminster</p>
              <p class="texto">É um catecismo resumido, composto de 107 questões</p>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <section id="contribua-onde-estamos">
    <div class="container">
      <div class="cards">

        <div class="card">
          <?= file_get_contents('img/home/contribua.svg') ?>
          <div class="informacoes">
            <h2>Contribua</h2>
            <div class="texto">
              <p>Você pode nos ajudar a levar o amor de Cristo àqueles que vivem neste mundo sem conhecer o Autor da Vida. </p>
            </div>
            <a href="" class="botao"><span>Quero Contribuir</span></a>
          </div>
        </div>
        
        <div class="card">
          <?= file_get_contents('img/home/onde-estamos.svg') ?>
          <div class="informacoes">
            <h2>Onde Estamos</h2>
            <div class="texto">
              <p>Seria uma grande alegria te receber. Esperamos que você possa experimentar a alegria e a Graça de Jesus Cristo.</p>
              <div class="endereco">
                <p>Praça Presbiteriana, 10</p>
                <p>Centro</p>
                <p>Juquiá-SP</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>

  <section id="morrinho">
    <picture>
      <source media="(max-width: 768px)"  srcset="/img/home/morrinho-lg-600-300px.jpg">
      <source media="(max-width: 1024px)"  srcset="/img/home/morrinho-lg-400px-600px.jpg">
      <source media="(max-width: 1200px)" srcset="/img/home/morrinho-lg-480px-460px.jpg">
      
      <img src="/img/home/morrinho-xlg.jpg" alt="Foto Igreja do Morrinho">
    </picture>

    <div class="informacoes">
      <h2>Morrinho</h2>
      <?= file_get_contents('img/home/morrinho.svg') ?>
      <p>Há mais de 100 foi erguido, em Morrinho, o primeiro templo evangélico do Litoral Sul Paulista e Vale do Ribeira e tem sido sinônimo de comunhão e intimidade com Deus.</p>
      <p>Hoje é um lugar especial onde são realizados retiros e encontros dos presbiterianos da região.</p>
      
      <p>Acesse o site e conheça a história do evangelho em nossa região.</p>

      <a href="http://www.morrinho.com.br/" target="_blank" rel="noopener noreferrer" class="botao"><span>MORRINHO.COM</span></a>
    </div>
  </section>

<?php include('footer.php') ?>