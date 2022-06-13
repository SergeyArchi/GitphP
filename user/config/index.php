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
        <?php if($_COOKIE['user_user'] == ""): ?>
        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
a:hover,a:focus{
 outline: none;
 text-decoration: none;
}
.tab{
 background: #200122;
 background: -webkit-linear-gradient(to bottom, #6f0000, #200122);
 background: linear-gradient(to bottom, #6f0000, #200122);
 padding: 40px 50px;
 position: relative;
}
.tab:before{
 content: "";
 width: 100%;
 height: 100%;
 display: block;
 position: absolute;
 top: 0;
 left: 0;
 background: linear-gradient(#2e3a6a,#2f0b45);
 opacity: 0.85;
}
.tab .nav-tabs{
 border-bottom: none;
 padding: 0 20px;
 position: relative;
}
.tab .nav-tabs li{ margin: 0 30px 0 0; }
.tab .nav-tabs li a{
 font-size: 18px;
 color: #fff;
 border-radius: 0;
 text-transform: uppercase;
 background: transparent;
 padding: 0;
 margin-right: 0;
 border: none;
 border-bottom: 2px solid transparent;
 opacity: 0.5;
 position: relative;
 transition: all 0.5s ease 0s;
}
.tab .nav-tabs li a:hover{ background: transparent; }
.tab .nav-tabs li.active a,
.tab .nav-tabs li.active a:focus,
.tab .nav-tabs li.active a:hover{
 border: none;
 background: transparent;
 opacity: 1;
 border-bottom: 2px solid #eec111;
 color: #fff;
}
.tab .tab-content{
 padding: 20px 0 0 0;
 margin-top: 40px;
 background: transparent;
 z-index: 1;
 position: relative;
}
.form-bg{ background: #ddd; }
.form-horizontal .form-group{
 margin: 0 0 15px 0;
 position: relative;
}
.form-horizontal .form-control{
 height: 40px;
 background: rgba(255,255,255,0.2);
 border: none;
 border-radius: 20px;
 box-shadow: none;
 padding: 0 20px;
 font-size: 14px;
 font-weight: bold;
 color: #fff;
 transition: all 0.3s ease 0s;
}
.form-horizontal .form-control:focus{
 box-shadow: none;
 outline: 0 none;
}
.form-horizontal .form-group label{
 padding: 0 20px;
 color: #7f8291;
 text-transform: capitalize;
 margin-bottom: 10px;
}
.form-horizontal .main-checkbox{
 width: 20px;
 height: 20px;
 background: #eec111;
 float: left;
 margin: 5px 0 0 20px;
 border: 1px solid #eec111;
 position: relative;
}
.form-horizontal .main-checkbox label{
 width: 20px;
 height: 20px;
 position: absolute;
 top: 0;
 left: 0;
 cursor: pointer;
}
.form-horizontal .main-checkbox label:after{
 content: "";
 width: 10px;
 height: 5px;
 position: absolute;
 top: 5px;
 left: 4px;
 border: 3px solid #fff;
 border-top: none;
 border-right: none;
 background: transparent;
 opacity: 0;
 -webkit-transform: rotate(-45deg);
 transform: rotate(-45deg);
}
.form-horizontal .main-checkbox input[type=checkbox]{ visibility: hidden; }
.form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{ opacity: 1; }
.form-horizontal .text{
 float: left;
 font-size: 14px;
 font-weight: bold;
 color: #fff;
 margin-left: 7px;
 line-height: 20px;
 padding-top: 5px;
 text-transform: capitalize;
}
.form-horizontal .btn{
 width: 100%;
 background: #eec111;
 padding: 10px 20px;
 border: none;
 font-size: 14px;
 font-weight: bold;
 color: #fff;
 border-radius: 20px;
 text-transform: uppercase;
 margin: 20px 0 30px 0;
}
.form-horizontal .btn:focus{
 background: #eec111;
 color: #fff;
 outline: none;
 box-shadow: none;
}
.form-horizontal .forgot-pass{
 border-top: 1px solid #615f6c;
 margin: 0;
 text-align: center;
}
.form-horizontal .forgot-pass .btn{
 width: auto;
 background: transparent;
 margin: 30px 0 0 0;
 color: #615f6c;
 text-transform: capitalize;
 transition: all 0.3s ease 0s;
}
.form-horizontal .forgot-pass .btn:hover{ color: #eec111; }
@media only screen and (max-width: 479px){
 .tab{ padding: 40px 20px; }
}
</style>

<div class="container">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="tab" role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Авторизация</a></li>
          <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Реєстрація</a></li>
        </ul>
        <div class="tab-content tabs">
          <div role="tabpanel" class="tab-pane fade in active" id="Section1">
            <form class="form-horizontal" action="autorication.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Логін</label>
              <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br/>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Пароль</label>
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"><br/>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-default"></input>
            </div>
            </form>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="Section2">
            <form class="form-horizontal" action="registers.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Логін</label>
              <input type="text" class="form-control" name="login" id="login">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Ім'я</label>
              <input type="text" class="form-control" id="fname" name="fname">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Прізвище</label>
              <input type="text" class="form-control" id="lname" name="lname">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">По-батькові</label>
              <input type="text" class="form-control" id="oname" name="oname">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Скринька</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Пароль</label>
              <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Повтор пароля</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-default"></input>
            </div>
            </form>
          </div>
      </div>
  </div>
</div>
  </div>
    </div>


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
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                This week
              </button>
            </div>
          </div>
          <canvas class="my-4 chartjs-render-monitor" id="myChart" width="634" height="267" style="display: block; width: 634px; height: 267px;"></canvas>
          <h2>Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
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