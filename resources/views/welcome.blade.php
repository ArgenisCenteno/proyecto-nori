@extends('layouts.app')

@section('content')
<header class="hero-section">
    <div class="container">
        <div class="row align-items-center py-4 g-5">
            <div class="col-12 col-md-6">
                <div class="text-center text-md-start">
                    <h1 class="display-md-2 display-4 fw-bold text-dark pb-2">
                        <span class="text-primary">Farmagarba </span> tú farmacia de confianza
                    </h1>
                    <p class="lead">
                        Conoce todos nuestros productos, estamos para servirte.
                    </p>
                    <a class="btn btn-primary px-5 py-3 mt-3 fs-5 fw-medium" href="{{ route('products') }}"> 
                        Ver productos
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="https://images.pexels.com/photos/3987224/pexels-photo-3987224.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="img-fluid" alt="a man using vr gadget" />
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row align-items-center gx-3 gy-5 py-5 mt-5">
        <div class="col-12 col-md-12 col-lg-5">
            <img src=https://images.pexels.com/photos/5910953/pexels-photo-5910953.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                class="img-fluid mx-auto d-block" alt="a man using vr gadget" />
        </div>
        <div class="col-12 col-md-12 text-center text-lg-start col-lg-7">
            <h2 class="fw-bold text-primary fs-1 pb-3">Sobre nosotros</h2>
            <p class="about-text">
                En Farmagarba, nos dedicamos a ofrecerte una amplia gama de productos farmacéuticos y de cuidado
                personal, todos seleccionados con la más alta calidad. Nuestro equipo de profesionales está siempre
                disponible para brindarte asesoría personalizada, garantizando que encuentres exactamente lo que
                necesitas para tu bienestar. Con un ambiente acogedor y precios competitivos, en Farmagarba creemos que
                cuidar de ti y de tu familia nunca debería ser complicado. ¡Visítanos y descubre cómo podemos ayudarte a
                vivir mejor!
            </p>


        </div>
    </div>
</div>



<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Estamos para servirte</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Farmagarba
          </h6>
          <p>
            Empresa farmaceutica, Punta de Mata
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
       
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           Enlaces Útiles
          </h6>
          <p>
            <a href="#!" class="text-reset">Precios</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Productos</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Pedidos</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Atención al cliente</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3"></i> Avenida Bolívar, calle sucre local 43</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            atencionalcliente@farmagarba.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 04248000000</p>
          <p><i class="fas fa-print me-3"></i> + 04248000000</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-reset fw-bold" href="#">Farmagarba C.A</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

@endsection