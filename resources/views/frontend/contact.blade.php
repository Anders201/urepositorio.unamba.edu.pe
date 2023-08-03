@include('frontend.layout.header')


<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img"
    style="background-image: url({{ asset('frontend/assets/img/bg-img/breadcumb.jpg') }});">
    <div class="bradcumbContent">
        <h2>Contacto</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->


<!-- Carrusel de imágenes y mapas -->
<div class="carousel-container">
    <div class="carousel-slide">
        <img src="{{ asset('frontend/assets/img/core-img/ubicacion.jpg') }}" alt="Imagen 1">
    </div>
    <div class="carousel-slide">
        <img src="{{ asset('frontend/assets/img/core-img/repo4.jpg') }}" alt="Imagen 1">
    </div>
    <div class="carousel-slide">
        <img src="{{ asset('frontend/assets/img/core-img/repo5.jpg') }}" alt="Imagen 1">
    </div>
    <div class="carousel-slide">
        <img src="{{ asset('frontend/assets/img/core-img/repo2.jpg') }}" alt="Imagen 1">
    </div>
    <div class="carousel-slide">
        <img src="{{ asset('frontend/assets/img/core-img/repo3.jpg') }}" alt="Imagen 1">
    </div>
</div>


<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-content">
                    <div class="row">
                        <!-- Contact Information -->
                        <div class="col-12 col-lg-5">
                            <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                <div class="section-heading text-left">
                                    <span>---</span>
                                    <h3>Contactános</h3>
                                    <p class="mt-30"></p>
                                </div>

                                <!-- Contact Social Info -->
                                <div class="contact-social-info d-flex mb-30">
                                    <a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>

                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <p>Primer piso de,<br> Ing. Minas</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="fas fa-phone-square-alt"></i>
                                    </div>
                                    <p>Cel: 921 833 783 <br>Tel: 203-808-8648</p>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="contact-icon mr-15">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <p>repositorio@unamba.edu.pe</p>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Form Area -->
                        <div class="col-12 col-lg-6">
                            <div class="section-heading text-left">
                                <span>---</span>
                                <h3>Únete al grupo de WhatsApp </h3>
                                <p class="mt-30"></p>
                            </div>
                            <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                <img src="{{ asset('frontend/assets/img/bg-img/QRrepositorio.png') }}"
                                    alt="QR Repositorio" class="img-fluid w-100">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

@include('frontend.layout.footer')
