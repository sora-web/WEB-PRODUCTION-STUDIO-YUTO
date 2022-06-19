<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header();  ?>

</head>

<body>
  <!-- main -->

  <header class="l-header">
    <div class="l-header__inner">
      <div class="p-header">
        <div class="p-header__inner">
          <div class="p-header__logo">
            <p class="c-logo">
              <span class="xs-mr10">WEB</span><span class="xs-mr10">PRODUCTION STUDIO</span><span>YUTO</span>
            </p>
          </div>
          <div class="p-header__burger js-burger lg-off">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <div class="p-header-pc lg-on">
            <div class="p-header__nav">
              <ul class="p-header__list">
                <li class="p-header__item lg-mr20">
                  <a href="/" class="">home</a>
                </li>
                <li class="p-header__item lg-mr20">
                  <a href="about-us.html" class="">about us</a>
                </li>
                <li class="p-header__item lg-mr20">
                  <a href="works-page.html" class="">works</a>
                </li>
              </ul>
              <button class="p-header__btn">
                <a href="contact-page.html" class="c-rounded-btn jquery-disabled">Contact</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="p-burger-view">
    <div class="p-burger-view__menu">
      <div class="p-burger-view__logo xs-mb50">
        <p class="c-logo">
          <span class="xs-mr10">WEB</span><span class="xs-mr10">PRODUCTION STUDIO</span><span>YUTO</span>
        </p>
      </div>
      <div class="p-burger-view__nav">
        <ul class="p-burger-view__list xs-mb50">
          <li class="p-burger-view__item xs-mb20">
            <a href="" class="">home</a>
          </li>
          <li class="p-burger-view__item xs-mb20">
            <a href="" class="">about us</a>
          </li>
          <li class="p-burger-view__item xs-mb20">
            <a href="" class="">works</a>
          </li>
        </ul>
        <button class="p-burger-view__btn">
          <a href="#" class="c-rounded-btn jquery-disabled">Contact</a>
        </button>
      </div>
    </div>
  </div>

  <!-- mv -->
  <section class="l-mv">
    <div class="p-mv">
      <div class="p-mv__inner">
        <div class="p-mv__message p-mv__message--sp md-off">
          <p class="p-mv__text p-mv__text--primary xs-mb20">WEB制作の</p>
          <p class="p-mv__text p-mv__text__secondary xs-mb20">外注下請け</p>
          <p class="p-mv__text p-mv__text__tertiary xs-mb20">業務委託なら</p>
          <p class="p-mv__text p-mv__text__quaternary">お任せください</p>
        </div>

        <div class="p-mv__message p-mv__message--tab">
          <p class="p-mv__text p-mv__text--primary xs-mb20">WEB制作の外注下請け</p>
          <p class="p-mv__text p-mv__text__secondary xs-mb20">業務委託なら</p>
          <p class="p-mv__text p-mv__text__tertiary xs-mb20">お任せください</p>
        </div>

        <div class="p-mv__message p-mv__message--pc xl-on">
          <p class="p-mv__text p-mv__text--primary lg-mb40">WEB制作の外注下請け</p>
          <p class="p-mv__text p-mv__text__secondary">業務委託ならお任せください</p>
        </div>

        <div class="p-mv__scroll">
          <p class="p-mv__scroll__text lg-on">Scroll Down</p>
        </div>
      </div>
      <div class="random-demo">
        <div class="p-mv-round p-mv-round-purple1">
          <picture>
            <img src="img/mv-round--purple1.svg" alt="" />
          </picture>
        </div>

        <div class="p-mv-round p-mv-round-purple2">
          <picture>
            <img src="img/mv-round--purple3.svg" alt="" />
          </picture>
        </div>
        <div class="p-mv-round p-mv-round-purple3">
          <picture>
            <img src="img/mv-round--purple2.svg" alt="" />
          </picture>
        </div>
        <div class="p-mv-round p-mv-round-yellow">
          <picture>
            <img src="img/mv-round--yellow.svg" alt="" />
          </picture>
        </div>

      </div>

    </div>
  </section>
  <!-- //mv -->
  <!-- feature -->
  <section class="l-cont l-cont--feature">
    <div class="l-cont__inner l-cont--feature__inner">
      <div class="p-feature">
        <div class="p-feature__inner">
          <div class="p-feature__heading xs-mb55 lg-mb0">
            <h2 class="p-feature__heading--en c-heading c-heading--en xs-mb5 lg-mb10"><span>Feature</span></h2>
            <p class="p-feature__heading--jp c-heading c-heading--jp">サービスの特徴</p>
          </div>
          <div class="p-feature__body">
            <div class="p-feature__unit xs-mb50 xs-mb50">
              <div class="p-feature__title xs-mb15">
                <h3 class="p-feature__title--en c-title c-title--en xs-mb5 lg-mb10">Reproducibility</h3>
                <p class="p-feature__title--jp c-title c-title--jp">デザイナーの要望を再現</p>
              </div>
              <p class="p-feature-text c-text c-text--jp">デザインデータを完全再現したサイト制作のほかに、お客様の要望に沿ったサイト制作を行います。</p>
            </div>

            <div class="p-feature__unit xs-mb50 xs-mb55">
              <div class="p-feature__title xs-mb15">
                <h3 class="p-feature__title--en c-title c-title--en xs-mb5 lg-mb10">Maintainability</h3>
                <p class="p-feature__title--jp c-title c-title--jp">リリース後の修正も低コスト</p>
              </div>
              <p class="p-feature-text c-text c-text--jp">css設計に基づいたコーディングを行行います。そのため、あとから追加・更新する際に、修正がしやすいです。</p>
            </div>

            <div class="p-feature__unit">
              <div class="p-feature__title xs-mb15">
                <h3 class="p-feature__title--en c-title c-title--en xs-mb5 lg-mb10">With Confidence</h3>
                <p class="p-feature__title--jp c-title c-title--jp">作業進捗は常に「見える化」</p>
              </div>
              <p class="p-feature-text c-text c-text--jp">スケジュールを立ててから、業務に取り組 みます。そうすることで、納期を守ります。</p>
            </div>
          </div>
          <div class="p-feature__round-unit xl-on">
            <div class="p-feature__round">
              <div class="p-feature__round__small"></div>
              <div class="p-feature__round__large"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //feature -->

  <!-- works -->
  <section class="l-cont l-cont--works">
    <div class="l-cont__inner l-cont--works__inner">

      <div class="p-works">
        <div class="p-works__wrapper c-bgc--navy">
          <div class="p-works__inner">

            <!-- heading -->
            <div class="p-works__heading">
              <h2 class="p-works__heading--en c-heading c-heading--en xs-mb5 lg-mb10 xs-mr10 lg-mr45"><span>Works</span></h2>
              <p class="p-works__heading--jp c-heading c-heading--jp">実績</p>
            </div>
            <!-- //heading -->
            <!-- body -->
            <div class="p-works__body">
              <div class="p-works__intro xs-mb20 lg-mb65">

                <p class="p-works__lead c-lead c-lead--jp lg-mb15 xxl-mb0">私のこれまでの制作物です。<br>何を学んできたのか？<br class="xs-on lg-off">ぜひ、ご覧ください。</p>
                <div class="p-works__btn-unit xs-off">
                  <div class="p-works__arrow-unit">
                    <div class="p-works__arrow p-works__arrow-left js_swiper-next lg-mr20"></div>
                    <div class="p-works__arrow p-works__arrow-right js_swiper-prev"></div>
                  </div>
                  <a href="works-page.html" class="p-works__btn c-rounded-btn"><span class="lg-mr10">Read</span><span>More</span></a>
                </div>
              </div>


              <div class="p-works__card-unit swiper">
                <div class="swiper-wrapper">
                  <!-- rehanote -->
                  <a href="/works-page.html" class="p-works__card swiper-slide">
                    <div class="p-works__card__wrapper xs-mb15 lg-mb20">
                      <picture>
                        <source srcset="img/sp-top-rehanote@2x.jpg" media="(min-width: 0px)" />
                        <source srcset="img/sp-top-rehanote@2x.jpg" media="(min-width: 640px)" />
                        <source srcset="img/pc-top-rehanote@2x.jpg" media="(min-width: 960px)" />
                        <img src="img/pc-top-rehanote@2x.jpg" alt="" />
                        <picture>
                    </div>
                    <div class="p-works__card__body">
                      <p class="p-works__card__title c-title--jp xs-mb10 lg-mb15">rehanote</p>
                      <ul class="p-works__card__list">
                        <li class="p-works__card__item c-text--jp xs-mb10 xxl-mb0 xxl-mr20">Design</li>
                        <li class="p-works__card__item c-text--jp">html/css</li>
                      </ul>
                    </div>
                  </a>
                  <!-- //rehanote -->

                  <!-- nakamura -->
                  <a href="/works-page.html" class="p-works__card swiper-slide">
                    <div class="p-works__card__wrapper xs-mb15 lg-mb20">
                      <picture>
                        <source srcset="img/sp-top-nakamura@2x.jpg" media="(min-width: 0px)" />
                        <source srcset="img/sp-top-nakamura@2x.jpg" media="(min-width: 640px)" />
                        <source srcset="img/pc-top-nakamura@2x.jpg" media="(min-width: 960px)" />
                        <img src="img/pc-top-nakamura@2x.jpg" alt="" />
                        <picture>
                    </div>
                    <div class="p-works__card__body">
                      <p class="p-works__card__title c-title--jp xs-mb10 lg-mb15">中村歯科</p>
                      <ul class="p-works__card__list">
                        <li class="p-works__card__item c-text--jp xs-mb10 xxl-mb0 xxl-mr20">html/css</li>
                        <li class="p-works__card__item c-text--jp">css設計(PRECSS)</li>
                      </ul>
                    </div>
                  </a>
                  <!-- //nakamura -->

                  <!-- art -->
                  <a href="/works-page.html" class="p-works__card swiper-slide">
                    <div class="p-works__card__wrapper xs-mb15 lg-mb20">
                      <picture>
                        <source srcset="img/sp-top-art@2x.jpg" media="(min-width: 0px)" />
                        <source srcset="img/sp-top-art@2x.jpg" media="(min-width: 640px)" />
                        <source srcset="img/pc-top-art@2x.jpg" media="(min-width: 960px)" />
                        <img src="img/pc-top-art@2x.jpg" alt="" />
                        <picture>
                    </div>
                    <div class="p-works__card__body">
                      <p class="p-works__card__title c-title--jp xs-mb10 lg-mb15">新神戸アート歯科</p>
                      <ul class="p-works__card__list">
                        <li class="p-works__card__item c-text--jp xs-mb10 xxl-mb0 xxl-mr20">html/css</li>
                        <li class="p-works__card__item c-text--jp">css設計(PRECSS)</li>
                      </ul>
                    </div>
                  </a>
                  <!-- //art -->

                  <!-- fides -->
                  <a href="/works-page.html" class="p-works__card swiper-slide">
                    <div class="p-works__card__wrapper xs-mb15 lg-mb20">
                      <picture>
                        <source srcset="img/sp-top-fides@2x.jpg" media="(min-width: 0px)" />
                        <source srcset="img/sp-top-fides@2x.jpg" media="(min-width: 640px)" />
                        <source srcset="img/pc-top-fides@2x.jpg" media="(min-width: 960px)" />
                        <img src="img/pc-top-fides@2x.jpg" alt="" />
                        <picture>
                    </div>
                    <div class="p-works__card__body">
                      <p class="p-works__card__title c-title--jp xs-mb10 lg-mb15">fides</p>
                      <ul class="p-works__card__list">
                        <li class="p-works__card__item c-text--jp xs-mb10 xxl-mb0 xxl-mr20">html/css</li>
                        <li class="p-works__card__item c-text--jp">CSS設計(FLOCSS)</li>
                      </ul>
                    </div>
                  </a>
                  <!-- //fides -->
                </div>
              </div>

              <div class="p-works__btn-unit--under lg-off">
                <a href="/works-page.html" class="p-works__btn c-rounded-btn"><span class="xs-mr10">Read</span><span>More</span></a>
              </div>
            </div>
            <!-- //body -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /works -->

  <!-- contact -->
  <section class="l-cont l-cont--contact">
    <div class="l-cont__inner l-cont--contact__inner">

      <div class="p-contact-top__wrapper">
        <div class="p-contact">
          <div class="p-contact-top">
            <div class="p-contact__inner">
              <!-- heading -->
              <div class="p-contact__heading xs-mb65 lg-mb60">
                <p class="p-contact__heading--jp c-heading c-heading--jp xs-mb5 lg-mb10"><span>お問い合わせ</span></p>
                <h2 class="p-contact__heading--en c-heading c-heading--en"><span>Contact</span></h2>
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
                    <p class="p-contact__title xs-mb15 lg-mb20">メールアドレス</p>
                    <p class="p-contact__textbox"></p>
                  </div>
                </div>
                <div class="p-contact__secondary">
                  <div class="p-contact__item">
                    <p class="p-contact__title xs-mb15 lg-mb20">お問い合わせ内容</p>
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

  <footer class="l-footer">
    <div class="l-footer__inner">
      <div class="p-footer">
        <p class="p-footer__copyright"><span class="xs-mr10">WEB</span><span class="xs-mr10">PRODUCTION STUDIO</span><span>YUTO</span></p>
      </div>
    </div>
  </footer>

  <?php get_footer();  ?>
</body>

</html>