<?php get_header();  ?>

<!-- works -->
<section class="l-cont-page l-cont-page--works">
  <div class="l-cont-page__inner l-cont-page--works__inner">
    <div class="p-works-page">
      <div class="p-works-page__inner">
        <!-- heading -->
        <div class="p-works-page__heading xs-mb80 lg-mb140">
          <h2 class="p-works-page__heading--en c-heading-child--en xs-mb5 lg-mb10">
            <span>Works</span>
          </h2>
          <p class="p-works-page__heading--jp c-heading-child--jp">
            <span>実績</span>
          </p>
        </div>
        <!-- //heading -->

        <!-- body -->
        <div class="p-works-page__body">
          <!-- 構文 -->

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="p-works-page__media xs-mb100 lg-mb200">
                <div class="p-works-page__img-wrapper xs-mb30 xl-mb0">
                  <?php the_post_thumbnail(); ?>
                  <!-- <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp-works-rehanote@2x.jpg" media="(min-width: 0px)" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/imgimg/sp-works-rehanote@2x.jpg" media="(min-width: 640px)" />
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/imgimg/pc-works-rehanote@2x.jpg" media="(min-width: 960px)" />
          <img src="img/pc-works-rehanote@2x.jpg" alt="" />
          <picture> -->
                </div>
                <?php $site_jenre = get_post_meta(get_the_ID(), 'site_jenre', true);  ?>
                <?php $site_content = get_post_meta(get_the_ID(), 'site_content', true);  ?>
                <?php $web_production = get_post_meta(get_the_ID(), 'web_production', false);  ?>
                <?php $web_production_item = get_post_meta(get_the_ID(), 'web_production_item', false);  ?>


                <div class="p-works-page__text-wrapper">
                  <div class="p-works-page__text-unit">
                    <div class="p-works-page__site xs-mb20">
                      <p><?php echo $site_jenre; ?>
                      </p>
                    </div>
                    <div class="p-works-page__content xs-mb15">
                      <div class="p-works-page__title c-title--jp xs-mb10">
                        <p>制作内容</p>
                      </div>
                      <div class="p-works-page__desc c-text--jp">
                        <p><?php echo $site_content;  ?></p>
                      </div>
                    </div>
                    <div class="p-works-page__content  xs-mb40 lg-mb40 xl-mb100 xxl-mb190">
                      <div class="p-works-page__title c-title--jp xs-mb10">
                        <p>制作範囲</p>
                      </div>

                      <?php if ($web_production) : ?>
                        <?php foreach ($web_production as $web) :  ?>
                          <div class="p-works-page__desc c-text--jp xs-mb10">
                            <?php echo $web;  ?>
                          </div>
                        <?php endforeach;  ?>
                      <?php endif; ?>

                      <!-- <div class="p-works-page__desc c-text--jp xs-mb10">
            <p>デザイン</p>
           </div>
           <div class="p-works-page__desc c-text--jp xs-mb5">
            <p>コーディング</p>
           </div> -->
                      <ul class="p-works-page__list">
                        <?php if ($web_production_item) : ?>
                          <?php foreach ($web_production_item as $item) :  ?>
                            <li class="p-works-page__item xs-mb5"><?php echo $item;  ?></li>

                          <?php endforeach;  ?>
                        <?php endif; ?>
                        <!-- <li class="p-works-page__item xs-mb5">HTML/CSS</li>
            <li class="p-works-page__item">jQuery</li> -->
                      </ul>
                    </div>
                    <div class="p-works-page__link-unit">
                      <a href="/works-page.html" class="p-works-page__link "><span class="xs-mr5 lg-mb10">View</span><span>Site</span></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- //構文 -->

          <!-- rehanote -->
          <!-- <div class="p-works-page__media xs-mb100 lg-mb200">
      <div class="p-works-page__img-wrapper xs-mb30 xl-mb0">
       <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp-works-rehanote@2x.jpg" media="(min-width: 0px)" />
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/imgimg/sp-works-rehanote@2x.jpg" media="(min-width: 640px)" />
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/imgimg/pc-works-rehanote@2x.jpg" media="(min-width: 960px)" />
        <img src="img/pc-works-rehanote@2x.jpg" alt="" />
        <picture>
      </div>
      <div class="p-works-page__text-wrapper">
       <div class="p-works-page__text-unit">
        <div class="p-works-page__site xs-mb20">
         <p>ポートフォリオサイト</p>
        </div>
        <div class="p-works-page__content xs-mb15">
         <div class="p-works-page__title c-title--jp xs-mb10">
          <p>制作内容</p>
         </div>
         <div class="p-works-page__desc c-text--jp">
          <p>ポートフォリオサイトのトップページ</p>
         </div>
        </div>
        <div class="p-works-page__content  xs-mb40 lg-mb40 xl-mb100 xxl-mb190">
         <div class="p-works-page__title c-title--jp xs-mb10">
          <p>制作範囲</p>
         </div>
         <div class="p-works-page__desc c-text--jp xs-mb10">
          <p>デザイン</p>
         </div>
         <div class="p-works-page__desc c-text--jp xs-mb5">
          <p>コーディング</p>
         </div>
         <ul class="p-works-page__list">
          <li class="p-works-page__item xs-mb5">HTML/CSS</li>
          <li class="p-works-page__item">jQuery</li>
         </ul>
        </div>
        <div class="p-works-page__link-unit">
         <a href="/works-page.html" class="p-works-page__link "><span class="xs-mr5 lg-mb10">View</span><span>Site</span></a>
        </div>
       </div>
      </div>
     </div> -->
          <!-- //rehanote -->
          <!-- nakamura -->
          <!-- <div class="p-works-page__media xs-mb100 lg-mb200">
      <div class="p-works-page__img-wrapper xs-mb30 xl-mb0">
       <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp-works-nakamura@2x.jpg" media="(min-width: 0px)" />
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp-works-nakamura@2x.jpg" media="(min-width: 640px)" />
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/pc-works-nakamura@2x.jpg" media="(min-width: 960px)" />
        <img src="img/pc-works-nakamura@2x.jpg" alt="" />
        <picture>
      </div>
      <div class="p-works-page__text-wrapper">
       <div class="p-works-page__text-unit">
        <div class="p-works-page__site xs-mb20">
         <p>コーポレートサイト</p>
        </div>
        <div class="p-works-page__content xs-mb15">
         <div class="p-works-page__title c-title--jp xs-mb10">
          <p>制作内容</p>
         </div>
         <div class="p-works-page__desc c-text--jp">
          <p>コーポレートサイトのトップページ</p>
         </div>
        </div>
        <div class="p-works-page__content  xs-mb40 lg-mb40 xl-mb100 xxl-mb190">
         <div class="p-works-page__title c-title--jp xs-mb10">
          <p>制作範囲</p>
         </div>
         <div class="p-works-page__desc c-text--jp xs-mb5">
          <p>コーディング</p>
         </div>
         <ul class="p-works-page__list">
          <li class="p-works-page__item xs-mb5">HTML/CSS</li>
          <li class="p-works-page__item xs-mb5">jQuery</li>
          <li class="p-works-page__item">CSS設計(PRECSS)</li>
         </ul>
        </div>
        <div class="p-works-page__link-unit">
         <a href="/works-page.html" class="p-works-page__link "><span class="xs-mr5 lg-mb10">View</span><span>Site</span></a>
        </div>
       </div>
      </div>
     </div> -->
          <!-- //nakamura -->

          <!-- art -->
          <!-- <div class="p-works-page__media xs-mb100 lg-mb200">
      <div class="p-works-page__img-wrapper xs-mb30 xl-mb0">
       <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp-works-art@2x.jpg" media="(min-width: 0px)" />
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp-works-art@2x.jpg" media="(min-width: 640px)" />
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/pc-works-art@2x.jpg" media="(min-width: 960px)" />
        <img src="img/pc-works-art@2x.jpg" alt="" />
        <picture>
      </div>
      <div class="p-works-page__text-wrapper">
       <div class="p-works-page__text-unit">
        <div class="p-works-page__site xs-mb20">
         <p>コーポレートサイト</p>
        </div>
        <div class="p-works-page__content xs-mb15">
         <div class="p-works-page__title c-title--jp xs-mb10">
          <p>制作内容</p>
         </div>
         <div class="p-works-page__desc c-text--jp">
          <p>コーポレートサイトのトップページ</p>
         </div>
        </div>
        <div class="p-works-page__content  xs-mb40 lg-mb40 xl-mb100 xxl-mb190">
         <div class="p-works-page__title c-title--jp xs-mb10">
          <p>制作範囲</p>
         </div>
         <div class="p-works-page__desc c-text--jp xs-mb5">
          <p>コーディング</p>
         </div>
         <ul class="p-works-page__list">
          <li class="p-works-page__item xs-mb5">HTML/CSS</li>
          <li class="p-works-page__item xs-mb5">jQuery</li>
          <li class="p-works-page__item">CSS設計(PRECSS)</li>
         </ul>
        </div>
        <div class="p-works-page__link-unit">
         <a href="/works-page.html" class="p-works-page__link "><span class="xs-mr5 lg-mb10">View</span><span>Site</span></a>
        </div>
       </div>
      </div>
     </div> -->
          <!-- //art -->
          <!-- fides -->
          <!-- <div class="p-works-page__media">
      <div class="p-works-page__img-wrapper xs-mb30 xl-mb0">
       <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp-works-fides@2x.jpg" media="(min-width: 0px)" />
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp-works-fides@2x.jpg" media="(min-width: 640px)" />
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/pc-works-fides@2x.jpg" media="(min-width: 960px)" />
        <img src="img/pc-works-fides@2x.jpg" alt="" />
        <picture>
      </div>
      <div class="p-works-page__text-wrapper">
       <div class="p-works-page__text-unit">
        <div class="p-works-page__site xs-mb20">
         <p>コーポレートサイト</p>
        </div>
        <div class="p-works-page__content xs-mb15">
         <div class="p-works-page__title c-title--jp xs-mb10">
          <p>制作内容</p>
         </div>
         <div class="p-works-page__desc c-text--jp">
          <p>コーポレートサイトのトップページ</p>
         </div>
        </div>
        <div class="p-works-page__content  xs-mb40 lg-mb40 xxl-mb100 xxxl-mb190">
         <div class="p-works-page__title c-title--jp xs-mb10">
          <p>制作範囲</p>
         </div>
         <div class="p-works-page__desc c-text--jp xs-mb5">
          <p>コーディング</p>
         </div>
         <ul class="p-works-page__list">
          <li class="p-works-page__item xs-mb5">HTML/CSS</li>
          <li class="p-works-page__item xs-mb5">jQuery</li>
          <li class="p-works-page__item">CSS設計(PRECSS)</li>
         </ul>
        </div>
        <div class="p-works-page__link-unit">
         <a href="/works-page.html" class="p-works-page__link "><span class="xs-mr5 lg-mb10">View</span><span>Site</span></a>
        </div>
       </div>
      </div>
     </div> -->
          <!-- //fides -->
        </div>
        <!-- //body -->
      </div>
    </div>
  </div>
</section>
<!-- //works -->

<!-- contact -->
<?php get_template_part('includes/contact-section');  ?>

<!-- //contact -->
<?php get_footer();  ?>