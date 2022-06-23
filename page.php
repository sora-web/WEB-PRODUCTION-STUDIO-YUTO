<?php get_header();  ?>

<?php while (have_posts()) : the_post(); ?>
 <?php the_title(); ?>
<?php endwhile; ?>


<?php if (have_posts()) : ?>
 <?php while (have_posts()) : the_post(); ?>
  <!-- about-us -->
  <section class="l-cont-page l-cont-page--about-us">
   <div class="l-cont-page__inner l-cont-page--about-us__inner">
    <div class="p-about-us">
     <div class="p-about-us__inner">
      <!-- heading -->
      <div class="p-about-us__heading xs-mb80 lg-mb140">
       <h2 class="p-about-us__heading--en c-heading-child--en xs-mb5 lg-mb10">
        <span><?php the_title();  ?></span>
       </h2>
       <p class="p-about-us__heading--jp c-heading-child--jp">
        <span>




        </span>
       </p>
      </div>
      <!-- //heading -->

      <?php the_content();  ?>
     <?php endwhile; ?>
    <?php endif; ?>

    <!-- contact -->
    <section class="l-cont l-cont--contact">
     <div class="l-cont__inner l-cont--contact__inner">
      <div class="p-contact-top__wrapper">
       <div class="p-contact">
        <div class="p-contact-top">
         <div class="p-contact__inner">
          <!-- heading -->
          <div class="p-contact__heading xs-mb65 lg-mb60">
           <p class="p-contact__heading--jp c-heading c-heading--jp xs-mb5 lg-mb10">
            <span>お問い合わせ</span>
           </p>
           <h2 class="p-contact__heading--en c-heading c-heading--en">
            <span>Contact</span>
           </h2>
          </div>
          <!-- //heading -->
          <!-- body -->
          <div class="p-contact__body xs-mb70">
           <div class="p-contact__primary">
            <div class="p-contact__item xs-mb50 lg-mb50">
             <p class="p-contact__title xs-mb15 lg-mb20">お名前</p>
             <p class="p-contact__textbox"></p>
            </div>
            <div class="p-contact__item xs-mb50 lg-mb0">
             <p class="p-contact__title xs-mb15 lg-mb20">
              メールアドレス
             </p>
             <p class="p-contact__textbox"></p>
            </div>
           </div>
           <div class="p-contact__secondary">
            <div class="p-contact__item">
             <p class="p-contact__title xs-mb15 lg-mb20">
              お問い合わせ内容
             </p>
             <p class="p-contact__textarea"></p>
            </div>
           </div>
          </div>
          <!-- //body -->
          <div class="p-contact__btn-unit">
           <a href="" class="p-contact__btn c-btn">Submit</a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </section>
    <!-- //contact -->


    <?php get_footer();  ?>