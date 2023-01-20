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
    <title>SERVICES</title>
  </head>
  <body>
    <header class="header">
        
      <div class="nav-link" style="text-align: left">
        <p><a href="./display_answer.php">
            <img src="./images/back.png" alt="law" width="50"/></a></p>
      </div>


      <div class="container"> 
        <div class="row">
          <div class="col">
            <div class="header__info">
              <!-- <h1 class="title">Номер лицензии организациии:</h1> -->
              <h1 class="title"><?=$title?></h1>
              
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
          </div>
        </div>
      </div> 
    </header>


    <section class="about">
      <div class="answer_container">
        <div class="col">
        <h2 class="title">Оказываемые услуги</h2>

        <p class="suptitle"><?=$services?></p>
         
          <div class="row_buttons">
            <button type='submit' class="btn"><a href="./check_license.php" style="color: black">Вернуться</a></button>
          </div>

          <h2 class="license_format_text">Достпен просмотр услуг, предоставляемых данной организацией</h2>

          <div class="row_buttons">
            <button type='submit' class="btn"><a href="./services.php" style="color: black">Услуги организации</a></button>
          </div>

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
