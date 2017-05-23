<?php include('./_head.php'); ?>
<main class="j-workspace">
   <!--  BKT Title-->
    <section class="bkt-features for-titles j-bg-gray-ghost">
      <div class="bkt-features-wrap for-titles">
        <div class="bkt-features-wrap-middle-down-title">
          <h1><?php echo $page->title; ?></h1>
          <p class="sub-title">
            <?php echo str_replace("<p></p>", "", $page->txt1); ?>
          </p>
          <div class="paragraph">
            <?php echo $page->txt2; ?>
            <?php echo $page->txt3; ?>
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
              <h4>1.- <?php echo $page->title2; ?></h4>
              <hr class="right">
              <?php echo $page->txt4; ?>
            </div>
           <div id="exp-station-2" class="message-for-station display-hidden">
              <h4>2.- <?php echo $page->title3; ?></h4>
              <hr class="right">
              <?php echo $page->txt5; ?>
            </div>
           <div id="exp-station-3" class="message-for-station display-hidden">
              <h4>3.- <?php echo $page->title4; ?></h4>
              <hr class="right">
              <?php echo $page->txt6; ?>
            </div>
           <div id="exp-station-4" class="message-for-station display-hidden">
              <h4>4.- <?php echo $page->title5; ?></h4>
              <hr class="right">
              <?php echo $page->txt7; ?>
            </div>
           <div id="exp-station-5" class="message-for-station display-hidden">
              <h4>5.- <?php echo $page->title5; ?></h4>
              <hr class="right">
              <?php echo $page->txt8; ?>
            </div>
            <div class="image" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495344734/images/estacion.png');"></div>
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
         <?php echo $page->txt10; ?>
       <hr>
     </div>
   </section>
    <!--  Explicación  -->
    <section class="bkt-features j-bg-gray-lighter">
      <div class="bkt-features-wrap">
        <div class="bkt-features-wrap-explain-image">
          <h2>La Bicicleta</h2>
          <p class="j-content-50">
          <?php echo str_replace("<p>", "", $page->txt9); ?> </p>
          <div class="image-container">
            <div id="exp-bike-1" class="message-for-station">
              <h4>1.- <?php echo $page->title6; ?></h4>
              <hr class="right">
              <?php echo $page->txt11; ?>
            </div>
            <div id="exp-bike-2" class="message-for-station display-hidden">
              <h4>2.- <?php echo $page->title7; ?></h4>
              <hr class="right">
              <?php echo $page->txt12; ?>
            </div>
            <div id="exp-bike-3" class="message-for-station display-hidden">
              <h4>3.- <?php echo $page->title8; ?></h4>
              <hr class="right">
              <?php echo $page->txt13; ?>
            </div>
            <div id="exp-bike-4" class="message-for-station display-hidden">
              <h4>4.- <?php echo $page->title10; ?></h4>
              <hr class="right">
              <?php echo $page->txt15; ?>
            </div>
            <div id="exp-bike-5" class="message-for-station display-hidden">
              <h4>5.- <?php echo $page->title11; ?></h4>
              <hr class="right">
              <?php echo $page->txt16; ?>
            </div>
            <div id="exp-bike-6" class="message-for-station display-hidden">
              <h4>6.- <?php echo $page->title12; ?></h4>
              <hr class="right">
              <?php echo $page->txt17; ?>
            </div>
            <div class="image" style="background-image: url('<?php echo $config->urls->templates; ?>static/455375-1495344734/images/bici-explicacion.png');"></div>
            <span class="explain-image-circle bike-one"   onclick="toggleBikeInfo(1)">1</span>
            <span class="explain-image-circle bike-two"   onclick="toggleBikeInfo(2)">2</span>
            <span class="explain-image-circle bike-three" onclick="toggleBikeInfo(3)">3</span>
            <span class="explain-image-circle bike-four"   onclick="toggleBikeInfo(4)">4</span>
            <span class="explain-image-circle bike-five"   onclick="toggleBikeInfo(5)">5</span>
            <span class="explain-image-circle bike-six" onclick="toggleBikeInfo(6)">6</span>
          </div>
        </div>
      </div>
    </section>
   <?php $image=$page->img1;?>
   <section class="bkt-jumbo-message-blue multiply-blue" <?php if($image) { ?> style="background-image: url('<?php echo $image->url; ?>'); <?php } ?>">
      <div class="j-wrap">
       <p>
         <strong><?php echo $page->title9; ?></strong> <br>
         <?php echo $page->txt14; ?>
       </p>
       <hr>
     </div>
   </section>
  </main>
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
      for (x = 1; x < 10; x++){
        $( "#exp-bike-" + x ).fadeOut();
      }
       $( "#exp-bike-" + number ).fadeIn();
    }
  </script>