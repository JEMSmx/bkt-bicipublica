<?php include('./_head.php'); ?>
<main class="j-workspace">
   <!--  BKT Title-->
   <section class="bkt-features for-titles-contact j-bg-gray-lighter">
      <div class="bkt-features-wrap for-titles-contact">
        <div class="bkt-features-wrap-middle-down-title">
          <h1>Contacto</h1>
          <p class="sub-title">
            Nos gustaría escuchar acerca de tu proyecto o tus ideas. Si estas interesado en nuestros servicios <br>
            <strong>contáctanos</strong>
          </p>
        </div>
      </div>
    </section>
    <!--  BKT Fortalezas = Bikla about-->
    <section class="bkt-features j-bg-gray-ghost">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-text fifthy-percent">
          <h3>Dirección</h3>
          <p>
            Colonias 221 Piso 12, Col. Americana, cp 44160, <br>
            Guadalajara, México
          </p>
          <h3>Teléfono</h3>
          <p>
            <a href="tel:38263655">(33) 3826 3655</a>
          </p>
          <h3>Correo electronico</h3>
          <p>
            <a href="mailto:info@bktbicipublica.com">info@bktbicipublica.com</a>
          </p>
        </div>
        <div id="bkt-contact-map" class="bkt-features-wrap-photo fifthy-percent" style="background-image: url('https://dummyimage.com/600x400/000/fff');">
          
        </div>
      </div>
    </section>
    <!--  BKT Mensaje Jumbo-->
    <!--  For the correct re-use of the element is nesesary the inline image  -->
    <section class="bkt-jumbo-message-blue" style=" background-image: url('http://theradavist.com/wp-content/uploads/2017/05/RHCBrooklyn2017-3958-1335x890.jpg');">
     <div class="blue-layer">
       <div class="j-wrap">
        <p>
          <strong>¿por qué implementar un sistema de bicicletas públicas?</strong> <br>
          Posiciona fácilmente en la opinión pública la idea de transportarse en bicicleta de forma convencional
        </p>
        <hr>
      </div>
     </div>
    </section>
  </main>
<?php include('./_foot.php'); ?>
  <script>
    function toggleHeaderResponsive() {
      $('header').toggleClass("mobile-active")
    }
    document.getElementById("menu-icon").addEventListener('click', toggleHeaderResponsive);
    document.getElementById("close-icon").addEventListener('click', toggleHeaderResponsive);
  </script>
  <script type="text/javascript">
      // When the window has finished loading create our google map below
      google.maps.event.addDomListener(window, 'load', init);

      function init() {
          // Basic options for a simple Google Map
          // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
          var mapOptions = {
              // How zoomed in you want the map to start at (always required)
              zoom: 11,

              // The latitude and longitude to center the map (always required)
              center: new google.maps.LatLng(20.672773,-103.365779),
              zoom: 16,// New York
            

              // How you would like to style the map. 
              // This is where you would paste any style found on Snazzy Maps.
              styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

          // Get the HTML DOM element that will contain your map 
          // We are using a div with id="map" seen below in the <body>
          var mapElement = document.getElementById('bkt-contact-map');

          // Create the Google Map using our element and options defined above
          var map = new google.maps.Map(mapElement, mapOptions);
          // Let's also add a marker while we're at it
          var image = {
            url:'assets/images/location-bkt-bicipublica.png',
          };
          var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<h2>BKT Bicipública</h2>'+
              '<div id="bodyContent">'+
              '<p>Ubicado en Vía Libertad en el piso numero 12. <br> Atención a clientes con previa cita. <br><a target="_blank" href="https://www.google.com.mx/maps/dir//V%C3%8DA+LIBERTAD,+Calle+Colonias+221,+Americana,+44160+Guadalajara,+Jal./@20.672773,-103.365779,15z/data=!4m15!1m6!3m5!1s0x0:0xf1641c200c61ae6d!2sV%C3%8DA+LIBERTAD!8m2!3d20.672773!4d-103.365779!4m7!1m0!1m5!1m1!1s0x8428ae045fce0dd5:0xf1641c200c61ae6d!2m2!1d-103.365779!2d20.672773">Como llegar</a></p>'+
              '</div>'+
              '</div>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString,
        });
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(20.672773,-103.365779),
            map: map,
            animation: google.maps.Animation.DROP,
            title: 'BKT Bici pública',
            icon: image
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
        infowindow.open(map,marker);
      }
  </script>