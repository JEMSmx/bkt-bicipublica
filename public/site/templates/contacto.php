<?php include('./_head.php'); ?>
<main class="j-workspace">
   <!--  BKT Title-->
   <section class="bkt-features for-titles-contact j-bg-gray-ghost">
      <div class="bkt-features-wrap for-titles-contact">
        <div class="bkt-features-wrap-middle-down-title" style="width: 100%;">
          <h1><?php echo $page->title; ?></h1>
          <p class="sub-title">
             <?php echo str_replace("<p>", "", $page->txt1); ?>
          </p>
        </div>
      </div>
    </section>
    <!--  BKT Fortalezas = Bikla about-->
    <section class="bkt-features j-bg-gray-lighter">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-text fifthy-percent">
          <h3>Dirección</h3>
             <?php echo $page->title5; ?><br>
            <?php echo $page->title2; ?>
          <h3>Teléfono</h3>
          <p>
            <a href="tel:<?php echo intval(preg_replace('/[^0-9]+/', '', $page->title3), 10); ?>"><?php echo $page->title3; ?></a>
          </p>
          <h3>Correo electronico</h3>
          <p>
            <a href="mailto:<?php echo $page->title4; ?>"><?php echo $page->title4; ?></a>
          </p>
        </div>
       <?php $image=$page->img1;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div id="bkt-contact-map" class="bkt-features-wrap-photo fifthy-percent">
        </div>
      </div>
    </section>
    <!--  BKT Mensaje Jumbo-->
    <!--  For the correct re-use of the element is nesesary the inline image  -->
    <?php $image=$page->img2;?>
   <section class="bkt-jumbo-message-blue multiply-blue" <?php if($image) { ?> style="background-image: url('<?php echo $image->url; ?>'); <?php } ?>">
       <div class="j-wrap">
       <p data-aos="zoom-in">
          <strong><?php echo $page->title1; ?></strong> <br>
          <?php echo strip_tags($page->txt2, "<br>"); ?>
        </p>
        <hr>
      </div>
    </section>
  </main>
<?php include('./_foot.php'); ?>
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
              center: new google.maps.LatLng(20.670622,-103.3545505),
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
            url:'<?php echo $config->urls->templates; ?>static/455375-1495344734/images/location-bkt-bicipublica.png',
          };
          var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<h2>BKT Bicipública</h2>'+
              '<div id="bodyContent">'+
              '<p>Ubicado en Av Federalismo 403 entre Av. La Paz y Libertad. <br> Atención a clientes con previa cita. <br><a target="_blank" href="https://www.google.com.mx/maps/place/MIBICI+Guadalajara/@20.670622,-103.3545505,15z/data=!4m5!3m4!1s0x0:0x34bb18a86a5aa163!8m2!3d20.670622!4d-103.3545505">Como llegar</a></p>'+
              '</div>'+
              '</div>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString,
        });
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(20.670622,-103.3545505),
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