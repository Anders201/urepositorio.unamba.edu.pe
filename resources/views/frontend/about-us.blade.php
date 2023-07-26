@include('frontend.layout.header')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
    <div class="bradcumbContent">
        <h2>Acerca de nosotros</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area mt-50 section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span>Repositorio</span>
                    <h3>Institucional UNAMBA</h3>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto wow fadeInUp" data-wow-delay="100ms">
                <p class="texto-llamativo">Bienvenidos al Repositorio Institucional Digital, cuyo objetivo es facilitar y mejorar la visibilidad de la producción científica y académica de la Universidad permitiendo el acceso abierto a sus contenidos y garantizando la preservación y conservación de dicha producción, además de aumentar el impacto del legado Institucional.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                    <img src="img/bg-img/bg-3.jpg" alt="">
                    <img src="img/bg-img/bg-2.jpg" alt="">
                    <img src="img/bg-img/bg-1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<!-- ##### Team Area Start ##### -->
<section class="teachers-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <h3>RESPONSABLE</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Teachers -->
            <div class="col-12">
                <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                    <!-- Thumbnail -->
                    <div class="teachers-thumbnail">
                        <img src="img/bg-img/tea1.jpg" alt="">
                    </div>
                    <!-- Meta Info -->
                    <div class="teachers-info mt-30">
                        <h5>Mg. Karina Gamarra Peralta</h5>
                        <span>ENCARGADO DEL ÁREA</span>
                    </div>
                </div>
            </div>



        </div>
</section>
<!-- ##### Features Area Start ##### -->
@include('frontend.layout.footer')