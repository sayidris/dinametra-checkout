<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout Page</title>
  <!--    //  TESTIMONIALS CAROUSEL HOOK -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css"
    href="http://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="res/testimonial.css">
  <!--    //  TESTIMONIALS CAROUSEL HOOK -->
  <script src="res/fontawesome.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="res/styles.css">
</head>

<body>
<div class="mainbody">
  <div class="nav">
    <div class="nav-item"><img src="images/head-logo.png" /></div>
    <div class="nav-item">
      <div class="form-btn-n">Cancelar</div>
    </div>
  </div>
  <div class="content">
    <div class="column1">
      <div class="formbox">

        <form class="main-form">

          <!--- Form 1 of 2 -->
          <div class="form_section">
            <div style="text-align:left;">
              <span class="form-stage-btn">
                Passo&nbsp;1&nbsp;de&nbsp;2
              </span>
            </div>
            <div class="progressbar-base">
              <div class="progressbar-50"></div>
            </div>
            <div style="text-align:left;">

              <span style="color: #f4263e">
                <h2>Información</h2>
              </span>
              <span style="color: #787c9a; font-size: 13px;">
                Completa tus datos
              </span>
              <input type="text" name="fname" id="fname" placeholder="Nombre*" /><br>
              <input type="text" name="lname" id="lname" placeholder="Apellido*" /><br>
              <input type="email" name="email" id="email" placeholder="E-mail*" /><br>
              <input type="email" name="cemail" id="cemail" placeholder="Confirma tu e-mail*" /><br>
              <input type="tel" name="phone" id="phone" placeholder="Telefono*" /><br>
              <span style="color: #787c9a; font-size: 11px;">
                *Te contactaremos solo si es necesario<br>
                *Todos los campos con asterisco son obligatorios
              </span>
              <span style="color: #f4263e">
                <h2>Facturación</h2>
                <input type="text" name="street" id="street" placeholder="Calle*" /><br>
                <select name="colonia" id="">
                  <option value="" selected>Colonia*</option>
                </select>
                <div class="input-50">
                  <select name="cp" id="">
                    <option value="" selected>CP*</option>
                  </select>
                  <select name="mexico" id="">
                    <option value="" selected>México*</option>
                  </select>
                </div>
                <div style="color: #787c9a; font-size: 9px; margin: 10px 0; line-height: 1.5em;">
                  Dinametra está obligado por ley a recaudar los impuestos sobre las transacciones de las compras
                  realiadas en determinadas jurisdicciones fiscales.
                </div>
                <div class="rbtn">
                  <input type="radio" name="tc" id="tc" value="yes"> Acepto los <span style="color: #f4263e;">Términos y
                    Condiciones</span>
                </div>
                <div style="text-align:right;">
                  <button class="form-btn next-btn long_btn">
                    Siguiente
                  </button>
                </div>
              </span>
            </div>
          </div>

          <!--- Form 2 of 2 -->
          <div class="form_section">
            <div style="text-align:left;">
              <span class="form-stage-btn">
                Passo&nbsp;2&nbsp;de&nbsp;2
              </span>
            </div>
            <div class="progressbar-base">
              <div class="progressbar-98"></div>
            </div>
            <div style="text-align:left;">

              <div style="color: #f4263e">
                <span style="display:inline-block; width:55%; text-align:left;"><h2>Método de pago</h2></span>
                <span style="display:inline-block; width:36%; height:100%; vertical-align:top; color:#787c9a; font-size:10px; padding:30px 0; text-align:right;">Conexión Segura</span>
                <span style="display:inline-block; width:5%; vertical-align:top; padding:30px 0; text-align:right;">
                <i class="fa fa-lock"></i></span>
              </div>
              <span style="color: #787c9a; font-size: 13px;">
                Completa tus datos
              </span>
              <div class="inp" style="font-size:22px;">
                <input type="radio" name="paymethod" id="paymethod" value="paypal"> <i class="fab fa-paypal"></i> <i class="fab fa-cc-paypal"></i>
              </div>
              <div class="inp">
                <input type="radio" name="paymethod" id="paymethod" value="card" style="vertical-align:middle;">
                <span> 
                  <span class="cardtext1">Tarjeta de crédito/débito</span> 
                  <span class="cardimg"><img src="images/cardpay.png" /></span> 
                </span>
              </div>
              <div class="inp cardpayment">
                <div class="cardtext"><b>Titular de la tarjeta</b></div>
                <div class="cardbox">
                  <i class="fas fa-credit-card" style="vertical-align:bottom;"></i>
                  <span  class="cardno">
                    <input type="number" name="cardno" id="cardno" /><br>
                  </span>
                  <span  class="carddate">
                    <input  class="carddate" type="text" name="carddate" id="cardno" placeholder="MM/YY" />
                  </span>
                  <span  class="cardccv">
                    <input class="cardccv"  type="number" name="cardccv" id="cardccv" placeholder="CCV" />
                  </span>
                </div>
              </div>
              <span style="color: #f4263e">
                <div class="rbtn">
                  <input type="radio" name="tc2" id="tc2" value="yes"> Acepto los <span style="color: #f4263e;">Términos y
                    Condiciones</span>
                </div>
                <div style="text-align:right;">
                  <div class="prev-btn"><b>Passo&nbsp;1&nbsp;de&nbsp;2</b></div>
                  <button class="form-btn long_btn submit">Pago</button>
                </div>
              </span>
            </div>
          </div>
