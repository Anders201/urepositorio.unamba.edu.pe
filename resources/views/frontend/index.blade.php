@include('frontend.layout.header')


<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url({{ asset('frontend/assets/img/bg-img/bg-1.jpg') }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">Repositorio Institucional UNAMBA</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenido a la pagina <br>del
                                repositorio</h2>
                            <a href="form.php" class="btn academy-btn" target="_blank" data-animation="fadeInUp" data-delay="700ms">Iniciar
                                trámite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url({{ asset('frontend/assets/img/bg-img/bg-2.jpg') }});">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <h4 data-animation="fadeInUp" data-delay="100ms">Repositorio Institucional UNAMBA</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Bienvenido a la pagina <br>del
                                repositorio</h2>
                            <a href="state.php" class="btn academy-btn" target="_blank" data-animation="fadeInUp" data-delay="700ms">Estado
                                trámite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->
<!-- ##### Top Feature Area Start ##### -->
<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-6">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="fas fa-play"></i>
                                <h5>Inicio de trámite</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-6">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="fas fa-th-list"></i>
                                <h5>Estado de trámite</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Feature Area End ##### -->

<!-- ##### info Start ##### -->
<div class="container">
    <div class="academy-courses-area">
        <div class="row justify-content-center">
            <!-- Área de inicio individual -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area mb-10 wow fadeInUp" data-wow-delay="400ms">
                    <div class="state-content text-center"> <!-- Agregar la clase text-center para centrar el contenido -->
                        <a href="state.php" class="btn btn-start" target="_blank" data-delay="400ms">Estado trámite</a>
                    </div>
                </div>
            </div>
            <!-- Área de estado individual -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area mb-10 wow fadeInUp" data-wow-delay="400ms">
                    <div class="state-content text-center"> <!-- Agregar la clase text-center para centrar el contenido -->
                        <a href="state.php" class="btn btn-start" target="_blank" data-delay="400ms">Estado trámite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Course Area End ##### -->

<!-- ##### PASOS Area Start ##### -->
<div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url({{ asset('frontend/assets/img/bg-img/bg-2.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="00ms">
                    <span>Pasos para el inicio </span>
                    <h3>TRAMITE ONLINE DE CONSTANCIA DE REPOSITORIO</h3>
                </div>
            </div>
        </div>

        <div class="contenedor-articulo">
            <div class="articulo">
                <img src="{{ asset('frontend/assets/img/bg-img/P01.png') }}" alt="">
                <h2>PASO 1: INGRESAR</h2>
                <p>
                    <a href="#" target="_blank" style="color: white;">- vrin.unamba.edu.pe</a>
                    <a href="https://vrin.unamba.edu.pe" target="_blank" style="color: rgb(111, 2, 111);">(Click aquí)</a><br>
                <h6>- Opción repositorio</h6>
                <h6>- Iniciar trámite online</h6>
                </p>
            </div>

            <!-- Paso 02 -->

            <div class="articulo">
                <img src="{{ asset('frontend/assets/img/bg-img/P02.png') }}" alt="">
                <h2>PASO 2: INICIAR TRAMITE</h2>
                <p>
                <h6>- Generar hoja de autorización</h6>
                <h6>- Llenada con datos de la tesis y firmada</h6>
                </a><br>
                <h6>- Generar hoja</h6>
                <a href="https://drive.google.com/file/d/1CEGXeUGg0vVGGbAoyxvXvK5GrvryWksF" target="_blank" style="color: rgb(111, 2, 111);">(click aquí)</a>
                </p>
            </div>

            <!-- Paso 03 -->

            <div class="articulo">
                <img src="{{ asset('frontend/assets/img/bg-img/P03.png') }}" alt="">
                <h2>PASO 3: ENVÍO</h2>
                <p>
                <h6>- Acta de sustentación</h6>
                <h6>- Hoja de Autorización</h6>
                <h6>- Tesis final aprobada</h6>
                </p>
                <h6>La tesis será validada por el asesor</h6>
            </div>

            <!-- Paso 04 -->
            <div class="articulo">
                <img src="{{ asset('frontend/assets/img/bg-img/P04.png') }}" alt="">
                <h2>PASO 4: ENTREGA</h2>
                <p>
                <h6>- Apersonarse a la oficina de la unidad de repositorio institucional</h6>

                </p>

            </div>
        </div>
    </div>

</div>
<!-- ##### Testimonials Area End ##### -->

<!-- ##### Partner Area Start linnkear a paginas de la unamba##### -->
<div class="partner-area section-padding-0-90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                    <a href="https://www.unamba.edu.pe" target="_blank"><img src="{{ asset('frontend/assets/img/clients-img/Logotipo-UNAMBA-página-web.png') }}" alt=""></a>
                    <a href="https://vrin.unamba.edu.pe" target="_blank"><img src="{{ asset('frontend/assets/img/clients-img/logo-light.png') }}" alt=""></a>

                    <a href="https://www.gob.pe/concytec" target="_blank"><img src="{{ asset('frontend/assets/img/clients-img/logo-concytec.png') }}" alt=""></a>
                    <a href="https://alicia.concytec.gob.pe" target="_blank"><img src="{{ asset('frontend/assets/img/clients-img/logo-Alicia.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Partner Area End ##### -->

@include('frontend.layout.footer')