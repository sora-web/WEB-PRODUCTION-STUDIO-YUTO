<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.7/swiper-bundle.css" integrity="sha512-g0BdMh4zEp4DuzHdoenUitpFx195QZfSFq5sd04kXZLwz5F9pUlGqwk+1jlvBBFGOnTCt0b5FsmQyl+5v2fxWw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet"> -->
  <!-- <script>
   (function(d) {
    var config = {
      kitId: 'loi5roe',
      scriptTimeout: 3000,
      async: true
     },
     h = d.documentElement,
     t = setTimeout(function() {
      h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
     }, config.scriptTimeout),
     tk = d.createElement("script"),
     f = false,
     s = d.getElementsByTagName("script")[0],
     a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
     a = this.readyState;
     if (f || a && a != "complete" && a != "loaded") return;
     f = true;
     clearTimeout(t);
     try {
      Typekit.load(config)
     } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s)
   })(document);
  </script> -->
  <!-- <title>WEB PRODUCTION STADUO YUTO</title> -->
  <?php wp_head();  ?>

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