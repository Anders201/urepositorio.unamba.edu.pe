@include('frontend.layout.header')


<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Contacto</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Google Maps ##### -->
<!-- Carrusel de imágenes y mapas -->
<div class="carousel-container">
    <div class="carousel-slide map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.6602031517323!2d-72.87031764519674!3d-13.617553290733943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d031110cca7df%3A0x76b548e9c776d989!2sUniversidad%20Nacional%20Micaela%20Bastidas%20de%20Apurimac%20UNAMBA!5e0!3m2!1ses!2spe!4v1689608920572!5m2!1ses!2spe" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="carousel-slide">
        <img src="img/core-img/ubicacion.jpg" alt="Imagen 1">
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
                        <div class="col-12 col-lg-7">
                            <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                <form action="#" method="post">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    <button class="btn academy-btn mt-30" type="submit">Enviar</button>
                                </form>
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