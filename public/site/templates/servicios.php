<?php include('./_head.php'); ?>
  <main class="j-workspace">
   <!--  BKT Title-->
   <section class="bkt-features for-titles j-bg-gray-lighter">
      <div class="bkt-features-wrap for-titles">
        <div class="bkt-features-wrap-middle-down-title">
          <h1><?php echo $page->title; ?></h1>
          <p class="sub-title">
            <?php echo str_replace("<p>", "", $page->txt1); ?>
          </p>
          <div class="paragraph">
            <p><?php echo $page->txt2; ?></p>
            <p><?php echo $page->txt3; ?></p>
          </div>
        </div>
      </div>
    </section>
   <!--  BKT Mensaje Jumbo-->
   <section class="bkt-jumbo-message">
     <div class="j-wrap">
       <?php echo $page->txt4; ?>
       <hr>
     </div>
   </section>
   <!--  BKT Fortalezas = Diseño-->
   <section class="bkt-features j-bg-gray-lighter">
      <div class="bkt-features-wrap ">
        <!--  The next container show a photo in desktop and hidden in mobile for esthetic reason  -->
      <?php $image=$page->img1;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo desktop" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
        </div>
        <div class="bkt-features-wrap-text fifthy-percent">
          <svg version="1.0" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewbox="0 0 83.6 83.6" style="enable-background:new 0 0 83.6 83.6;" xml:space="preserve">
            <g fill="#414042">
              <path class="st0" d="M83.4,17.6L66,0.3c-0.4-0.4-1-0.4-1.4,0L42.3,22.6l-3.9-3.9c-0.1-0.1-0.2-0.2-0.3-0.2l-2.3-1.2l-1.2-0.6
                L3.9,1.6C3.6,1.5,3.1,1.5,2.8,1.8C2.5,2.1,2.4,2.6,2.6,3l16.8,34.1c0.1,0.1,0.2,0.2,0.2,0.3l0,0l3.9,3.9L0.3,64.7
                c-0.4,0.4-0.4,1,0,1.4l17.3,17.3c0.4,0.4,1,0.4,1.4,0l23.3-23.3l9.9,9.9c0.4,0.4,1,0.4,1.4,0l17.3-17.3c0.4-0.4,0.4-1,0-1.4
                L61,41.3L83.4,19C83.7,18.6,83.7,18,83.4,17.6z M19.6,33l-0.4-0.9L10,13.5L14.5,9l18.6,9.2l1.3,0.6c-0.9,0.3-1.7,0.8-2.3,1.4
                c-1.4,1.4-1.6,3.1-1.5,4.3c-1,0.2-2,0.6-2.7,1.4c-1.1,1.1-1.6,2.6-1.9,3.5c-2.2,0.1-4,0.7-5.1,1.9C20.2,31.8,19.8,32.4,19.6,33z
                 M18.3,81.3L2.4,65.3l10.9-10.9l5.2,5.2c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4l-5.2-5.2l2.3-2.3l5.2,5.2c0.4,0.4,1,0.4,1.4,0
                c0.4-0.4,0.4-1,0-1.4l-5.2-5.2l2.3-2.3l5.2,5.2c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4L22,45.7l2.3-2.3l9.8,9.8
                c0.4,0.4,1,0.4,1.4,0c0,0,0,0,0,0l5.5,5.5L18.3,81.3z M68.9,52L52.9,67.9l-9.2-9.2l-1.4-1.4L26.4,41.3L25,39.9l-3.8-3.8
                c-0.1-0.6-0.3-2.4,0.9-3.5c0.9-0.9,2.4-1.3,4.5-1.3c0.5,0,0.9-0.4,1-0.8c0,0,0.3-2,1.5-3.2c0.7-0.7,1.4-0.9,2.4-0.9
                c0.3,0,0.6-0.1,0.8-0.4c0.2-0.2,0.3-0.6,0.2-0.9c0,0-0.5-2.2,0.9-3.6c0.8-0.8,2.1-1.2,3.8-1.3l3.7,3.7l1.4,1.4l15.9,15.9l1.4,1.4
                L68.9,52z M59.6,39.9L49.4,29.8c0.1-0.3,0-0.6-0.3-0.9L44,23.7l2.3-2.3l5.2,5.2c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4L47.7,20
                l2.3-2.3l5.2,5.2c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4l-5.2-5.2l2.3-2.3l9.8,9.8c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4
                L55,12.7l2.2-2.1l0.1-0.1l5.2,5.2c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4L58.7,9L61,6.7l5.2,5.2c0.4,0.4,1,0.4,1.4,0
                c0.4-0.4,0.4-1,0-1.4l-5.2-5.2l3-3l15.9,15.9L59.6,39.9z"/>
              <path class="st0" d="M12.4,64.2c-1.9,1.9-1.9,5.1,0,7c1.9,1.9,5.1,1.9,7,0c2-1.9,2-5.1,0-7C17.5,62.3,14.4,62.3,12.4,64.2z
                 M18.1,69.9c-1.2,1.2-3.1,1.2-4.3,0c-1.2-1.2-1.2-3.1,0-4.3c1.2-1.2,3.1-1.2,4.3,0C19.3,66.8,19.3,68.7,18.1,69.9z"/>
              <path class="st0" d="M76.2,57.9L58.9,75.2c-0.4,0.4-0.4,1,0,1.4c2,2,5.7,3.6,8.9,3.6c1.7,0,3.3-0.5,4.5-1.6l7.3-7.3
                c3.2-3.2,1-10.4-2-13.4C77.2,57.5,76.6,57.5,76.2,57.9z M78.2,70l-7.3,7.3c-2.1,2.1-7.2,0.7-9.9-1.4l15.8-15.8
                C78.9,62.8,80.3,67.9,78.2,70z"/>
              <path class="st0" d="M49.3,53.1l-1.4-1.4L37.8,41.5l-7.4-7.4c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4l1.6,1.6l15.9,15.9l1.4,1.4
                l5.3,5.3c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4L49.3,53.1z"/>
              <path class="st0" d="M54,45.6L38,29.7l-1.4-1.4l-0.2-0.2c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4l0.2,0.2l6.6,6.6L52.6,47
                l1.4,1.4l5.3,5.3c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4L55.4,47L54,45.6z"/>
              <path class="st0" d="M75.5,55.8c-0.4-0.4-1-0.4-1.4,0L56.7,73.1c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0l17.3-17.3
                C75.8,56.8,75.8,56.2,75.5,55.8z"/>
              <path class="st0" d="M73.3,53.6c-0.4-0.4-1-0.4-1.4,0L54.6,70.9c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0L73.3,55
                C73.7,54.6,73.7,54,73.3,53.6z"/>
            </g>
            </svg>
          <h2><?php echo $page->title1; ?></h2>
          <p><?php echo $page->txt5; ?></p>
          <hr class="right">
        </div>
        <!--  The next container show a photo in mobile and hidden in desktop for esthetic reason  -->
        <?php $image=$page->img1;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo mobile fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
        </div>
      </div>
    </section>
   <!--  BKT Fortalezas = Desarrollo-->
   <section class="bkt-features j-bg-gray-dark">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-text fifthy-percent">
          <h2 class="j-color-inverse"><?php echo $page->title2; ?></h2>
          <?php echo str_replace('<li>', '<li class="j-color-inverse"', $page->txt6); ?>
        </div>
        <?php $image=$page->img2;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
        </div>
      </div>
    </section>
   <!--  BKT Fortalezas = Implementación-->
   <section class="bkt-features j-bg-gray-lighter">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-text fifthy-percent">
           <svg version="1.0" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewbox="0 0 95.2 83.6" style="enable-background:new 0 0 95.2 83.6;" xml:space="preserve">
            <path class="st0" d="M74.9,40.9c5.5,0,10.6-2.2,14.3-6.1c5.1-5.1,7.2-12.9,5.3-19.7l-0.7-2.3L85,21.6c-1.6,1.6-3.6,2.4-5.8,2.4
              c-2.1,0-4.1-0.9-5.6-2.4c-1.6-1.6-2.5-3.7-2.4-5.9c0-2.1,0.9-4,2.4-5.5l8.9-8.9l-2.3-0.7C78.4,0.2,76.7,0,74.9,0
              c-5.3,0-10.6,2.2-14.4,6c-5.9,5.9-7.6,14.7-4.5,22.3l-8.3,8.3l-8.3-8.3c3.1-7.6,1.4-16.5-4.5-22.3C31,2.2,25.7,0,20.4,0
              c-1.8,0-3.6,0.2-5.3,0.7l-2.3,0.7l8.9,8.9c1.5,1.4,2.4,3.4,2.4,5.4c0,2.2-0.8,4.3-2.5,5.9C20.1,23.2,18.1,24,16,24
              c-2.1,0-4.2-0.9-5.8-2.4l-8.9-8.9l-0.7,2.3C-1.2,21.9,0.8,29.6,6,34.8c3.8,3.9,8.9,6.1,14.4,6.1c2.7,0,5.4-0.5,8-1.6l8.3,8.4
              L13.8,70.4c-1.5,1.5-2.3,3.4-2.3,5.5c0,2.1,0.8,4,2.3,5.5c1.5,1.5,3.4,2.3,5.5,2.3c2.1,0,4-0.8,5.5-2.3l22.8-22.8l22.8,22.8
              c1.5,1.5,3.4,2.3,5.5,2.3c2.1,0,4-0.8,5.5-2.3c3-3,3-7.9,0-11L58.6,47.6l8.3-8.4C69.4,40.3,72.2,40.9,74.9,40.9z M28.9,35.8L28,36.3
              C25.6,37.4,23,38,20.3,38c-4.7,0-9.1-1.8-12.3-5.2C4.2,29,2.4,23.5,3,18.4l5.2,5.2c2.1,2.1,4.9,3.3,7.8,3.3c2.9,0,5.7-1.2,7.6-3.3
              c2.1-2.2,3.3-5,3.3-7.9c0-2.9-1.2-5.5-3.3-7.5L18.4,3C23.6,2.4,29,4.3,32.7,8c5.2,5.2,6.7,13.3,3.5,20l-0.4,0.9l9.8,9.8l-6.9,6.9
              L28.9,35.8z M79.3,72.5c1.9,1.9,1.9,5,0,6.9c-1.8,1.8-5.1,1.8-6.9,0L49.6,56.5l6.9-6.9L79.3,72.5z M56.5,45.6l-2,2l-6.9,6.9l-2,2
              L22.8,79.4c-1.8,1.8-5.1,1.8-6.9,0c-0.9-0.9-1.4-2.1-1.4-3.4c0-1.3,0.5-2.5,1.4-3.4l22.8-22.8l2-2l6.9-6.9l2-2l9.8-9.8L59,28
              c-3.1-6.7-1.7-14.8,3.5-20c3.3-3.3,7.8-5.2,12.4-5.2c0.7,0,1.3,0,2,0.1l-5.2,5.2c-2.1,2-3.2,4.6-3.3,7.5c0,3,1.1,5.8,3.2,7.9
              c2,2.1,4.7,3.3,7.6,3.3c2.9,0,5.7-1.2,7.8-3.3l5.2-5.2c0.6,5.1-1.2,10.6-5.1,14.4c-3.2,3.4-7.6,5.2-12.3,5.2c-2.6,0-5.3-0.6-7.7-1.7
              l-0.9-0.4L56.5,45.6z"/>
            </svg>
          <h2><?php echo $page->title3; ?></h2>
          <?php echo $page->txt7; ?>
          <hr class="right">
        </div>
        <?php $image=$page->img3;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
        </div>
      </div>
    </section>
   <!--  BKT Mensaje Jumbo-->
   <section class="bkt-jumbo-message">
     <div class="j-wrap">
       <?php echo $page->txt8; ?>
       <hr>
     </div>
   </section>
   <!--  BKT Fortalezas = Trabajamos con metodologias  -->
   <section class="bkt-features j-bg-color-warning">
      <div class="bkt-features-wrap ">
        <!--  The next container show a photo in desktop and hidden in mobile for esthetic reason  -->
        <?php $image=$page->img4;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo desktop" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
        </div>
        <div class="bkt-features-wrap-text fifthy-percent">
          <?php echo $page->txt9; ?>
        </div>
        <!--  The next container show a photo in mobile and hidden in desktop for esthetic reason  -->
        <?php $image=$page->img4;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo mobile fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
        </div>
      </div>
    </section>
   <!--  BKT Fortalezas = Operación-->
   <section class="bkt-features j-bg-gray-lighter">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-text fifthy-percent">
           <svg version="1.0" id="Capa_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewbox="0 0 83.6 83.6" style="enable-background:new 0 0 83.6 83.6;" xml:space="preserve">
            <path class="st0" d="M79.4,33.2l-6-1c-0.6-2-1.4-4-2.4-5.9l3.5-4.9c1.4-2,1.2-4.7-0.5-6.5l-5.2-5.2c-1-1-2.2-1.5-3.6-1.5
              c-1,0-2.1,0.3-2.9,0.9l-5,3.5c-1.9-1-4-1.9-6.1-2.5l-1-5.9c-0.4-2.4-2.5-4.2-5-4.2h-7.4c-2.5,0-4.6,1.8-5,4.2l-1,6
              c-2,0.6-4,1.5-5.9,2.5l-4.9-3.5c-0.9-0.6-1.9-0.9-2.9-0.9c-1.3,0-2.6,0.5-3.6,1.5L9.5,15c-1.7,1.7-2,4.5-0.5,6.5l3.6,5
              c-1,1.9-1.8,3.8-2.4,5.9l-5.9,1c-2.4,0.4-4.2,2.5-4.2,5v7.4c0,2.5,1.8,4.6,4.2,5l6,1c0.6,2,1.5,4,2.5,5.9l-3.5,4.9
              c-1.4,2-1.2,4.7,0.5,6.5l5.2,5.2c1,0.9,2.2,1.5,3.6,1.5c1,0,2.1-0.3,2.9-0.9l5-3.6c1.8,1,3.7,1.7,5.7,2.3l1,6c0.4,2.4,2.5,4.2,5,4.2
              h7.4c2.5,0,4.6-1.8,5-4.2l1-6c2-0.6,4-1.4,5.9-2.4l4.9,3.5c0.9,0.6,1.9,0.9,2.9,0.9l0,0c1.3,0,2.6-0.5,3.6-1.5l5.2-5.2
              c1.7-1.7,2-4.5,0.5-6.5l-3.5-5c1-1.9,1.8-3.8,2.4-5.9l6-1c2.4-0.4,4.2-2.5,4.2-5v-7.4C83.6,35.7,81.9,33.6,79.4,33.2z M80.5,45.7
              c0,0.3-0.2,0.6-0.5,0.6l-7.6,1.3c-0.9,0.1-1.6,0.8-1.8,1.7c-0.7,2.7-1.8,5.2-3.2,7.6c-0.5,0.8-0.4,1.7,0.1,2.5l4.5,6.3
              c0.2,0.2,0.1,0.6-0.1,0.8l-5.4,5.4C66.3,72,66.1,72,66,72c-0.1,0-0.2,0-0.4-0.1l-6.3-4.5c-0.7-0.5-1.7-0.6-2.5-0.1
              c-2.4,1.4-5,2.5-7.6,3.2c-0.9,0.2-1.5,0.9-1.7,1.8l-1.3,7.6c0,0.3-0.3,0.5-0.6,0.5H38c-0.3,0-0.6-0.2-0.6-0.5l-1.3-7.6
              c-0.1-0.9-0.8-1.6-1.7-1.8c-2.6-0.7-5.1-1.7-7.5-3.1c-0.4-0.2-0.8-0.3-1.2-0.3c-0.5,0-0.9,0.1-1.3,0.4l-6.3,4.5
              c-0.1,0.1-0.3,0.1-0.4,0.1c-0.1,0-0.3,0-0.5-0.2l-5.4-5.4c-0.2-0.2-0.2-0.6-0.1-0.8l4.5-6.2c0.5-0.7,0.6-1.7,0.1-2.5
              c-1.4-2.4-2.5-4.9-3.2-7.6c-0.2-0.9-0.9-1.5-1.8-1.7l-7.7-1.3c-0.3,0-0.5-0.3-0.5-0.6v-7.6c0-0.3,0.2-0.6,0.5-0.6l7.6-1.3
              c0.9-0.2,1.6-0.8,1.8-1.7c0.7-2.7,1.7-5.3,3.1-7.6c0.5-0.8,0.4-1.7-0.1-2.5l-4.5-6.3c-0.2-0.3-0.2-0.6,0.1-0.8l5.4-5.4
              c0.2-0.2,0.3-0.2,0.4-0.2c0.1,0,0.2,0,0.4,0.1l6.2,4.5c0.7,0.5,1.7,0.6,2.5,0.1c2.4-1.4,4.9-2.5,7.6-3.2c0.9-0.2,1.5-0.9,1.7-1.8
              l1.3-7.7c0.1-0.3,0.3-0.5,0.6-0.5h7.6c0.3,0,0.6,0.2,0.6,0.5l1.3,7.6c0.1,0.9,0.8,1.6,1.7,1.8c2.7,0.7,5.4,1.8,7.8,3.2
              c0.8,0.5,1.8,0.4,2.5-0.1l6.3-4.5c0.1-0.1,0.3-0.1,0.4-0.1c0.1,0,0.3,0,0.4,0.2l5.4,5.4c0.2,0.2,0.2,0.6,0.1,0.8l-4.5,6.3
              c-0.5,0.7-0.6,1.7-0.1,2.5c1.4,2.4,2.5,5,3.2,7.6c0.2,0.9,0.9,1.5,1.8,1.7l7.6,1.3c0.3,0,0.5,0.3,0.5,0.6V45.7L80.5,45.7z
               M41.8,25.2c-9.2,0-16.7,7.5-16.7,16.7c0,9.2,7.5,16.7,16.7,16.7c9.2,0,16.7-7.5,16.7-16.7C58.5,32.6,51,25.2,41.8,25.2z M41.8,55.4
              c-7.5,0-13.5-6.1-13.5-13.5c0-7.5,6.1-13.5,13.5-13.5c7.5,0,13.5,6.1,13.5,13.5C55.3,49.3,49.3,55.4,41.8,55.4z"/>
          </svg>
          <h2><?php echo $page->title4; ?></h2>
          <?php echo $page->txt10; ?>
          <hr class="right">
        </div>
        <?php $image=$page->img5;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
        </div>
      </div>
    </section>
   <!--  BKT Fortalezas = Software Propio  -->
   <section class="bkt-features j-bg-gray-lighter">
      <div class="bkt-features-wrap ">
        <!--  The next container show a photo in desktop and hidden in mobile for esthetic reason  -->
        <?php $image=$page->img6;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo desktop" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
        </div>
        <div class="bkt-features-wrap-text fifthy-percent">
          <?php echo $page->txt11; ?>
        </div>
        <!--  The next container show a photo in mobile and hidden in desktop for esthetic reason  -->
        <?php $image=$page->img6;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo mobile fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
        </div>
      </div>
    </section>
   <!--  BKT Mensaje Jumbo-->
   <!--  For the correct re-use of the element is nesesary the inline image  -->
    <?php $image=$page->img7;?>
   <section class="bkt-jumbo-message-blue" <?php if($image) { ?> style="background-image: url('<?php echo $image->url; ?>'); <?php } ?>">
     <div class="blue-layer">
       <div class="j-wrap">
        <p>
          <strong><?php echo $page->title5; ?></strong> <br>
          <?php echo $page->txt12; ?>
        </p>
        <hr>
      </div>
     </div>
    </section>
  </main>
<?php include('./_foot.php'); ?>
