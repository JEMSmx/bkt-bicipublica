<?php include('./_head.php'); ?>
<?php $image=$page->img1;
        if($image)
          $img_thumb= $image->height(800, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
  <div class="j-workspace slider multiply-blue" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
    <div class="j-wrap">
      <h1 data-aos="zoom-in"><?php echo strip_tags($page->headline, "<br>"); ?></h1>
    </div>
  </div>
  <main class="j-workspace">
   <section class="bkt-strengths">
     <div class="j-wrap grid">
      <div class="unit one-third">
        <img data-aos="zoom-in" src="<?php echo $config->urls->templates; ?>static/455375-1495563394/images/icono-diseño.svg" alt="Diseño BKT bici pública">
        <h3 data-aos="zoom-in">Diseño</h3>
        <p data-aos="zoom-in">
          Diagnósticos, definición de polígonos, diseño de la red, dimensión y capacidad de estaciones.
        </p>
      </div>
      <div class="unit one-third">
        <img data-aos="zoom-in" src="<?php echo $config->urls->templates; ?>static/455375-1495563394/images/icono-implementacion.svg" alt="Implementación BKT bici pública">
        <h3 data-aos="zoom-in">Implementación</h3>
        <p data-aos="zoom-in">
          Integración de tecnologías, instalación de estaciones, puesta a punto. Gestión social e institucional. Comunicación. 
        </p>
      </div>
      <div class="unit one-third">
        <img data-aos="zoom-in" src="<?php echo $config->urls->templates; ?>static/455375-1495563394/images/icono-operacion.svg" alt="Operación BKT bici pública">
        <h3 data-aos="zoom-in">Operación</h3>
        <p data-aos="zoom-in">
          Comprender las dinámicas de la ciudad, ofrecer disponibilidad, mantenimiento. Excelencia en el servicio al usuario.
        </p>
      </div>
    </div>
   </section>
   <section class="bkt-jumbo-message">
     <div class="j-wrap">
       <p><?php echo $page->txt1; ?></p>
       <hr>
     </div>
   </section>
   <section class="bkt-features j-bg-gray-lighter">
     <div class="bkt-features-wrap">
       <div class="bkt-features-wrap-text">
         <h2><?php echo $page->title1; ?></h2>
         <p><?php echo $page->txt2; ?></p>
        <?php if($page->check1){ ?>
         <a class="bkt-btn" href="<?php echo $page->url1; ?>"><?php echo $page->title6; ?></a>
        <?php } ?>
       </div>
       <?php $image=$page->img2;
        if($image)
          $img_thumb= $image->size(1200,800, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
       </div>
     </div>
   </section>
   <section class="bkt-features j-bg-color-inverse">
     <div class="bkt-features-wrap ">
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
       <?php $image=$page->img3;
        if($image)
          $img_thumb= $image->size(1200,800, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo mobile" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
       </div>
     </div>
   </section>
  <?php $image=$page->img6;?>
   <section class="bkt-features j-bg-gray-regular multiply-gray" <?php if($image) { ?> style="background-image: url('<?php echo $image->url; ?>'); <?php } ?>">
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
   <?php $image=$page->img5;?>
   <section class="bkt-jumbo-message-blue multiply-blue" <?php if($image) { ?> style="background-image: url('<?php echo $image->url; ?>'); <?php } ?>">
      <div class="j-wrap">
        <p data-aos="zoom-in">
          <strong><?php echo $page->title5; ?></strong> <br>
          <?php echo strip_tags($page->txt8, "<br>"); ?>
        </p>
        <hr>
      </div>
    </section>
  </main>
<?php include('./_foot.php'); ?>