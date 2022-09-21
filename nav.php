<div class="container-fluid" id="header">
  <header>
    
    <a href="/"><?= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/home/logo-ipj.svg') ?></a>
    <nav id="itensMenu">
      <ul>
        <li><a href="">A IP Juquiá</a></li>
        <li><a href="">Galeria de Pastores</a></li>
        <li><a href="">Devocionais</a></li>
        <li><a href="">Contribua</a></li>
        <li><a href="">Contato</a></li>
      </ul>
    </nav>
    <div>
      <a href=""><?= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/home/youtube.svg') ?></a>
      <a href=""><?= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/home/facebook.svg') ?></a>
    </div>

    <div id="menuIcon" onclick='clickHamburguer()'><span class="material-symbols-outlined">menu</span></div>
  </header>
</div>