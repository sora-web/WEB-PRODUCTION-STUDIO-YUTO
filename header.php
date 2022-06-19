  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.7/swiper-bundle.css" integrity="sha512-g0BdMh4zEp4DuzHdoenUitpFx195QZfSFq5sd04kXZLwz5F9pUlGqwk+1jlvBBFGOnTCt0b5FsmQyl+5v2fxWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
  <script>
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
  </script>
  <title>WEB PRODUCTION STADUO YUTO</title>
  <?php wp_head();  ?>