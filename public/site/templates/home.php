<?php include('./_head.php'); ?>
  <!--  BKT Slides -->
<?php $image=$page->img1;
        if($image)
          $img_thumb= $image->height(800, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
  <div class="j-workspace slider" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
    <div class="j-color-layer">
     <div class="j-wrap">
       <h1 align="center"><?php echo $page->headline; ?></h1>
     </div>
    </div>
  </div>
  <main class="j-workspace">
  <!--  BKT Fortalezas-->
   <section class="bkt-strengths">
     <div class="j-wrap grid">
      <div class="unit one-third">
        <img src="<?php echo $config->urls->templates; ?>static/455375-1495244812/images/icono-diseño.svg" alt="Icono diseño fortalezas BKT bici pública">
        <h3>Diseño</h3>
        <p>
          Diagnóstico de la ciudad y definicón de polígonos de intervención, diseño de la red, dimensión y capacidad de estaciones dentro de un mapa.
        </p>
      </div>
      <div class="unit one-third">
        <img src="<?php echo $config->urls->templates; ?>static/455375-1495244812/images/icono-implementacion.svg" alt="Icono implementación fortalezas BKT bici pública">
        <h3>Implementación</h3>
        <p>
          Diagnóstico de la ciudad y definicón de polígonos de intervención, diseño de la red, dimensión y capacidad de estaciones dentro de un mapa.
        </p>
      </div>
      <div class="unit one-third">
        <img src="<?php echo $config->urls->templates; ?>static/455375-1495244812/images/icono-operacion.svg" alt="Icono operación fortalezas BKT bici pública">
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
       <p><?php echo $page->txt1; ?></p>
       <hr>
     </div>
   </section>
   <!--  BKT Fortalezas = Experiencia-->
   <section class="bkt-features j-bg-gray-lighter">
     <div class="bkt-features-wrap">
       <div class="bkt-features-wrap-text">
         <h2><?php echo $page->title1; ?></h2>
         <p><?php echo $page->txt2; ?></p>
         <a class="bkt-btn" href="">Saber más</a>
       </div>
       <?php $image=$page->img2;
        if($image)
          $img_thumb= $image->size(1200,800, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
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
          $img_thumb= $image->size(1200,800, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo desktop" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
       </div>
       <div class="bkt-features-wrap-text">
         <h2><?php echo $page->title2; ?></h2>
         <p><?php echo $page->txt3; ?></p>
         <hr class="right">
       </div>
       <!--  The next container show a photo in mobile and hidden in desktop for esthetic reason  -->
       <?php $image=$page->img3;
        if($image)
          $img_thumb= $image->size(1200,800, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo mobile" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
       </div>
     </div>
   </section>
   <!--  BKT Fortalezas = Transporte Masivo-->
  <?php $image=$page->img6;?>
   <section class="bkt-features j-bg-gray-regular" <?php if($image) { ?> style="background-image: url('<?php echo $image->url; ?>'); <?php } ?>">
     <div class="bkt-features-wrap">
       <div class="bkt-features-wrap-middle-down-text">
        <h2><?php echo $page->title3; ?></h2>
        <div class="text">
          <div class="subtitle-container">
            <p class="sub-title">
              <?php echo str_replace("<p>", "", $page->txt4); ?>
            </p>
            <hr class="right">
          </div>
          <?php echo $page->txt5; ?>
          <?php echo $page->txt6; ?>
        </div>
       </div>
     </div>
   </section>
   <!--  BKT Por qué introducir el ciclismo?  -->
   <section class="bkt-features j-bg-color-warning">
     <div class="bkt-features-wrap">
       <div class="bkt-features-wrap-text fifthy-percent">
         <h2><?php echo $page->title4; ?></h2>
         <?php echo $page->txt7; ?>
       </div>
       <?php $image=$page->img4;
        if($image)
          $img_thumb= $image->size(1200,800, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
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
          <strong><?php echo $page->title5; ?></strong> <br>
          <?php echo $page->txt8; ?>
        </p>
        <hr>
      </div>
     </div>
    </section>
  </main>
<?php include('./_foot.php'); ?>
