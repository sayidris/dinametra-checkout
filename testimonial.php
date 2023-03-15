<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <!--    //  TESTIMONIALS CAROUSEL HOOK -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="http://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="res/testimonial.css">
    <!--    //  TESTIMONIALS CAROUSEL HOOK -->
    
  </head>
  <body>
  <section class="testimonials_section layout_padding11 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="custom_heading-container">
              <h4>
                Testimonials
              </h4>
          </div>
          <div style="background-color:rgba(12,170,125,0.1); border-radius:0 5% 5%;">
              <section class="testimonials">
                <div class="container">

                  <div class="row">
                    <div class="col-sm-12">
                      <div id="customers-testimonials" class="owl-carousel">

                        <!--TESTIMONIAL 1 -->
                        <div class="item">
                          <div class="shadow-effect">
                            <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial1.jpg" alt="">
                            <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                          </div>
                          <div class="testimonial-name">EMILIANO AQUILANI</div>
                        </div>
                        <!--END OF TESTIMONIAL 1 -->
                        <!--TESTIMONIAL 2 -->
                        <div class="item">
                          <div class="shadow-effect">
                            <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial2.jpg" alt="">
                            <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                          </div>
                          <div class="testimonial-name">ANNA ITURBE</div>
                        </div>
                        <!--END OF TESTIMONIAL 2 -->
                        <!--TESTIMONIAL 3 -->
                        <div class="item">
                          <div class="shadow-effect">
                            <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                            <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                          </div>
                          <div class="testimonial-name">LARA ATKINSON</div>
                        </div>
                        <!--END OF TESTIMONIAL 3 -->
                        <!--TESTIMONIAL 4 -->
                        <div class="item">
                          <div class="shadow-effect">
                            <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial4.jpg" alt="">
                            <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                          </div>
                          <div class="testimonial-name">IAN OWEN</div>
                        </div>
                        <!--END OF TESTIMONIAL 4 -->
                        <!--TESTIMONIAL 5 -->
                        <div class="item">
                          <div class="shadow-effect">
                            <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial5.jpg" alt="">
                            <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                          </div>
                          <div class="testimonial-name">MICHAEL TEDDY</div>
                        </div>
                        <!--END OF TESTIMONIAL 5 -->
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- END OF TESTIMONIALS -->  
        
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end testimonials --> 
    <script>
    //  TESTIMONIALS CAROUSEL HOOK
    jQuery(document).ready(function($) {
        "use strict";
        
        $('#customers-testimonials').owlCarousel({
            loop: true,
            center: true,
            items: 3,
            margin: 0,
            autoplay: true,
            dots:true,
            autoplayTimeout: 8500,
            smartSpeed: 450,
            responsive: {
                0: {
                items: 1
                },
                768: {
                items: 2
                },
                1170: {
                items: 3
                }
            }
        });
    });
    //  TESTIMONIALS CAROUSEL HOOK

    </script>
  </body>
</html>
