         <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="profile.php?id=<?=($_COOKIE['id_user'])?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Користувач
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="zamovlenya.php?id=<?=($_COOKIE['id_user'])?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Історія замовлень
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="basket.php?id=<?=($_COOKIE['id_user'])?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Корзина
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Послуги
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user-info.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Інформація про панель користувача
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Ваші замовлення</span>
              <a class="d-flex align-items-center text-muted" href="createzam.php?id=<?=($_COOKIE['id_user'])?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
              </a>
            </h6>
            <hr/>
            <ul class="nav flex-column mb-2">
            <?php 
                       include '/xampp/htdocs/admin/database/zamovlenya.php';
                       foreach($zm as $zam){
                       if($zam[1] == $_COOKIE['id_user']){
                            if($zam[3] == "В процесі виконання"){
                            echo'
                            <li class="nav-item">
                            <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  
                            <p style="text-align: center; color: black; font-size: 18px">Тип: '.$zam[2].'</p>
                            <p style="text-align: center; color: black; font-size: 18px">Номер замовлення: '.$zam[0].'</p>
                            <p style="text-align: center; font-size: 20px">Статус виконання:</p>
                            <p style="color: gray; text-align: center;">'.$zam[3].'</p>

                            <a href="info-zamovlenya.php?idu='.$_COOKIE["id_user"].'&idz='.$zam[0].'" class="nav-link">Деталі</a>
                            <hr/>
                            </a>
                            </li>';
                        }else if($zam[3] == "Очікує черги"){
                            echo'
                            <li class="nav-item">
                            <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  
                            <p style="text-align: center; color: black; font-size: 18px">Тип: '.$zam[2].'</p>
                            <p style="text-align: center; color: black; font-size: 18px">Номер замовлення: '.$zam[0].'</p>
                            <p style="text-align: center; font-size: 20px">Статус виконання:</p>
                            <p style="color: gray; text-align: center;">'.$zam[3].'</p>

                            <a href="info-zamovlenya.php?idu='.$_COOKIE["id_user"].'&idz='.$zam[0].'" class="nav-link">Деталі</a>
                            <hr/>
                            </a>
                            </li>';}
                            ;}}
            ?>
            </ul>
          </div>
        </nav>