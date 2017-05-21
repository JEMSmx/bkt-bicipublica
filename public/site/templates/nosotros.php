<?php include('./_head.php'); ?>
 <main class="j-workspace">
   <!--  BKT Title-->
   <section class="bkt-features for-titles j-bg-gray-lighter">
      <div class="bkt-features-wrap for-titles">
        <div class="bkt-features-wrap-middle-down-title">
          <h1><?php echo $page->title; ?></h1>
          <div class="paragraph">
            <?php echo $page->txt1; ?>
            <?php echo $page->txt2; ?>
          </div>
        </div>
      </div>
    </section>
    <!--  BKT Fortalezas = Alianzas-->
    <section class="bkt-features j-bg-color-inverse">
      <div class="bkt-features-wrap bkt-aliance">
        <div class="bkt-aliance-title">
        <?php $page_ali=$pages->get("template=Alianza"); ?>
         <h2><?php echo $page_ali->title; ?></h2>
          <p class="j-color-secondary">
           <?php echo str_replace("<p>", "", $page_ali->summary); ?>
          </p>
        </div>
        <div class="bkt-aliance-body grid">
        <?php $alianzas=$pages->find("template=Alianza");
      foreach($alianzas as $alianza){ ?> 
          <div class="unit one-third">
            <img src="<?php echo $alianza->img1->url; ?>" alt="<?php echo $alianza->title; ?>">
            <h3><?php echo $alianza->title; ?></h3>
            <hr class="right">
            <?php echo $alianza->txt1; ?>
            <a class="bkt-btn" href=" <?php echo $alianza->url1; ?>">Ir al sitio web</a>
          </div>
        <?php } ?>
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
        <?php $page_team=$pages->get("template=Equipo"); ?>
         <h2><?php echo $page_team->title; ?></h2>
          <p class="j-color-secondary">
           <?php echo str_replace("<p>", "", $page_ali->summary); ?>
          </p>
        </div>
        <div class="bkt-aliance-body grid">
        <?php $equipo=$pages->find("template=Integrante");
          foreach($equipo as $integrante){ ?> 
          <div class="unit one-third">
            <img src="<?php echo $integrante->img1->url; ?>" alt="<?php echo $integrante->title; ?>">
            <h3><?php echo $integrante->title; ?></h3>
            <hr class="right">
            <?php echo $integrante->txt1; ?>
          </div>
        <?php } ?>   
        </div>
      </div>
    </section>
   
  </main>
<?php include('./_foot.php'); ?>
