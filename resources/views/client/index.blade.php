@extends('templates.client')
@extends('templates.clientNav')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/renegade.jpg" class="d-block w-100" alt="Carro 1">
        </div>
        <div class="carousel-item">
          <img src="img/compass.jpg" class="d-block w-100" alt="Carro 2">
        </div>
        <div class="carousel-item">
          <img src="img/creta.jpg" class="d-block w-100" alt="Carro 3">
        </div>
        <div class="carousel-item">
          <img src="img/hb20.webp" class="d-block w-100" alt="Carro 3">
        </div>
        <div class="carousel-item">
          <img src="img/veloster.webp" class="d-block w-100" alt="Carro 3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  
    <section id="section-home" class="py-5 text-center">
      <div class="container">
        <h2>Bem-vindo à nossa locadora de veículos</h2>
        <p>Encontre o veículo perfeito para sua viagem</p>
        <a href="#section-veiculos" class="btn btn-primary">Veja nossos veículos</a>
      </div>
    </section>
  
    <section id="section-veiculos" class="py-5 bg-light">
      <div class="container">
        <h2>Nossos Veículos</h2>
        <!-- Aqui você pode adicionar o conteúdo sobre os veículos -->
      </div>
    </section>

    <section id="section-contato" class="py-5">
        <div class="container">
          <h2>Entre em Contato</h2>
          <!-- Aqui você pode adicionar o formulário de contato ou outras informações de contato -->
        </div>
      </section>
    
      <footer class="bg-dark text-light py-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h4>Locadora de Veículos</h4>
              <p>Endereço: Av. Exemplo, 123 - Cidade, Estado</p>
              <p>Telefone: (00) 1234-5678</p>
            </div>
            <div class="col-lg-6">
              <h4>Navegação</h4>
              <ul class="list-unstyled">
                <li><a href="#section-home" class="text-light">Início</a></li>
                <li><a href="#section-veiculos" class="text-light">Veículos</a></li>
                <li><a href="#section-contato" class="text-light">Contato</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
@endsection
