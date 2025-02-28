<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGW Study</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
      <?php include("header.php"); ?>  
      
      <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="hero-left">
            <div class="hero-badge">
              <img src="./img/iasd.png" alt="Icon" class="badge-icon" />
              <span class="badge-text">Curso de Leitura do <br/> Espírito de Profecia</span>
            </div>
  
            <h1>Aprenda as profecias bíblicas com os escritos de Ellen White</h1>
  
            <p>Complete os módulos e realize os questionários para receber seu certificado no final.</p>
  
            <div class="hero-features">
                <div class="feature">
                  <img src="./img/icon-certificate.png" alt="Com Certificado" class="feature-icon" />
                  <span class="feature-text">Aprendizado Grátis Com Certificado</span>
                </div>
              </div>
            </div>
          <div class="hero-right">
            <img src="./img/ellen.png" alt="Ilustração" class="hero-illustration" />
          </div>
        </div>
  
        <div class="scroll-down" onClick="scrollToNextSection()">
            <div class="scroll-line"></div>
            <div>
                <button aria-label='Ir para próxima seção' class='button-down'>
                    <img alt='' loading='lazy' decoding='async' data-nimg='1' class='bt-img-1' src="./img/down.svg" />
                    <img alt='' loading='lazy' decoding='async' data-nimg='1' class='bt-img-2' src="./img/down.svg" />
                </button>  
            </div>
        </div>
      </section>

      <section id="for-who" class="for-who-section">
        <div class="for-who-container">
          <div class="for-who-content">
            <span class="for-who-title">Para quem é o EGW STUDY?</span>
            <h2 class="for-who-subtitle">Espírito de Profecia não é um bicho de sete cabeças</h2>
            <p class="for-who-description">
            Este curso de leitura é ideal para aqueles que desejam aprofundar seus conhecimentos nos escritos proféticos de Ellen White, 
            seja para fortalecer sua fé, expandir sua compreensão espiritual ou buscar orientação para a vida cotidiana com base nas revelações divinas.
            </p>
          </div>
          <div class="for-who-items">
            <div class="for-who-item">
              <div class="item-icon check-icon"></div>
              <p>Para você que está começando do zero na leitura dos escritos proféticos de Ellen White</p>
            </div>
            <div class="for-who-item">
              <div class="item-icon check-icon"></div>
              <p>Para quem já está familiarizado com os escritos de Ellen White e deseja aprofundar ainda mais os fundamentos proféticos</p>
            </div>
            <div class="for-who-item">
              <div class="item-icon check-icon"></div>
              <p>Para quem deseja transformar sua vida, mas não sabe por onde iniciar sua jornada espiritual</p>
            </div>
          </div>
        </div>
      </section>

      <section class="certificate-section">
        <div class="certificate-container">
          <span class="certificate-span">Seu futuro após a Leitura</span>
  
          <h3 class="certificate-title">O que você vai conquistar depois de estudar nesse curso</h3>
  
          <div class="certificate-grid">
            <div class='certificate-left'>
              <div class="certificate-item know">            
                <h4 class="item-title">Domínio das Profecias</h4>
                <p>Conhecimentos valiosos dos livros da Série Conflito que irão enriquecer sua jornada espiritual</p>
                <div class='item-books'>
                    <div class="skills-carousel">
                        <!-- Imagem Grande -->
                        <div class="carousel-image-container">
                            <img id="carouselImage" src="./img/1.png" alt="Livro 1" class="carousel-image">
                        </div>
                
                        <!-- Miniaturas na versão desktop -->
                        <div class="carousel-thumbnails">
                            <img src="./img/1.png" alt="Livro 1" class="thumbnail active" onclick="changeImage(0)">
                            <img src="./img/2.png" alt="Livro 2" class="thumbnail" onclick="changeImage(1)">
                            <img src="./img/3.png" alt="Livro 3" class="thumbnail" onclick="changeImage(2)">
                            <img src="./img/4.png" alt="Livro 4" class="thumbnail" onclick="changeImage(3)">
                            <img src="./img/5.png" alt="Livro 5" class="thumbnail" onclick="changeImage(4)">
                        </div>
                
                        <!-- Navegação por setas no mobile -->
                        <div class="carousel-controls">
                            <button onclick="prevImage()" class="carousel-button prev">&lt;</button>
                            <button onclick="nextImage()" class="carousel-button next">&gt;</button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
  
            <div class='certificate-right'>
              <div class="certificate-item">            
                <h4 class="item-title">Certificado de Conclusão</h4>
                <p>Certificação reconhecida para destacar seus conhecimentos espirituais e enriquecer sua trajetória de crescimento pessoal</p>
                <div class='item-certificate'>
                  <img src="./img/certificado.png" alt='Certificado de conclusão' />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="discover-card-wrapper">
            <div class="discover-card-container">
              <div class="discover-card-content">
                
                <div class="discover-card-header">
                  <img 
                    src="./img/icon.png"
                    alt="Discover" 
                    class="Logo" 
                    width="64" 
                    height="64" 
                  />
                  <h3 class="discover-title">
                    Inicie seus estudos nos livros da Série Conflito agora mesmo
                  </h3>
                </div>
      
                <a 
                  href="/sign-up" 
                  class="discover-button"
                >
                  <img 
                    src="./img/user-plus.svg" 
                    alt="User Plus Icon" 
                    class="discover-button-icon" 
                    width="24" 
                    height="24" 
                  />
                  CRIAR CONTA GRÁTIS
                </a>
              </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

    <script src="./scripts.js"></script>
</body>
</html>