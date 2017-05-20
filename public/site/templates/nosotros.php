<?php include('./_head.php'); ?>
 <main class="j-workspace">
   <!--  BKT Title-->
   <section class="bkt-features for-titles j-bg-gray-lighter">
      <div class="bkt-features-wrap for-titles">
        <div class="bkt-features-wrap-middle-down-title">
          <h1>Nosotros</h1>
          <div class="paragraph">
            <p>BKT bici pública profesionaliza su pasión por la promoción del ciclismo urbano a partir del año 2006.  Con el diseño industrial como origen, comenzamos diseñando elementos urbanos y racks para bicicleta, creando una red (link a experiencia/bikla) en la ciudad de Guadalajara que al poco tiempo se transformaría un </p>
            <p>nuestra primer experiencia con los sistemas de bicicletas públicas. Nuestra misión es hacer que cada día más gente pueda moverse en bicicleta en la ciudad, y para lograrlo, ofrecemos soluciones llenas de creatividad, innovación y desarrollo, experiencia y flexibilidad.</p>
          </div>
        </div>
      </div>
    </section>
    <!--  BKT Fortalezas = Alianzas-->
    <section class="bkt-features j-bg-color-inverse">
      <div class="bkt-features-wrap bkt-aliance">
        <div class="bkt-aliance-title">
         <h2>Alianzas</h2>
          <p class="j-color-secondary">
           Contamos con las alianzas que nos permiten ser la empresa más sólida en México, con mayor experiencia y mejores prácticas. 
          </p>
        </div>
        <div class="bkt-aliance-body grid">
          <div class="unit one-third">
            <img src="" alt="">
            <h3>PBSC</h3>
            <hr class="right">
            <p>Empresa líder en suministro de sistema de bicicletas públicas. Sus productos han sido desde su fundación ícono de innovación, y una solución inmejorable en el mercado actual. Con presencia en más de 17 ciudades alrededor del mundo como: Londres, Chicago, NY y Guadalajara.</p>
            <a class="bkt-btn" href="">Ir al sitio web</a>
          </div>
          <div class="unit one-third">
            <img src="" alt="">
            <h3>CUADRA Ubanismo</h3>
            <hr class="right">
            <p>Despacho de urbanismo especializado en el diseño y aplicación de metodologías para la socialización de proyectos, diseño urbano - movilidad y ciudad.</p>
            <a class="bkt-btn" href="">Ir al sitio web</a>
          </div>
        </div>
      </div>
    </section>
    <!--  BKT Mensaje Jumbo-->
    <?php $image=$page->img1;
        if($image)
          $img_thumb= $image->size(1200,500, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
    <section class="bkt-jumbo-message" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>min-height: 400px;">
      <div class="j-wrap">
      </div>
    </section>
    <!--  BKT Fortalezas = Quienes somos-->
    <section class="bkt-features j-bg-color-inverse bkt-team">
      <div class="bkt-features-wrap bkt-aliance">
        <div class="bkt-aliance-title">
         <h2>Alianzas</h2>
          <p class="j-color-secondary">
           Contamos con las alianzas que nos permiten ser la empresa más sólida en México, con mayor experiencia y mejores prácticas. 
          </p>
        </div>
        <div class="bkt-aliance-body grid">
          <!--  Integrante numero uno  -->
          <div class="unit one-third">
            <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/mario.png" alt="Mario Delgado Padilla">
            <h3>Mario Delgado Padilla</h3>
            <hr class="right">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos accusantium sed optio debitis quisquam iure repellendus quo facilis molestiae quae porro eius possimus, culpa a dolores error praesentium voluptatibus voluptates.</p>
          </div>
          <!--  Integrante numero uno  -->
          <div class="unit one-third">
            <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/mario.png" alt="Mario Delgado Padilla">
            <h3>Mario Delgado Padilla</h3>
            <hr class="right">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos accusantium sed optio debitis quisquam iure repellendus quo facilis molestiae quae porro eius possimus, culpa a dolores error praesentium voluptatibus voluptates.</p>
          </div>
          <!--  Integrante numero uno  -->
          <div class="unit one-third">
            <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/mario.png" alt="Mario Delgado Padilla">
            <h3>Mario Delgado Padilla</h3>
            <hr class="right">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos accusantium sed optio debitis quisquam iure repellendus quo facilis molestiae quae porro eius possimus, culpa a dolores error praesentium voluptatibus voluptates.</p>
          </div>
          <!--  Integrante numero uno  -->
          <div class="unit one-third">
            <img src="<?php echo $config->urls->templates; ?>static/455375-1485995688/images/mario.png" alt="Mario Delgado Padilla">
            <h3>Mario Delgado Padilla</h3>
            <hr class="right">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos accusantium sed optio debitis quisquam iure repellendus quo facilis molestiae quae porro eius possimus, culpa a dolores error praesentium voluptatibus voluptates.</p>
          </div>
        </div>
      </div>
    </section>
   
  </main>
<?php include('./_foot.php'); ?>