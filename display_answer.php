<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="media.css">
    <link rel="icon" href="./images/doc.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <title>CHECKING</title>
  </head>
  <body>

  <header class="header">
    <div class="wrap">
      <div class="header_wrap">
        <div><a href="index.php"><img src="./images/doc.svg" alt="logo" width="50px" style="margin-bottom: 10px;"/></a></div>
        <div class="logo"><a href="index.php">AUTHENTICITY</a></div>
        <ul class="menu">
          <li><a href="about_project.php" class="menu_item">О ПРОЕКТЕ</a></li>
          <li><a href="signin.php" class="menu_item">АВТОРИЗАЦИЯ</a></li>
        </ul>
      </div>
    </div>
  </header>

    <intro class="intro">
        
      <div class="nav-link" style="text-align: left">
        <p><a href="./check_license.php">
            <img src="./images/back.png" alt="law" width="50"/></a></p>
      </div>


      <div class="container"> 
        <div class="row">
          <div class="col">
            <div class="header__info">
              <h1 class="title">Номер лицензии организациии:</h1>
              <h1 class="title"><?=$licence?></h1>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
          </div>
        </div>
      </div> 
    </intro>


    <section class="about">
      <div class="answer_container">
        <div class="col">

          <table class="table">
            <tr class="tr">
             <th width="3%"><img class="table_image" src="images/building.png" alt="building" /></th>
             <th width="20%" style="margin: middle"><br>Название организации</th>
             <th width="60%" height="100" ><?=$title?></th>
            </tr>

            <tr class="tr">
             <th width="3%"><img class="table_image" src="images/geozone.png" alt="geozone" /></th>
             <th width="10%" style="margin: middle"><br>Адрес места оказания услуг</th>
             <th width="60%" height="100" ><?=$address?></th>
            </tr>
          
            <tr class="tr">
             <th width="3%"><img class="table_image" src="images/date.png" alt="date" /></th>
             <th width="20%" style="margin: middle"><br>Дата принятия решения о предоставлении (переоформлении) лицензии</th>
             <th width="60%" height="100" ><?=$validity?></th>
            </tr>

            <tr class="tr">
             <th width="3%"><img class="table_image" src="images/inn.png" alt="inn" /></th>
             <th width="20%" style="margin: middle"><br>ИНН</th>
             <th width="60%" height="100" ><?=$inn?></th>
            </tr>

            <tr class="tr">
             <th width="3%"><img class="table_image" src="images/ogrn.png" alt="ogrn" /></th>
             <th width="20%" style="margin: middle"><br>ОГРН</th>
             <th width="60%" height="100" ><?=$ogrn?></th>
            </tr>

          </table>
          <div class="row_buttons">
            <button type='submit' class="btn"><a href="./check_license.php" style="color: black">Вернуться</a></button>
          </div>

          <!-- <h2 class="license_format_text">Доступен просмотр услуг, предоставляемых данной организацией</h2>

          <div class="row_buttons">
            <?=$name = "djek"?>
            <button type='submit' class="btn"><a href="./services.php?title='<?=$title;?>'" style="color: black">Услуги организации</a></button>
          </div> -->

        </div>
      </div>
    </section>

    <!-- LINK -->

    <section class="link_section">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="link_title">Использованный набор открытых данных доступен по ссылке:</h1>
                </div>
            </div>
            <div class="database_link">
                <a href="https://data.mos.ru/opendata/7707089084-perechen-organizatsiy-imeyushchih-litsenziyu-na-vydachu-spravok-dlya-polucheniya-voditelskih-udostovereniy-noshenie-orujiya-i-drugie?pageNumber=4&versionNumber=3&releaseNumber=21"
                target="_blank">Перечень организаций, имеющих лицензию на выдачу справок для получения 
                водительских удостоверений, ношение оружия и другие</a>
            </div>            
        </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
