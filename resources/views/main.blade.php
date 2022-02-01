
<!-- MENSAJE DE bIENVENIDA -->
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Albis shop</h1>
        <p class="lead text-muted">Rebosos, bolsas, sacos... todas tus prendas a un solo click. Pidelas desde whatsapp :)</p>
        <p>
          <a href="#" class="btn btn-success my-2"><span>Visita lo más nuevo <i class="bi bi-arrow-right-circle-fill"></i></span></a>
          <a href="#" class="btn btn-primary my-2"><span>Tienes dudas, contactanos <i class="bi bi-question-octagon-fill"></i></span></a>
        </p>
      </div>
    </div>
  </section>
  <!-- ALBUMN DE CATEGORIAS-->
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @forelse ($categories as $category)
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/{{ $category->catImage }}" class="card-img-top" alt="..." width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
              <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <p class="card-text">{{ $category->name }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-success">Ver acticulos   <i class="bi bi-arrow-bar-right"></i></button>
                    <button type="button" class="btn btn-sm btn-outline-primary">Compartir <i class="bi bi-share"></i></button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          @empty
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/notfound.png" class="card-img-top" alt="..." width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice">
              <div class="card-body">
                <h5 class="card-title">nodata</h5>
                <p class="card-text">nodata</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-success">Ver acticulos   <i class="bi bi-arrow-bar-right"></i></button>
                    <button type="button" class="btn btn-sm btn-outline-primary">Compartir <i class="bi bi-share"></i></button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          @endforelse




      </div>
    </div>
  </div>
