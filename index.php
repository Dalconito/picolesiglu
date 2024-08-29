<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/index.css">
    <title>Principal</title>

    <link href="./public/uicons-bold-rounded-2.5.1/uicons-bold-rounded/webfonts/uicons-bold-rounded.css" rel="stylesheet"> <!--load all styles -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <?php

  ?>
  <body>
    <section><?php include './menu.php' ?></section>

    <section class="pagina">
      <div><div><h1 class="tituloChamativo txtCentral">PICOLÉS IGLU</h1></div><h3 class="slogan">O sabor refrescante da Fruta</h3></div>
      <div class="container col-s-12">
        <div><div class="content col-s-6"><h2>Picolés</h2></div></div>
        <div><div class="content col-s-6"><h2>Massas</h2></div></div>
        <div><div class="content col-s-6"><h2>Açaí</h2></div></div>
        <div><div class="content col-s-6"><h2>Caldas dem Picolé</h2></div></div>
      </div>
      <div class="produtoDiv">
          <p class="tituloChamativo">Conheça a loja de Fabrica!</p>
          <p class="subtitulo">Produtos de qualidade para adoçar seu dia</p>

          <div class="carrosselDiv">
            <div class="textoCarrossel">
              <p class="texto">Nossa Loja, temos diversos produtos em preços especiais, como os Picolés com ou sem Calda, Sorvete na massa e no copo, Açaí com diversas coberturas</p>
              <a class="btnLoja" href="produtos.php">Conheça Nossa Loja</a>
            </div>
            <div class="carrosselPai">
              <div class="carrossel">
                <img src="./public/fotos/foto1.webp">
                <img src="./public/fotos/foto2.webp">
                <img src="./public/fotos/foto3.webp">
              </div>
              <button class="prev btnCarrossel"><i class="fi fi-br-angle-circle-left" ></i></button>
              <button class="next btnCarrossel"><i class="fi fi-br-angle-circle-right" ></i></button>
            </div>
          </div>
      </div>
      
          <div class="divIcone">
            <div class="iconeItem">
              <i class="fi fi-br-popsicle icone"></i><span>Picolés sao feitos com o cuidado de um caseiro</span>
            </div>
            <div class="iconeItem">
              <i class="fi fi-br-ice-cream icone"></i><span>Nossas Massas sao Caseiras e sem pedaços de gelo</span>
            </div>
              <div class="iconeItem">
                <i class="fi fi fi-br-calendar-day icone"></i><span>Preços especiais para eventos e festas</span>
            </div>
          </div>

      <div class="divCentral">
        <div>
          <p class="tituloChamativo">Aonde Estamos<p>
          <p class="txtChama">Entregamos para toda São Paulo</p>
        </div>
          <iframe class='mapApi' src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d228.68998281460836!2d-46.3932585!3d-23.4950786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce637afc9dbe63%3A0xac28bfdf0238919d!2sRua%20Ol%C3%ADmpio%20Sotomaior%20-%20Vila%20Itaim%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008110-730!5e0!3m2!1spt-BR!2sbr!4v1723819400063!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div>
        <div>
          <div class="txtCentral btnDiv">
            <a class="btnChama" href=''>Faça seu pedido Agora</a>
          </div>
        </div>
      </div>
    </section>

    <footer><?php include './footer.php' ?></footer>
    <script src="./public/script.js"></script>
  </body>
</html>