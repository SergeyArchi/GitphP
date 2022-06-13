<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin-style.css" rel="stylesheet">
    <link href="/admin/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="pricing.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
<?php if($_COOKIE['user_user'] == ""): 
      header("Location: index.php")?>
      <?php else: ?>

  <script src="https://partner.googleadservices.com/gampad/cookie.js?domain=bootstrap-4.ru&amp;callback=_gfp_s_&amp;client=ca-pub-8588635311388465&amp;cookie=ID%3Dc99ab4e1bbddda05-2235e9be5ec800c1%3AT%3D1623613763%3ART%3D1623613763%3AS%3DALNI_MZcX3E-ZA85YOEqVlVAD8bRutlchQ"></script><script src="https://pagead2.googlesyndication.com/pagead/js/r20210607/r20190131/show_ads_impl.js?bust=exp%3D31060974" id="google_shimpl"></script><script async="" src="https://mc.yandex.ru/metrika/tag.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script defer="">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4481610-59', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript"> (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(39705265, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8588635311388465",
    enable_page_level_ads: true
  });
</script>
    <?php
            echo
            '        
            <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="profile.php?id='.($_COOKIE['id_user']).'">Профіль</a>
            <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
            <a class="nav-link" href="exit.php">Вийти</a>
            </li>
            </ul>
            </nav>
            ';          
    ?>
    <div class="container-fluid">
      <div class="row">

      <?php require "profile_block/listgroup.php"?>
      
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2" style="text-align: center;">Корзина</h1>
          </div>
        </main>
      </div>
    </div>
    <ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;" data-ad-status="unfilled"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_0_anchor" style="display:block;border:none;height:0px;margin:0;padding:0;position:relative;visibility:visible;width:0px;background-color:transparent;"><iframe id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" frameborder="0" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-8588635311388465&amp;output=html&amp;adk=1812271804&amp;adf=3025194257&amp;lmt=1623614333&amp;plat=1%3A16809992%2C2%3A16809992%2C9%3A32776%2C16%3A8388608%2C17%3A32%2C24%3A32%2C25%3A32%2C30%3A1081344%2C32%3A32&amp;format=0x0&amp;url=https%3A%2F%2Fbootstrap-4.ru%2Fdocs%2F4.0%2Fexamples%2Fdashboard%2F&amp;ea=0&amp;flash=0&amp;pra=5&amp;wgl=1&amp;dt=1623614333268&amp;bpp=2&amp;bdt=100&amp;idt=36&amp;shv=r20210607&amp;cbv=%2Fr20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dc99ab4e1bbddda05-2235e9be5ec800c1%3AT%3D1623613763%3ART%3D1623613763%3AS%3DALNI_MZcX3E-ZA85YOEqVlVAD8bRutlchQ&amp;nras=1&amp;correlator=1301685746119&amp;frm=20&amp;pv=2&amp;ga_vid=793295963.1623613764&amp;ga_sid=1623614333&amp;ga_hid=1624818251&amp;ga_fc=0&amp;u_tz=180&amp;u_his=5&amp;u_java=0&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1040&amp;u_aw=1920&amp;u_cd=24&amp;u_nplug=3&amp;u_nmime=4&amp;adx=-12245933&amp;ady=-12245933&amp;biw=1864&amp;bih=970&amp;scr_x=0&amp;scr_y=0&amp;eid=31060974%2C31061407%2C44744016&amp;oid=3&amp;pvsid=4291311642584822&amp;pem=980&amp;ref=https%3A%2F%2Fbootstrap-4.ru%2Fdocs%2F4.0%2Fexamples%2F&amp;eae=2&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1920%2C0%2C1920%2C1040%2C1879%2C970&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=32768&amp;bc=31&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;dtd=47" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!1" data-load-complete="true"></iframe></ins></ins></ins><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script><iframe id="google_osd_static_frame_8678747250719" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe>
    <script>
      feather.replace()
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  <?php endif; ?>
</body>
</html>