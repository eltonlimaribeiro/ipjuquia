

<script>
  const menu = document.querySelector('#header');

  function activeScroll(){
    menu.classList.toggle('ativo', scrollY > 0);
  }

  window.addEventListener('scroll', activeScroll);

  function clickHamburguer(){
    let header = document.getElementById('header');
    header.classList.toggle('menuResponsivo');
  }
</script>

<footer>
  <div class="container" id="footer">
    <?= file_get_contents($_SERVER['DOCUMENT_ROOT'].'/img/home/logo-ipj.svg') ?>
    <h2>Igreja Presbiteriana de Juquiá</h2>

    <div class="endereco">
      <p>Praça Presbiteriana, 10</p>
      <p>Centro</p>
      <p>Juquiá-SP</p>
    </div>
  </div>
</footer>

</body>
</html>