<!--
        </form>
-->
      </div>
    </div>
  
    <div class="column2">
      <div class="sumtitle">
        <span style="color: #f4263e">
          <h2>Resumen</h2>
        </span>
      </div>
      <div class="sumbox">
        <div style="text-align: center; font-size: 12px;">
          <div style="display:inline-block; width: 65%; margin:auto; text-align:left; vertical-align: middle;">
            <div style="display:inline-block; position:relative;">
              <i class="fa fa-times-circle"
                style="position:absolute; top:-10px; left:-10px; color:#f4263e; font-size:24px;"></i>
              <img src="images/product-image-placeholder.png" width="80px;" />
            </div>
            <div style="display:inline-block; color:#787c9a; padding: 10% 10px; vertical-align: top;">Curso de Tiktok ads
            </div>
          </div>
          <div style="display:inline-block; width: 31%; margin:auto; text-align:left;">
            <span style="color:#f4263e;">$1,234&nbsp;MXN</span><br><span style="color:#787c9a;"><del>$1,234&nbsp;MXN</del></span>
          </div>
<!--
          <form class="main-form cp-form">
-->
            <div class="main-form cp-form">
              <div style="display:inline-block; width: 55%; margin:auto; text-align:left;">
                <input type="text" id="coupon" name="coupon" placeholder="Agregar cupón de descuento" style="width:80%; padding:10px;" />
              </div>
              <div style="display:inline-block; width: 42%; margin:auto; text-align:left;">
                <button class="submit form-btn">Aplicar</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <div style="color: #f4263e;">
    <h2>Testimonios</h2>
    </div>
    <?php include("testimonial.php"); ?>
  </div>
</div> 
<script>
  //  TESTIMONIALS CAROUSEL HOOK
  jQuery(document).ready(function ($) {
    "use strict";

    $('#customers-testimonials').owlCarousel({
      loop: true,
      center: true,
      items: 3,
      margin: 0,
      autoplay: true,
      dots: true,
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

  //Form sectioning
  const nextBtn = document.querySelector('.next-btn');
  const prevBtn = document.querySelector('.prev-btn');
  const sections = document.querySelectorAll('.form_section');

  let currentSection = 0;

  nextBtn.addEventListener('click', (event) => {
    event.preventDefault(); // prevent form submission
    sections[currentSection].style.display = 'none';
    currentSection++;
    sections[currentSection].style.display = 'block';
    sections[currentSection].scrollIntoView({ behavior: 'smooth' }); // scroll to top of section
  });

  prevBtn.addEventListener('click', (event) => {
    event.preventDefault(); // prevent form submission
    sections[currentSection].style.display = 'none';
    currentSection--;
    sections[currentSection].style.display = 'block';
    sections[currentSection].scrollIntoView({ behavior: 'smooth' }); // scroll to top of section
  });

  $(document).ready(function(){
    $('input[name=paymethod]').change(function(){
      if($(this).val() == 'card'){
        $('.cardpayment').show();
      } else {
        $('.cardpayment').hide();
      }
    });
  });

</script>

<script>
    // Get the form element
    const form = document.querySelector('.main-form');

    // Add event listener for the form submission
    form.addEventListener('submit', function(event) {
        // Prevent the form from submitting via HTTP
        event.preventDefault();

        // Get the selected payment method
        const paymentMethod = document.querySelector('input[name="paymethod"]:checked').value;

        // Call the appropriate payment function based on the selected method
        if (paymentMethod === 'paypal') {
            paypalPayment();
        } else if (paymentMethod === 'card') {
            cardPayment();
        }
    });

    // Function to handle PayPal payment
    function paypalPayment() {
        // Add your PayPal payment code here
        console.log('Processing PayPal payment...');
    }

    // Function to handle card payment
    function cardPayment() {
        // Add your card payment code here
        console.log('Processing card payment...');
    }

    // AJAX form submission
    function submitForm() {
        // Get the form data
        const formData = new FormData(form);

        // Send the form data via AJAX
        fetch('/your-submit-url', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            // Handle the response
            console.log('Form submission successful');
        })
        .catch(error => {
            // Handle the error
            console.error('Form submission failed', error);
        });
    }

    // Add event listener for the "Pago" button click
    const btn = document.querySelector('.submit');
    btn.addEventListener('click', function() {
        // Submit the form via AJAX
        submitForm();
    });
</script>

</body>

</html>