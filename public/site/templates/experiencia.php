<?php include('./_head.php'); ?>
 <main class="j-workspace">
   <!--  BKT Title-->
   <section class="bkt-features for-titles j-bg-gray-ghost">
      <div class="bkt-features-wrap for-titles">
        <div class="bkt-features-wrap-middle-down-title">
          <h1><?php echo $page->title; ?></h1>
          <p class="sub-title">
            <?php echo str_replace("<p>", "", $page->txt1); ?>
          </p>
          <div class="paragraph">
            <?php echo $page->txt2; ?>
            <?php echo $page->txt3; ?>
          </div>
        </div>
      </div>
    </section>
    <!--  BKT Fortalezas = Bikla-->
    <?php $image=$page->img6;?>
   <section class="bkt-features j-bg-gray-regular multiply-gray" <?php if($image) { ?> style="background-image: url('<?php echo $image->url; ?>'); <?php } ?>">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-middle-down-text">
         <h2><?php echo $page->title1; ?><sup>r</sup></h2>
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
    <!--  BKT Fortalezas = Bikla about-->
    <section class="bkt-features j-bg-color-warning">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-text fifthy-percent">
          <?php echo $page->txt7; ?>
        </div>
        <?php $image=$page->img1;
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
   <!--  BKT Fortalezas = MIBICI-->
   <section class="bkt-features j-bg-gray-dark">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-text fifthy-percent">
          <h2 class="j-color-inverse">
            <?php echo $page->title2; ?>
            <br>
            <span class="title-lighter">
              <?php echo $page->title3; ?>
            </span>
          </h2>
          <hr class="right">
          <?php echo str_replace('<p>', '<p class="j-color-inverse">', $page->txt10); ?>
        </div>
        <?php $image=$page->img2;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>">
        </div>
      </div>
    </section>
   <!--  BKT Fortalezas = MIBICI About-->
   <section class="bkt-features j-bg-color-inverse">
      <div class="bkt-features-wrap ">
        <!--  The next container show a photo in desktop and hidden in mobile for esthetic reason  -->
        <?php $image=$page->img3;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo desktop" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>;background-size: 75%;">
        </div>
        <div class="bkt-features-wrap-text fifthy-percent">
          <h2><?php echo $page->title4; ?>
          <br>
           <span class="title-lighter">
            <?php echo $page->title5; ?>
          </span>
          </h2>
          <hr class="right">
          <?php echo $page->txt11; ?>
        </div>
        <!--  The next container show a photo in mobile and hidden in desktop for esthetic reason  -->
        <?php $image=$page->img3;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo mobile fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>;background-size: 75%;">
        </div>
      </div>
    </section>
   <!--  BKT Mensaje Jumbo
   <section class="bkt-jumbo-message">
     <div class="j-wrap">
        <?php echo $page->txt12; ?>
       <hr>
     </div>
   </section>
   -->
   <!--  BKT Fortalezas = Software Propio  -->
   <section class="bkt-features j-bg-gray-dark">
      <div class="bkt-features-wrap ">
        <!--  The next container show a photo in desktop and hidden in mobile for esthetic reason  -->
        <?php $image=$page->img4;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo desktop" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>;">
        </div>
        <div class="bkt-features-wrap-text fifthy-percent">
          <h2 class="j-color-inverse">
            <?php echo $page->title6; ?>
            <br>
            <span class="title-lighter">
              <?php echo $page->title7; ?>
            </span>
          </h2>
          <hr class="right">
          <?php echo str_replace('<p>', '<p class="j-color-inverse">', $page->txt13); ?>
        </div>
        <!--  The next container show a photo in mobile and hidden in desktop for esthetic reason  -->
        <?php $image=$page->img4;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo mobile fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>;">
        </div>
      </div>
    </section>
    <!--  BKT Fortalezas = Operación-->
   <section class="bkt-features j-bg-gray-lighter">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-text fifthy-percent">
          <h2><?php echo $page->title8; ?>
            <br>
            <span class="title-lighter">
              <?php echo $page->title9; ?>
            </span>
          </h2>
          <hr class="right">
          <?php echo $page->txt14; ?>
        </div>

        <?php $image=$page->img5;
        if($image)
          $img_thumb= $image->size(600,400, array('quality' => 90, 'upscaling' => true, 'cropping' => false)); ?>
       <div class="bkt-features-wrap-photo fifthy-percent" <?php if($image) { ?> style="background-image: url('<?php echo $img_thumb->url; ?>'); <?php } ?>;background-size: 75%;">
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
  <script>
    function toggleStationInfo(number){
      var x=0;
      for (x = 1; x < 6; x++){
        console.log ("Test" + x);
        $( "#exp-t-" + x ).addClass('hidden');
        $( "#exp-p-" + x ).addClass('hidden');
      }
      $( "#exp-t-" + number ).removeClass('hidden');
      $( "#exp-p-" + number ).removeClass('hidden');
    }
    function toggleBikeInfo(number){
      var x=0;
      for (x = 1; x < 4; x++){
        console.log ("Test" + x);
        $( "#exp-bike-t-" + x ).addClass('hidden');
        $( "#exp-bike-p-" + x ).addClass('hidden');
      }
      $( "#exp-bike-t-" + number ).removeClass('hidden');
      $( "#exp-bike-p-" + number ).removeClass('hidden');
    }
  </script>