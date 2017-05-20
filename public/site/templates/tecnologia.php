<?php include('./_head.php'); ?>
<main class="j-workspace">
   <!--  BKT Title-->
    <section class="bkt-features for-titles j-bg-gray-ghost">
      <div class="bkt-features-wrap for-titles">
        <div class="bkt-features-wrap-middle-down-title">
          <h1>Tecnología</h1>
          <p class="sub-title">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Quasi incidunt 
            <strong>rem magni consequatur ratione veritatis quidem totam dolor!</strong>
          </p>
          <div class="paragraph">
            <p>Trabajamos con el mejor equipamiento y tecnología del mundo gracias a nuestra alianza con PBSC Urban Solutions, empresa líder en el ramo con más de 100 patentes individuales, presencia en 15 ciudades alrededor del mundo </p>
            <p>como Londres y Nueva York, y ciudades mexicanas como Guadalajara y Toluca; más de 3,500 estaciones y 45,000 bicicletas alrededor del mundo.  </p>
          </div>
        </div>
      </div>
    </section>
    <!--  Explicación  -->
    <section class="bkt-features j-bg-gray-lighter">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-explain-image">
          <h2>Tecnología</h2>
          <div class="image-container">
           <div id="exp-station-1" class="message-for-station">
              <h4>1.- Modulable</h4>
              <hr class="right">
              <p>1 El sistema de montaje sobre placas modulables, permite instalar las estaciones sin necesidad de obra civil, de manera ágil y segura. Además permite modificar el tamaño de las estaciones según la demanda.</p>
            </div>
           <div id="exp-station-2" class="message-for-station display-hidden">
              <h4>2.- Modulable</h4>
              <hr class="right">
              <p>2 El sistema de montaje sobre placas modulables, permite instalar las estaciones sin necesidad de obra civil, de manera ágil y segura. Además permite modificar el tamaño de las estaciones según la demanda.</p>
            </div>
           <div id="exp-station-3" class="message-for-station display-hidden">
              <h4>3.- Modulable</h4>
              <hr class="right">
              <p>3 El sistema de montaje sobre placas modulables, permite instalar las estaciones sin necesidad de obra civil, de manera ágil y segura. Además permite modificar el tamaño de las estaciones según la demanda.</p>
            </div>
           <div id="exp-station-4" class="message-for-station display-hidden">
              <h4>4.- Modulable</h4>
              <hr class="right">
              <p>4 El sistema de montaje sobre placas modulables, permite instalar las estaciones sin necesidad de obra civil, de manera ágil y segura. Además permite modificar el tamaño de las estaciones según la demanda.</p>
            </div>
           <div id="exp-station-5" class="message-for-station display-hidden">
              <h4>5.- Modulable</h4>
              <hr class="right">
              <p>5 El sistema de montaje sobre placas modulables, permite instalar las estaciones sin necesidad de obra civil, de manera ágil y segura. Además permite modificar el tamaño de las estaciones según la demanda.</p>
            </div>
            <div class="image" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495244812/images/estacion.png');"></div>
            <span class="explain-image-circle station-one"   onclick="toggleStationInfo(1)">1</span>
            <span class="explain-image-circle station-two"   onclick="toggleStationInfo(2)">2</span>
            <span class="explain-image-circle station-three" onclick="toggleStationInfo(3)">3</span>
            <span class="explain-image-circle station-four"  onclick="toggleStationInfo(4)">4</span>
            <span class="explain-image-circle station-five"  onclick="toggleStationInfo(5)">5</span>
          </div>
        </div>
      </div>
    </section>
   <!--  BKT Mensaje Jumbo-->
   <section class="bkt-jumbo-message">
     <div class="j-wrap">
       <p>
         Un sistema de bicicletas públicas cambia las reglas <br>
         de juego en la ciudad: donde es implementado, <br>
         <strong>¡La gente lo adopta espatáneamente!</strong>
       </p>
       <hr>
     </div>
   </section>
    <!--  Explicación  -->
    <section class="bkt-features j-bg-gray-lighter">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-explain-image">
          <h2>La Bicicleta</h2>
          <p class="j-content-50">Nuestra bicicleta se ha convertido en el ícono de los sistemas de bicicletas públicas en el mundo por su diseño, manejo y confiabilidad. Bicicleta robusta pero de fácil manejo durable y atractiva, fabricada aleaciones de aluminio y procesos de alta ingeniería. </p>
          <div class="image-container">
            <div id="exp-bike-1" class="message-for-station">
              <h4>1.- Manubrio</h4>
              <hr class="right">
              <p>1 De una sola pieza para protegertodos los componentes</p>
            </div>
            <div id="exp-bike-2" class="message-for-station display-hidden">
              <h4>2.- Cuadro</h4>
              <hr class="right">
              <p>2 El sistema de montaje sobre placas modulables, permite instalar las estaciones sin necesidad de obra civil, de manera ágil y segura. Además permite modificar el tamaño de las estaciones según la demanda.</p>
            </div>
            <div id="exp-bike-3" class="message-for-station display-hidden">
              <h4>3.- Llantas</h4>
              <hr class="right">
              <p>3 El sistema de montaje sobre placas modulables, permite instalar las estaciones sin necesidad de obra civil, de manera ágil y segura. Adeermite modificar el tamaño de las estaciones según la demanda.</p>
            </div>
            <div class="image" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495244812/images/bici-explicacion.png');"></div>
            <span class="explain-image-circle bike-one"   onclick="toggleBikeInfo(1)">1</span>
            <span class="explain-image-circle bike-two"   onclick="toggleBikeInfo(2)">2</span>
            <span class="explain-image-circle bike-three" onclick="toggleBikeInfo(3)">3</span>
          </div>
        </div>
      </div>
    </section>
<?php include('./_foot.php'); ?>
 <script>
    function toggleStationInfo(number){
      var x=0;
      for (x = 1; x < 6; x++){
        console.log ("Test" + x);
        $( "#exp-station-" + x ).fadeOut();
      }
      $( "#exp-station-" + number ).fadeIn();
    }
    function toggleBikeInfo(number){
      var x=0;
      for (x = 1; x < 4; x++){
        $( "#exp-bike-" + x ).fadeOut();
      }
//       $( "#exp-bike-" + number ).removeClass('hidden');
       $( "#exp-bike-" + number ).fadeIn();
      
      
    }
  </script>