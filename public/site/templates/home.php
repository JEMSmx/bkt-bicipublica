<?php include('./_head.php'); ?>
  <!--  BKT Slides -->
<?php $image=$page->img1;
        if($image)
          $img_thumb= $image->height(400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
  <div class="j-workspace slider" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
    <div class="j-color-layer">
     <div class="j-wrap">
       <h1>Diseño, implementación y operación de sistemas de <br> bicicletas públicas.</h1>
     </div>
    </div>
  </div>
  <main class="j-workspace">
  <!--  BKT Fortalezas-->
   <section class="bkt-strengths">
     <div class="j-wrap grid">
      <div class="unit one-third">
        <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/icono-diseño.svg" alt="Icono diseño fortalezas BKT bici pública">
        <h3>Diseño</h3>
        <p>
          Diagnóstico de la ciudad y definicón de polígonos de intervención, diseño de la red, dimensión y capacidad de estaciones dentro de un mapa.
        </p>
      </div>
      <div class="unit one-third">
        <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/icono-implementacion.svg" alt="Icono implementación fortalezas BKT bici pública">
        <h3>Implementación</h3>
        <p>
          Diagnóstico de la ciudad y definicón de polígonos de intervención, diseño de la red, dimensión y capacidad de estaciones dentro de un mapa.
        </p>
      </div>
      <div class="unit one-third">
        <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/icono-operacion.svg" alt="Icono operación fortalezas BKT bici pública">
        <h3>Operación</h3>
        <p>
          Diagnóstico de la ciudad y definicón de polígonos de intervención, diseño de la red, dimensión y capacidad de estaciones dentro de un mapa.
        </p>
      </div>
    </div>
   </section>
   <!--  BKT Mensaje Jumbo-->
   <section class="bkt-jumbo-message">
     <div class="j-wrap">
       <p><strong>Transformamos la ciudad</strong> con el mejor equipo <br> humano y la mejor tecnología.</p>
       <hr>
     </div>
   </section>
   <!--  BKT Fortalezas = Experiencia-->
   <section class="bkt-features j-bg-gray-lighter">
     <div class="bkt-features-wrap">
       <div class="bkt-features-wrap-text">
         <h2>Experiencia</h2>
         <p>Contamos con el equipo y las alianzas especializadas en Urbanismo, Análisis vial, Gestión de Proyectos, Área Jurídica, así como la relación con grupos ciudadanos interesados en cambiar el paradigma actual de ciudad.</p>
         <a class="bkt-btn" href="">Saber más</a>
       </div>
       <?php $image=$page->img2;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
       </div>
     </div>
   </section>
   <!--  BKT Fortalezas = Asesoria-->
   <section class="bkt-features j-bg-color-inverse">
     <div class="bkt-features-wrap ">
       <!--  The next container show a photo in desktop and hidden in mobile for esthetic reason  -->
       <?php $image=$page->img3;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo desktop" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
       </div>
       <div class="bkt-features-wrap-text">
         <h2>Asesoría</h2>
         <p>Apoyamos con el diseño de criterios, geometrías e infraestructura para la movilidad no motorizada. La propuesta es muy simple: devolver la habitabilidad y flujos seguros a peatones y ciclistas, lo que demando un análisis en la zona, para dar solución principalmente a cruces y pasos a nivel.</p>
         <hr class="right">
       </div>
       <!--  The next container show a photo in mobile and hidden in desktop for esthetic reason  -->
       <?php $image=$page->img3;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo mobile" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
       </div>
     </div>
   </section>
   <!--  BKT Fortalezas = Transporte Masivo-->
   <section class="bkt-features j-bg-gray-regular">
     <div class="bkt-features-wrap">
       <div class="bkt-features-wrap-middle-down-text">
        <h2>Transporte Masivo</h2>
        <div class="text">
          <div class="subtitle-container">
            <p class="sub-title">
              <strong>Transformamos la ciudad</strong>
                con el mejor equipo humano
                y la mejor tecnología.
            </p>
            <hr class="right">
          </div>
          <p>Un Sistema de Bicicletas Públicas (SBP) es un servicio de transporte que tiene a la bicicleta como medio para generar desplazamientos de un punto a otro, recorridos de distancias </p>
          <p>cortas recorridos de distancias cortas y funciona como un complemento en el último tramo de los trayectos de otros sistemas de transporte.</p>
        </div>
       </div>
     </div>
   </section>
   <!--  BKT Por qué introducir el ciclismo?  -->
   <section class="bkt-features j-bg-color-warning">
     <div class="bkt-features-wrap">
       <div class="bkt-features-wrap-text fifthy-percent">
         <h2>Por qué introducir el ciclismo urbano en las ciudades?</h2>
         <ul>
           <li>Servicio eficinete de transporte </li>
           <li> Servico accesible y económico</li>
           <li> Acción clara en pro de la salud de los ciudadanos</li>
           <li> Acceptación ciudadana </li>
           <li> Cohesión social</li>
           <li> Implementación de un servicio en tan solo 6  meses </li>
           <li> Alta aceptación ciudadana a bajo costo</li>
         </ul>
       </div>
       <?php $image=$page->img4;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
       </div>
     </div>
   </section>
   <!--  BKT Mensaje Jumbo-->
   <!--  For the correct re-use of the element is nesesary the inline image  -->
   <?php $image=$page->img5;?>
   <section class="bkt-jumbo-message-blue" <?php if($image) { ?> style="background-image: url('<?php echo $image->url; ?>'); <?php } ?>">
     <div class="blue-layer">
       <div class="j-wrap">
        <p>
          <strong>¿por qué implementar un sistema de bicicletas públicas?</strong> <br>
          Se implementan en un periodo corto de tiempo
        </p>
        <hr>
      </div>
     </div>
    </section>
  </main>
<?php include('./_foot.php'); ?>